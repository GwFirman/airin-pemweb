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
        Schema::create('meteran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan')->index();
            $table->unsignedBigInteger('id_layanan')->index();
            $table->text('lokasi_pemasangan');
            $table->date('tanggal_pemasangan');
            $table->boolean('status');
            $table->string('chip_kartu');
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->foreign('id_layanan')->references('id')->on('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('meteran');
    }
};
