<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::firstOrCreate([], [
            'telefoon' => '+31 6 00 00 00 00',
            'email' => 'info@noatrinity.nl',
            'adres' => 'Adres komt hier',
            'postcode_stad' => 'Stad, Postcode',
            'openingstijden_ma_vr' => '09:00 - 18:00',
            'openingstijden_za' => '10:00 - 16:00',
            'openingstijden_zo' => 'Gesloten',
        ]);
    }
}
