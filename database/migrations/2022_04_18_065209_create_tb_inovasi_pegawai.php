<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbInovasiPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inovasi_pegawai', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inovasi');

            $table->timestamps();

            $table->foreign('id_inovasi')->references('id')->on('tb_inovasi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_inovasi_pegawai');
    }
}
