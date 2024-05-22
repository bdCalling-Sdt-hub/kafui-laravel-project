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
        Schema::create('rquest_queates', function (Blueprint $table) {
            $table->id();
            $table->string('install_system');
            $table->string('system_complet_by');
            $table->string('solar_system_type');
            $table->string('monthly_electric_use');
            $table->text('solar_panel_place');
            $table->text('metarial_on_your_rof');
            $table->text('about_your_project')->nullable();
            $table->text('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_method')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('ship_to_address_type')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rquest_queates');
    }
};
