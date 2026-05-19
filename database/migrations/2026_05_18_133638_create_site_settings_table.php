<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('telefoon')->default('+31 6 00 00 00 00');
            $table->string('email')->default('info@noatrinity.nl');
            $table->string('adres')->default('Adres komt hier');
            $table->string('postcode_stad')->default('Stad, Postcode');
            $table->string('openingstijden_ma_vr')->default('09:00 - 18:00');
            $table->string('openingstijden_za')->default('10:00 - 16:00');
            $table->string('openingstijden_zo')->default('Gesloten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
