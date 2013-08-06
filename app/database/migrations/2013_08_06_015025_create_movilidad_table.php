<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovilidadTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movilidad', function(Blueprint $table) {
            $table->increments('IdMovilidad');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('M1D', 20)->nullable();
			$table->string('M2D', 20)->nullable();
			$table->string('M3D', 20)->nullable();
			$table->string('M4D', 20)->nullable();
			$table->string('M5D', 20)->nullable();
			$table->string('M6D', 20)->nullable();
			$table->string('M1C', 20)->nullable();
			$table->string('M2C', 20)->nullable();
			$table->string('M3C', 20)->nullable();
			$table->string('M1I', 20)->nullable();
			$table->string('M2I', 20)->nullable();
			$table->string('M3I', 20)->nullable();
			$table->string('M4I', 20)->nullable();
			$table->string('M5I', 20)->nullable();
			$table->string('M6I', 20)->nullable();
			$table->string('PPM', 50)->nullable();
			$table->string('PMonocular', 50)->nullable();
			$table->string('PAlterno', 50)->nullable();
			$table->string('Ducciones', 50)->nullable();
			$table->string('Versiones', 50)->nullable();
			$table->string('OjoFijador', 50)->nullable();
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
        Schema::drop('Movilidad');
    }

}
