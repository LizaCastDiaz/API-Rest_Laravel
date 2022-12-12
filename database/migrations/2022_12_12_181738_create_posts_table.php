<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // CREO LAS TABLAS PARA LA BASE DE DATOS Y LOS SEEDERS
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('slug')->unique;
            $table->text('content');

            $table->timestamps();

            // CONECTO LA TABLA CON LA TABLA USUARIOS.
            // metodo+metodo de referencia (user_id)+
            // campo con la que quiero trabajar esta tabla(id)+
            // tabla con la que se quiere trabajar(users)

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
