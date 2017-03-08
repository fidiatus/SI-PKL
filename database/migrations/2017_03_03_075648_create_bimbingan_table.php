<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimbinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('bimbingan', function (Blueprint $table){
            $table->increments('id');
            $table->integer('dosen_id');
            $table->integer('mahasiswa_id');
            $table->datetime('jadwal_bimbingan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bimbingan');
    }
}
