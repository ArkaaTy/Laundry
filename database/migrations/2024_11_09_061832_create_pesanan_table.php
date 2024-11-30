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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_customer');
            $table->string('image');
            $table->integer('berat');
            $table->date('tanggal_masuk');
            $table->string('harga_total');
            $table->enum('status', ['waiting list', 'diproses', 'selesai', 'diambil', 'dibatalkan']);
            $table->date('tanggal_diambil')->nullable();
            $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
