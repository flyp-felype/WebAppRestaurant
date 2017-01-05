<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('smreserva', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('smclienteid')->unsigned();
           $table->date('data');
           $table->time('horas');
           $table->string('qtdpessoa');
           $table->string('qtdmesa');
           $table->timestamps();

           $table->foreign('smclienteid')->references('id')->on('smclientes');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
