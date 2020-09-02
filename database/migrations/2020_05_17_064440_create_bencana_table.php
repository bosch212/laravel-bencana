<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBencanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bencana', function (Blueprint $table) {
            $table->string('id_bencana')->primary();
            $table->string('id_jenis_bencana');
            $table->date('tanggal');
            $table->string('foto_bencana');
            $table->time('waktu');
            $table->string('wilayah');
            $table->string('koordinat');
            $table->string('penyebab');
            $table->string('kronologi');

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
        Schema::dropIfExists('bencana');
    }
}
