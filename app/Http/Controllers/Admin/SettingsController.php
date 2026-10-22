<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit()
    {
        $settings = SiteSetting::instance();

        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $regels = [
            'telefoon' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'adres' => 'required|string|max:255',
            'postcode_stad' => 'required|string|max:255',
            'instagram_url' => 'nullable|url|max:255',
            'facebook_url' => 'nullable|url|max:255',
            'whatsapp' => 'nullable|string|max:30',
            'booking_url' => 'nullable|url|max:500',
        ];

        foreach (array_keys(SiteSetting::DAGEN) as $dag) {
            $regels["openingstijden_$dag"] = 'required|string|max:100';
        }

        $validated = $request->validate($regels, [
            'instagram_url.url' => 'Vul een volledige link in, beginnend met https://',
            'facebook_url.url' => 'Vul een volledige link in, beginnend met https://',
            'booking_url.url' => 'Vul een volledige link in, beginnend met https://',
        ]);

        SiteSetting::instance()->update($validated);

        return redirect()->route('admin.settings.edit')->with('success', 'Instellingen opgeslagen.');
    }
}
