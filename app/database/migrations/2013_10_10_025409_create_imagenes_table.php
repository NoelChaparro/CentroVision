<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagenesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imagenes', function(Blueprint $table) {
            $table->increments('IdImagen');
            $table->unsignedinteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('NombreImagen', 40)->nullable();
			$table->string('Formato', 10)->nullable();
			$table->integer('Tipo')->nullable();
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
        Schema::drop('Imagenes');
    }

}
