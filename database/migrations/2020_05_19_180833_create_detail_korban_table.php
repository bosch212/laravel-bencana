<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKorbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_korban', function (Blueprint $table) {
            $table->string('id_detail_korban')->primary();
            $table->string('id_korban');
            $table->string('nama_korban');
            $table->string('jenis_korban');
            $table->string('jenis_kelamin');
            $table->integer('usia');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_korban')
                ->references('id_korban')
                ->on('korban')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_korban');
    }
}
