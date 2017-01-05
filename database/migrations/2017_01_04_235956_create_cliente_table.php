<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('smclientes', function (Blueprint $table) {
           $table->increments('id');
           $table->string('nome');
           $table->string('ultimonome');
           $table->string('email');
           $table->string('celular');
           $table->string('id_facebook');
           $table->date('datanascimento');
           $table->longText('token');
           $table->longText('foto');
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
        //
    }
}
