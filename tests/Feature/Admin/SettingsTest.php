<?php

namespace Tests\Feature\Admin;

use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_update_settings(): void
    {
        $gegevens = [
            'telefoon' => '06 19 01 36 50',
            'email' => 'info@noatrinity.nl',
            'adres' => 'Voorstreek 15',
            'postcode_stad' => '8911 JH Leeuwarden',
            'openingstijden_ma_vr' => '09:00 - 18:00',
            'openingstijden_za' => '10:00 - 16:00',
            'openingstijden_zo' => 'Gesloten',
        ];

        $response = $this->actingAs(User::factory()->create())
            ->put(route('admin.settings.update'), $gegevens);

        $response->assertRedirect(route('admin.settings.edit'));
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('site_settings', $gegevens);
        $this->assertSame(1, SiteSetting::count());
    }

    public function test_guest_cannot_update_settings(): void
    {
        $this->put(route('admin.settings.update'), ['telefoon' => '0612345678'])
            ->assertRedirect(route('admin.login'));
    }
}
