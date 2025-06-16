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
        Schema::create('skus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nik')->length(16);
            $table->string('no_surat')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp')->nullable();

            //usaha
            $table->string('nama_usaha')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('sejak')->nullable();
            $table->string('kondisi')->nullable();

            //status
            $table->enum('status', ['Pending', 'Setujui', 'Ditolak'])->default('Pending');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('file_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
