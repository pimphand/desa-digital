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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            //pelapor
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->string('lampiran')->nullable(); // URL or path to the attachment
            $table->boolean('show_to_public')->default(true); // Whether the pengaduan is visible to the public

            //tanggapan
            $table->string('prioritas')->nullable()->comment('Tinggi, Sedang, Rendah');
            $table->string('status')->default('pending')->comment('Belum ditanggapi, Sedang diproses, Selesai, Ditolak');
            $table->text('tanggapan')->nullable()->comment('Response from the admin or petugas');
            $table->foreignId('petugas_id')->nullable()->constrained('users'); // Petugas who handles the pengaduan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
