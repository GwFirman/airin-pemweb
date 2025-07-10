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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan')->index();
            $table->unsignedBigInteger('id_meteran')->index();
            $table->integer('tahun');
            $table->bigInteger('nomor_meteran')->index();
            $table->decimal('nominal', 10, 2)->nullable();
            $table->date('waktu_awal');
            $table->date('waktu_akhir');
            $table->boolean('status');

            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->foreign('id_meteran')->references('id')->on('meteran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tagihan');
    }
};
