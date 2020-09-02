<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerusakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakan', function (Blueprint $table) {
            $table->string('id_kerusakan')->primary();
            $table->string('id_jenis_bencana');
            $table->string('wilayah');
            $table->string('berat');
            $table->string('sedang');
            $table->string('ringan');
            $table->string('kesehatan');
            $table->string('peribadahan');
            $table->string('pendidikan');
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
        Schema::dropIfExists('kerusakan');
    }
}
