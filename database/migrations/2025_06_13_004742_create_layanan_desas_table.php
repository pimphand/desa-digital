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
        Schema::create('layanans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // Identitas Layanan
            $table->string('slug')->unique()->comment('Slug untuk layanan desa, digunakan untuk URL yang ramah SEO');
            $table->string('nama_layanan')->comment('Nama layanan desa');
            $table->text('deskripsi')->comment('Deskripsi layanan desa');
            $table->string('kategori')->comment('Kategori layanan desa, e.g., Kesehatan, Pendidikan, Infrastruktur, Surat');
            $table->string('kontak')->nullable()->comment('Kontak untuk layanan desa, bisa berupa nomor telepon atau email');
            $table->string('status')->default('aktif')->comment('Status layanan desa, e.g., Aktif, Tidak Aktif');
            $table->string('lokasi')->nullable()->comment('Lokasi layanan desa, jika relevan');
            $table->text('jadwal')->nullable()->comment('Jadwal layanan desa, jika ada');
            $table->integer('biaya')->default(0)->comment('Biaya yang dikenakan untuk layanan desa, jika ada');

            // Persyaratan Layanan
            $table->json('persyaratan')->nullable()->comment(' Dokumen yang Diperlukan* [documnent = "ktp dll",keterangan = "KTP, KK, Surat Pengantar"]');
            $table->json('prosedur')->nullable()->comment('[langkah, keterangan] Prosedur untuk mengakses layanan desa, misalnya langkah-langkah yang harus diikuti oleh warga untuk mendapatkan layanan tersebut');
            $table->string('lampiran')->nullable()->comment('Lampiran terkait layanan desa, misalnya dokumen atau formulir yang perlu diisi oleh warga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_desas');
    }
};
