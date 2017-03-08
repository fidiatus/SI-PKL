<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table){
            $table->increments('id');
            $table->integer('mahasiswa_id');
            $table->integer('nilai1');
            $table->integer('nilai2');
            $table->integer('nilai3');
            $table->integer('nilai4');
            $table->integer('nilai5');
            $table->integer('nilai6');
            $table->integer('nilai7');
            $table->integer('nilai8');
            $table->integer('nilai9');
            $table->integer('nilai10');
            $table->integer('nilai11');
            $table->integer('nilai12');
            $table->integer('nilai13');
            $table->integer('nilai14');
            $table->double('hasil');
            $table->double('nilai_pembimbing');
            $table->double('nilai_penguji');
            $table->float('jumlah');
            $table->float('total');
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
        Schema::drop('nilai');
    }
}
