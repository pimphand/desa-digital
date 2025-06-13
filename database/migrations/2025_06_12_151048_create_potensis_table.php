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
        Schema::create('potensis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('jenis')->nullable()->comment('Jenis potensi, e.g., Sumber Daya Alam, Budaya, Pariwisata');
            $table->string('lokasi')->nullable()->comment('Lokasi potensi, bisa berupa alamat atau koordinat');
            $table->string('gambar')->nullable()->comment('URL atau path gambar potensi');
            $table->json('koordinat')->nullable()->comment('Koordinat potensi dalam format JSON, e.g., {"lat": -7.123456, "lng": 110.123456}');
            $table->text('deskripsi')->nullable()->comment('Deskripsi potensi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensis');
    }
};
