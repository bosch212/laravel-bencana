<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditKolomTableBencana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bencana', function (Blueprint $table) {
            $table->string('lat');
            $table->string('lng');
            $table->string('nama_pelapor');
            $table->string('no_hp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bencana',function(Blueprint $table){
            $table->dropColumn('lat');
            $table->dropColumn('lng');
            $table->dropColumn('nama_pelapor');
            $table->dropColumn('no_hp');
        });
        //
    }
}
