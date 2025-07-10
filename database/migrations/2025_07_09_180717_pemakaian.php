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
        Schema::create('pemakaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_meteran')->index();
            $table->unsignedBigInteger('id_layanan')->index();
            $table->string('deskripsi');
            $table->char('tahun', 4);
            $table->integer('awal');
            $table->integer('akhir');
            $table->integer('pakai');
            $table->boolean('status_pembayaran');
            $table->timestamps();

            $table->foreign('id_meteran')->references('id')->on('meteran');
            $table->foreign('id_layanan')->references('id')->on('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pemakaian');
    }
};
