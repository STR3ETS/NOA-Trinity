<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'telefoon', 'email', 'adres', 'postcode_stad',
    'instagram_url', 'facebook_url', 'whatsapp', 'booking_url',
    'openingstijden_ma', 'openingstijden_di', 'openingstijden_wo', 'openingstijden_do',
    'openingstijden_vr', 'openingstijden_za', 'openingstijden_zo',
])]
class SiteSetting extends Model
{
    public const DAGEN = [
        'ma' => 'Maandag', 'di' => 'Dinsdag', 'wo' => 'Woensdag', 'do' => 'Donderdag',
        'vr' => 'Vrijdag', 'za' => 'Zaterdag', 'zo' => 'Zondag',
    ];

    protected $table = 'site_settings';

    protected static ?SiteSetting $cached = null;

    public static function instance(): static
    {
        return static::$cached ??= static::firstOrCreate([]);
    }

    public function getTelefoonLinkAttribute(): string
    {
        return preg_replace('/\s+/', '', $this->telefoon);
    }

    /**
     * WhatsApp-link (wa.me) op basis van het WhatsApp-nummer, of anders het telefoonnummer.
     */
    public function getWhatsappLinkAttribute(): ?string
    {
        $nummer = preg_replace('/\D/', '', $this->whatsapp ?: (string) $this->telefoon);

        if ($nummer === '') {
            return null;
        }

        // Nederlands nummer zonder landcode (06...) omzetten naar internationaal (316...).
        if (str_starts_with($nummer, '0')) {
            $nummer = '31'.substr($nummer, 1);
        }

        return "https://wa.me/$nummer";
    }

    /**
     * Instagram-gebruikersnaam uit de profiel-URL, bijvoorbeeld "noa.trinity.bodyshaping".
     */
    public function getInstagramHandleAttribute(): ?string
    {
        $pad = trim((string) parse_url((string) $this->instagram_url, PHP_URL_PATH), '/');

        return $pad !== '' ? explode('/', $pad)[0] : null;
    }

    /**
     * Link om een afspraak te maken: de online agenda, of anders de contactpagina.
     */
    public function afspraakLink(?string $behandeling = null): string
    {
        return $this->booking_url ?: route('contact', array_filter(['behandeling' => $behandeling]));
    }

    /**
     * Openingstijden per dag, waarbij opeenvolgende dagen met dezelfde tijd worden samengevoegd
     * (bijv. "Maandag – Vrijdag"). Levert [['label' => ..., 'tijd' => ...], ...].
     */
    public function openingstijden(): array
    {
        $groepen = [];

        foreach (self::DAGEN as $code => $naam) {
            $tijd = trim((string) $this->{"openingstijden_$code"});
            $laatste = array_key_last($groepen);

            if ($laatste !== null && $groepen[$laatste]['tijd'] === $tijd) {
                $groepen[$laatste]['tot'] = $naam;
            } else {
                $groepen[] = ['van' => $naam, 'tot' => $naam, 'tijd' => $tijd];
            }
        }

        return array_map(fn ($g) => [
            'label' => $g['van'] === $g['tot'] ? $g['van'] : "{$g['van']} – {$g['tot']}",
            'tijd' => $g['tijd'],
        ], $groepen);
    }
}
