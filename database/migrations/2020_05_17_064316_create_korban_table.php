<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korban', function (Blueprint $table) {
            $table->string('id_korban')->primary();
            $table->string('id_jenis_bencana');
            $table->string('wilayah');
            $table->integer('meninggal');
            $table->integer('luka_luka');
            $table->integer('kehilangan');
            $table->integer('terdampak');
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
        Schema::dropIfExists('korban');
    }
}
