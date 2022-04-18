<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInovasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inovasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul_inovasi');
            $table->longText('latar_belakang');
            $table->longText('deskripsi_inovasi');
            $table->longText('tujuan');
            $table->string('lampiran');
            $table->timestamps(); //->created_At sama updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inovasi');
    }
}
