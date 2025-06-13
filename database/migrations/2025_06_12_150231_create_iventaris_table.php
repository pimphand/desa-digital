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
        Schema::create('iventaris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama')->comment('Nama Barang Iventaris');
            $table->string('kategori')->nullable()->comment('kategori barang, e.g., Alat Tulis, Peralatan Elektronik');
            $table->integer('jumlah')->default(0)->comment('Jumlah barang yang tersedia');
            $table->string('nomor_seri')->nullable()->comment('Nomor seri atau identifikasi unik barang');
            $table->string('kondisi')->default('Baik')->comment('Kondisi barang, e.g., Baik, Rusak, Perlu Perbaikan');

            //  Informasi Pengadaan
            $table->date('tanggal_pengadaan')->nullable()->comment('Tanggal pengadaan barang');
            $table->string('sumber_pengadaan')->nullable()->comment('Sumber pengadaan barang, e.g., Pembelian, Donasi');
            $table->bigInteger('harga')->nullable()->comment('Harga barang, jika ada');
            $table->string('lokasi')->nullable()->comment('Lokasi penyimpanan barang, bisa berupa ruangan atau alamat');

            // Keterangan & Foto
            $table->text('keterangan')->nullable()->comment('Keterangan tambahan tentang barang');
            $table->string('foto')->nullable()->comment('URL atau path foto barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iventaris');
    }
};
