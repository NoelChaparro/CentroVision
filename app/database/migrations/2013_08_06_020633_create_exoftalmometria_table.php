<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExoftalmometriaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Exoftalmometria', function(Blueprint $table) {
            $table->increments('IdExoftalmometria');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('ExoftalmometriaOD', 30)->nullable();
			$table->string('ExoftalmometriaOI', 30)->nullable();
			$table->string('ExoftalmometriaBase', 30)->nullable();
			$table->string('RefraccionSphOD', 20)->nullable();
			$table->string('RefraccionCylOD', 20)->nullable();
			$table->string('RefraccionEjeOD', 20)->nullable();
			$table->string('RefraccionAddOD', 20)->nullable();
			$table->string('RefraccionBifocalOD', 20)->nullable();
			$table->string('RefraccionAVOD', 20)->nullable();
			$table->string('RefraccionSphOI', 20)->nullable();
			$table->string('RefraccionCylOI', 20)->nullable();
			$table->string('RefraccionEjeOI', 20)->nullable();
			$table->string('RefraccionAddOI', 20)->nullable();
			$table->string('RefraccionBifocalOI', 20)->nullable();
			$table->string('RefraccionAVOI', 20)->nullable();
			$table->string('PrescripcionSphOD', 20)->nullable();
			$table->string('PrescripcionCylOD', 20)->nullable();
			$table->string('PrescripcionEjeOD', 20)->nullable();
			$table->string('PrescripcionAddOD', 20)->nullable();
			$table->string('PrescripcionBifocalOD', 20)->nullable();
			$table->string('PrescripcionAVOD', 20)->nullable();
			$table->string('PrescripcionSphOI', 20)->nullable();
			$table->string('PrescripcionCylOI', 20)->nullable();
			$table->string('PrescripcionEjeOI', 20)->nullable();
			$table->string('PrescripcionAddOI', 20)->nullable();
			$table->string('PrescripcionBifocalOI', 20)->nullable();
			$table->string('PrescripcionAVOI', 20)->nullable();
			$table->string('QueratometriaOD', 30)->nullable();
			$table->string('QueratometriaOI', 30)->nullable();
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
        Schema::drop('Exoftalmometria');
    }

}
