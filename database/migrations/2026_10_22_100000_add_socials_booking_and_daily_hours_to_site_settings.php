<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('instagram_url')->nullable()->after('postcode_stad');
            $table->string('facebook_url')->nullable()->after('instagram_url');
            $table->string('whatsapp')->nullable()->after('facebook_url');
            $table->string('booking_url')->nullable()->after('whatsapp');

            foreach (['ma', 'di', 'wo', 'do', 'vr'] as $dag) {
                $table->string("openingstijden_$dag")->default('09:00 - 18:00')->after('booking_url');
            }
        });

        // Bestaande "maandag t/m vrijdag"-tijd overnemen voor elke werkdag en de links alvast vullen.
        DB::table('site_settings')->get()->each(function ($rij) {
            DB::table('site_settings')->where('id', $rij->id)->update([
                'openingstijden_ma' => $rij->openingstijden_ma_vr,
                'openingstijden_di' => $rij->openingstijden_ma_vr,
                'openingstijden_wo' => $rij->openingstijden_ma_vr,
                'openingstijden_do' => $rij->openingstijden_ma_vr,
                'openingstijden_vr' => $rij->openingstijden_ma_vr,
                'instagram_url' => 'https://www.instagram.com/noa.trinity.bodyshaping',
                'facebook_url' => 'https://www.facebook.com/share/19vsYQkLso/',
                'booking_url' => 'https://noa-trinity-body-shaping.salonized.com/widget_bookings/new',
            ]);
        });

        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn('openingstijden_ma_vr');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('openingstijden_ma_vr')->default('09:00 - 18:00')->after('postcode_stad');
        });

        DB::table('site_settings')->update(['openingstijden_ma_vr' => DB::raw('openingstijden_ma')]);

        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'instagram_url', 'facebook_url', 'whatsapp', 'booking_url',
                'openingstijden_ma', 'openingstijden_di', 'openingstijden_wo', 'openingstijden_do', 'openingstijden_vr',
            ]);
        });
    }
};
