<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal',function(Blueprint $table){
            $table->increments('id');
            $table->integer('dosen_id');
            $table->date('jadwal_mulai');
            $table->date('jadwal_selesai');
            $table->date('jadwal_bimbingan');
            $table->datetime('jadwal_waktu_sidang');
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
        Schema::drop('jadwal');
    }
}
