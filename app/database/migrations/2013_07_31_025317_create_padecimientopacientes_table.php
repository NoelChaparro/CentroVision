<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePadecimientoPacientesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('DatosPacientes', function(Blueprint $table) {
            $table->increments('IdPaciente');
            $table->string('Nombre', 50)->nullable();
            $table->string('Domicilio', 100)->nullable();
            $table->string('Colonia', 50)->nullable();
            $table->string('Ciudad', 50)->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('Sexo', 1)->nullable();
            $table->string('Ocupacion', 30)->nullable();
            $table->string('Telefono', 20)->nullable();
            $table->String('Referencia', 50)->nullable();
            $table->timestamps();
        });

        Schema::create('PadecimientoPacientes', function(Blueprint $table) {
            $table->increments('IdPadecimiento');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
            $table->text('Sintomatologia')->nullable();
			$table->text('Antecedentes')->nullable();
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
        Schema::drop('DatosPacientes');
        Schema::drop('PadecimientoPacientes');
    }

}
