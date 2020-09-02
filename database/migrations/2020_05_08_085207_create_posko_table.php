<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoskoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posko', function (Blueprint $table) {
            $table->string('id_posko')->primary();
            $table->string('id_jenis_bencana');
            $table->date('tanggal');
            $table->string('nama_posko');
            $table->string('wilayah');
            $table->string('foto_posko');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_jenis_bencana')->references('id_jenis_bencana')->on('jenis_bencana')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posko');
    }
}
