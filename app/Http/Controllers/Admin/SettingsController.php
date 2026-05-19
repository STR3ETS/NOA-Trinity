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
        $validated = $request->validate([
            'telefoon' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'adres' => 'required|string|max:255',
            'postcode_stad' => 'required|string|max:255',
            'openingstijden_ma_vr' => 'required|string|max:100',
            'openingstijden_za' => 'required|string|max:100',
            'openingstijden_zo' => 'required|string|max:100',
        ]);

        $settings = SiteSetting::instance();
        $settings->update($validated);

        SiteSetting::$cached = null;

        return redirect()->route('admin.settings.edit')->with('success', 'Instellingen opgeslagen.');
    }
}
