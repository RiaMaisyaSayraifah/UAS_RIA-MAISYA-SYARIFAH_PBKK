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
        Schema::create('kwitansi', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_kwitansi');
            $table->unsignedBigInteger('sewa_id');
            $table->date('tanggal_kwitansi');
            $table->decimal('jumlah', 10, 2);
            $table->timestamps();

            $table->foreign('sewa_id')->references('id')->on('sewa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kwitansi');
    }
};
