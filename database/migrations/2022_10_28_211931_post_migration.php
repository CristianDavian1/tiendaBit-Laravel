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
        Schema::create('post', function(Blueprint $table){

            
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('titulo', 35);
            $table->string('categoria');
            $table->string('etiquetas');
            $table->string('detalles');
            $table->string('file');
            $table->tinyInteger('like')->default(0);
            $table->ipAddress('comentarios')->default('sin comentario');
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
};
