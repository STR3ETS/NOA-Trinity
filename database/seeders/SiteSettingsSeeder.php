<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::firstOrCreate([], [
            'telefoon' => '06 19 01 36 50',
            'email' => 'info@noatrinity.nl',
            'adres' => 'Voorstreek 15',
            'postcode_stad' => '8911 JH Leeuwarden',
            'openingstijden_ma_vr' => '09:00 - 18:00',
            'openingstijden_za' => '10:00 - 16:00',
            'openingstijden_zo' => 'Gesloten',
        ]);
    }
}
