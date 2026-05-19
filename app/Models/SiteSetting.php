<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['telefoon', 'email', 'adres', 'postcode_stad', 'openingstijden_ma_vr', 'openingstijden_za', 'openingstijden_zo'])]
class SiteSetting extends Model
{
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
}
