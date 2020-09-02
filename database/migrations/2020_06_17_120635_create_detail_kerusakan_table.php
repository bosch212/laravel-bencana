<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKerusakanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kerusakan', function (Blueprint $table) {
            $table->string('id_detail_kerusakan')->primary();
            $table->string('id_kerusakan');
            $table->string('nama');
            $table->string('jenis_kerusakan_rumah');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('id_kerusakan')
                ->references('id_kerusakan')
                ->on('kerusakan')
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
        Schema::dropIfExists('detail_kerusakan');
    }
}
