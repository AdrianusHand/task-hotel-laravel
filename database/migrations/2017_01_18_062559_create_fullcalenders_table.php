<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullcalendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fullcalenders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama_Event');
            $table->date('Tanggal');
            $table->string('Keterangan');   
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
        Schema::drop('fullcalenders');
    }
}
