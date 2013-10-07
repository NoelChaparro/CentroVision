<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLentesContactoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LentesContacto', function(Blueprint $table) {
            $table->increments('IdLentesContacto');
            $table->unsignedinteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('QueratometriaHorizontalOD', 30)->nullable();
			$table->string('QueratometriaHorizontalEjeOD', 10)->nullable();
			$table->string('QueratometriaVerticalOD', 30)->nullable();
			$table->string('QueratometriaVerticalEjeOD', 10)->nullable();
			$table->string('QueratometriaHorizontalOI', 30)->nullable();
			$table->string('QueratometriaHorizontalEjeOI', 10)->nullable();
			$table->string('QueratometriaVerticalOI', 30)->nullable();
			$table->string('QueratometriaVerticalEjeOI', 10)->nullable();
			$table->string('RefraccionSphOD', 10)->nullable();
			$table->string('RefraccionCylOD', 10)->nullable();
			$table->string('RefraccionEjeOD', 10)->nullable();
			$table->string('RefraccionSphOI', 10)->nullable();
			$table->string('RefraccionCylOI', 10)->nullable();
			$table->string('RefraccionEjeOI', 10)->nullable();
			$table->string('Material', 50)->nullable();
			$table->string('Marca', 20)->nullable();
			$table->string('Tipo', 30)->nullable();
			$table->string('Color', 30)->nullable();
			$table->string('CurvaBaseOD', 10)->nullable();
			$table->string('DiametroOD', 10)->nullable();
			$table->string('CPPOD', 10)->nullable();
			$table->string('PoderOD', 20)->nullable();
			$table->string('SROD', 20)->nullable();
			$table->string('RxFinalOD', 20)->nullable();
			$table->string('CurvaBaseOI', 10)->nullable();
			$table->string('DiametroOI', 10)->nullable();
			$table->string('CPPOI', 10)->nullable();
			$table->string('PoderOI', 20)->nullable();
			$table->string('SROI', 20)->nullable();
			$table->string('RxFinalOI', 20)->nullable();
			$table->text('Observaciones')->nullable();
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
        Schema::drop('LentesContacto');
    }

}
