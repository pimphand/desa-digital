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
        Schema::create('profile_desas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->json('visi_misi')->nullable();
            $table->json('batas_wilayah')->nullable()->comment('batas wilayah dalam format JSON, Luas, Batas Utara, Batas Selatan, Batas Barat, Batas Timur');
            $table->longText('sejarah_desa')->nullable();
            $table->json('lokasi')->nullable()->comment('longitude dan latitude dalam format JSON');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_desas');
    }
};
