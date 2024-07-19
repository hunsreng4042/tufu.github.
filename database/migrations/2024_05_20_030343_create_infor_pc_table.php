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
        Schema::create('infor_pc', function (Blueprint $table) {
            $table->id('No')->primary();;
            $table->string('username');
            $table->string('device_type');
            $table->string('model');
            $table->string('device_name');
            $table->string('serail_number');
            $table->string('mac_address');
            $table->string('ip_addrees');
            $table->string('cpu');
            $table->string('ram');
            $table->string('hdd');
            $table->string('os');
            $table->string('part_upgrade');
            $table->string('office_department');
            $table->string('location');
            $table->string('building_brand');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infor_pc');
    }
};
