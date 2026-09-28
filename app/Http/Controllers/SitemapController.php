<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Indexeerbare pagina's. Pagina's met "noindex" (privacy, cookies, voorwaarden) horen hier niet in.
     */
    private const PAGINAS = [
        ['route' => 'home', 'view' => 'welcome', 'frequentie' => 'weekly', 'prioriteit' => '1.0', 'afbeeldingen' => [
            'images/laser/laser-oksel-behandeling.jpg',
            'images/cryolipolyse/body-wizard-behandeling.jpg',
            'images/bodysculpting/bodysculpting-pro-4.jpg',
        ]],
        ['route' => 'cryolipolyse', 'view' => 'cryolipolyse', 'frequentie' => 'monthly', 'prioriteit' => '0.9', 'afbeeldingen' => [
            'images/cryolipolyse/body-wizard-duo.jpg',
            'images/cryolipolyse/cryo-applicator.jpg',
            'images/cryolipolyse/body-wizard-behandeling.jpg',
            'images/cryolipolyse/body-wizard-duo-apparatuur.jpg',
        ]],
        ['route' => 'body-sculpting', 'view' => 'body-sculpting', 'frequentie' => 'monthly', 'prioriteit' => '0.9', 'afbeeldingen' => [
            'images/bodysculpting/bodysculpting-pro-4.jpg',
            'images/bodysculpting/bodysculpting-pro-4-apparaat.jpg',
        ]],
        ['route' => 'laserontharen', 'view' => 'laserontharen', 'frequentie' => 'monthly', 'prioriteit' => '0.9', 'afbeeldingen' => [
            'images/laser/laser-benen-behandelaar.jpg',
            'images/laser/laser-oksel-ontspannen.jpg',
            'images/laser/diode-ice-4-wave-master.jpg',
            'images/laser/laser-golflengten-scherm.jpg',
            'images/laser/huidtypes.jpg',
            'images/laser/haargroeifasen.jpg',
        ]],
        ['route' => 'gallerij', 'view' => 'gallerij', 'frequentie' => 'weekly', 'prioriteit' => '0.7', 'afbeeldingen' => []],
        ['route' => 'over-mij', 'view' => 'over-mij', 'frequentie' => 'monthly', 'prioriteit' => '0.7', 'afbeeldingen' => [
            'images/merk/noa-trinity-logo.jpg',
        ]],
        ['route' => 'contact', 'view' => 'contact', 'frequentie' => 'monthly', 'prioriteit' => '0.8', 'afbeeldingen' => []],
    ];

    public function index(): Response
    {
        $galerijBijgewerkt = GalleryItem::published()->max('updated_at');

        $urls = array_map(function (array $pagina) use ($galerijBijgewerkt) {
            $gewijzigd = filemtime(resource_path("views/{$pagina['view']}.blade.php"));

            if ($pagina['route'] === 'gallerij' && $galerijBijgewerkt) {
                $gewijzigd = max($gewijzigd, strtotime($galerijBijgewerkt));
            }

            return [
                'loc' => route($pagina['route']),
                'lastmod' => date('Y-m-d', $gewijzigd),
                'frequentie' => $pagina['frequentie'],
                'prioriteit' => $pagina['prioriteit'],
                'afbeeldingen' => array_map(fn ($pad) => asset($pad), $pagina['afbeeldingen']),
            ];
        }, self::PAGINAS);

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
