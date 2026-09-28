<?php

namespace App\Support;

use App\Models\SiteSetting;

/**
 * Bouwt de schema.org JSON-LD (@graph) voor de publieke pagina's.
 */
class StructuredData
{
    /**
     * @param  array{url: string, titel: string, omschrijving: string, afbeelding: string, kruimel: ?string, dienst: ?string}  $pagina
     */
    public static function graph(?SiteSetting $settings, array $pagina): array
    {
        $home = url('/');

        $webpagina = [
            '@type' => 'WebPage',
            '@id' => $pagina['url'].'#webpage',
            'url' => $pagina['url'],
            'name' => $pagina['titel'],
            'description' => $pagina['omschrijving'],
            'inLanguage' => 'nl-NL',
            'isPartOf' => ['@id' => $home.'#website'],
            'about' => ['@id' => $home.'#bedrijf'],
            'primaryImageOfPage' => ['@type' => 'ImageObject', 'url' => $pagina['afbeelding']],
        ];

        $graph = [self::bedrijf($settings), self::website()];

        if ($pagina['kruimel']) {
            $webpagina['breadcrumb'] = ['@id' => $pagina['url'].'#breadcrumb'];
            $graph[] = [
                '@type' => 'BreadcrumbList',
                '@id' => $pagina['url'].'#breadcrumb',
                'itemListElement' => [
                    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $home],
                    ['@type' => 'ListItem', 'position' => 2, 'name' => $pagina['kruimel'], 'item' => $pagina['url']],
                ],
            ];
        }

        if ($pagina['dienst']) {
            $webpagina['mainEntity'] = ['@id' => $pagina['url'].'#dienst'];
            $graph[] = [
                '@type' => 'Service',
                '@id' => $pagina['url'].'#dienst',
                'name' => $pagina['dienst'],
                'serviceType' => $pagina['dienst'],
                'description' => $pagina['omschrijving'],
                'url' => $pagina['url'],
                'image' => $pagina['afbeelding'],
                'provider' => ['@id' => $home.'#bedrijf'],
                'areaServed' => ['@type' => 'City', 'name' => 'Leeuwarden'],
            ];
        }

        $graph[] = $webpagina;

        return ['@context' => 'https://schema.org', '@graph' => $graph];
    }

    public static function json(array $data): string
    {
        return json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);
    }

    private static function website(): array
    {
        return [
            '@type' => 'WebSite',
            '@id' => url('/').'#website',
            'url' => url('/'),
            'name' => 'N.O.A Trinity',
            'inLanguage' => 'nl-NL',
            'publisher' => ['@id' => url('/').'#bedrijf'],
        ];
    }

    private static function bedrijf(?SiteSetting $settings): array
    {
        $bedrijf = [
            '@type' => 'BeautySalon',
            '@id' => url('/').'#bedrijf',
            'name' => 'N.O.A Trinity Body Shaping',
            'alternateName' => 'N.O.A Trinity',
            'slogan' => 'Freeze it. Shape it. Love it.',
            'url' => url('/'),
            'logo' => asset('assets/logo.png'),
            'image' => asset('images/merk/noa-trinity-logo.jpg'),
            'areaServed' => ['@type' => 'City', 'name' => 'Leeuwarden'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Behandelingen',
                'itemListElement' => array_map(fn ($dienst) => [
                    '@type' => 'Offer',
                    'itemOffered' => ['@type' => 'Service', 'name' => $dienst[0], 'url' => route($dienst[1])],
                ], [
                    ['Cryolipolyse (vetbevriezen)', 'cryolipolyse'],
                    ['Body sculpting', 'body-sculpting'],
                    ['Laserontharing (diode laser)', 'laserontharen'],
                ]),
            ],
        ];

        if (! $settings) {
            return $bedrijf;
        }

        $bedrijf['email'] = $settings->email;

        // Placeholders uit de standaardinstellingen (zoals "+31 6 00 00 00 00") niet publiceren.
        if (preg_match('/[1-9]/', substr(preg_replace('/\D/', '', (string) $settings->telefoon), -8))) {
            $bedrijf['telephone'] = $settings->telefoon;
        }

        if (preg_match('/^(\d{4}\s?[A-Za-z]{2})[\s,]+(.+)$/', trim((string) $settings->postcode_stad), $postcode)) {
            $bedrijf['address'] = [
                '@type' => 'PostalAddress',
                'streetAddress' => $settings->adres,
                'postalCode' => strtoupper($postcode[1]),
                'addressLocality' => $postcode[2],
                'addressCountry' => 'NL',
            ];
        }

        $openingstijden = array_filter([
            self::openingstijd(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], $settings->openingstijden_ma_vr),
            self::openingstijd(['Saturday'], $settings->openingstijden_za),
            self::openingstijd(['Sunday'], $settings->openingstijden_zo),
        ]);

        if ($openingstijden) {
            $bedrijf['openingHoursSpecification'] = array_values($openingstijden);
        }

        return $bedrijf;
    }

    /**
     * Zet een tekst als "09:00 - 18:00" om naar een OpeningHoursSpecification; "Gesloten" levert null op.
     */
    private static function openingstijd(array $dagen, ?string $tijden): ?array
    {
        if (! preg_match('/(\d{1,2})[:.](\d{2})\s*[-–]\s*(\d{1,2})[:.](\d{2})/', (string) $tijden, $m)) {
            return null;
        }

        return [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => $dagen,
            'opens' => sprintf('%02d:%s', $m[1], $m[2]),
            'closes' => sprintf('%02d:%s', $m[3], $m[4]),
        ];
    }
}
