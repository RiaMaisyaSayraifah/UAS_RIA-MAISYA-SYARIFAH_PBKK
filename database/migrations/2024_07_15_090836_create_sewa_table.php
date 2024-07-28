<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyewa_id');
            $table->unsignedBigInteger('kendaraan_id');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali')->nullable();
            $table->timestamps();

            $table->foreign('penyewa_id')->references('id')->on('penyewa')->onDelete('cascade');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewa');
    }
};