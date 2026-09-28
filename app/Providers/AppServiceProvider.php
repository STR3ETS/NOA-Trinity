<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Canonical-URL's en sitemap altijd met https genereren als de site op https draait (ook achter een proxy).
        if (str_starts_with(config('app.url'), 'https://')) {
            URL::forceScheme('https');
        }

        if (Schema::hasTable('site_settings')) {
            View::share('settings', SiteSetting::instance());
        }
    }
}
