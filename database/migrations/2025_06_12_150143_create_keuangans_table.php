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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('jenis')->comment('Pendapatan, Pengeluaran, atau Investasi');
            $table->text('deskripsi')->comment('deskripsi transaksi keuangan');
            $table->bigInteger('jumlah')->comment('Jumlah uang dalam transaksi');
            $table->date('tanggal')->comment('Tanggal transaksi keuangan');
            $table->string('file')->nullable()->comment('File pendukung transaksi, seperti bukti transfer atau kwitansi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
