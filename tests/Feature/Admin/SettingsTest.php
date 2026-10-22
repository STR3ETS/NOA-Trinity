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
            'instagram_url' => 'https://www.instagram.com/noa.trinity.bodyshaping',
            'facebook_url' => 'https://www.facebook.com/share/19vsYQkLso/',
            'whatsapp' => '',
            'booking_url' => 'https://noa-trinity-body-shaping.salonized.com/widget_bookings/new',
            'openingstijden_ma' => '09:00 - 18:00',
            'openingstijden_di' => '09:00 - 18:00',
            'openingstijden_wo' => 'Gesloten',
            'openingstijden_do' => '09:00 - 18:00',
            'openingstijden_vr' => '09:00 - 18:00',
            'openingstijden_za' => '10:00 - 16:00',
            'openingstijden_zo' => 'Gesloten',
        ];

        $response = $this->actingAs(User::factory()->create())
            ->put(route('admin.settings.update'), $gegevens);

        $response->assertRedirect(route('admin.settings.edit'));
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('site_settings', array_merge($gegevens, ['whatsapp' => null]));
        $this->assertSame(1, SiteSetting::count());

        $settings = SiteSetting::query()->first();
        $this->assertSame('https://wa.me/31619013650', $settings->whatsapp_link);
        $this->assertSame('noa.trinity.bodyshaping', $settings->instagram_handle);
        $this->assertSame([
            ['label' => 'Maandag – Dinsdag', 'tijd' => '09:00 - 18:00'],
            ['label' => 'Woensdag', 'tijd' => 'Gesloten'],
            ['label' => 'Donderdag – Vrijdag', 'tijd' => '09:00 - 18:00'],
            ['label' => 'Zaterdag', 'tijd' => '10:00 - 16:00'],
            ['label' => 'Zondag', 'tijd' => 'Gesloten'],
        ], $settings->openingstijden());
    }

    public function test_invalid_booking_url_is_rejected(): void
    {
        $this->actingAs(User::factory()->create())
            ->from(route('admin.settings.edit'))
            ->put(route('admin.settings.update'), ['booking_url' => 'geen-link'])
            ->assertRedirect(route('admin.settings.edit'))
            ->assertSessionHasErrors('booking_url');
    }

    public function test_guest_cannot_update_settings(): void
    {
        $this->put(route('admin.settings.update'), ['telefoon' => '0612345678'])
            ->assertRedirect(route('admin.login'));
    }
}
