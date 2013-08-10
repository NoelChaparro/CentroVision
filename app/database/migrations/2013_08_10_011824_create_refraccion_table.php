<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefraccionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Refraccion', function(Blueprint $table) {
            $table->increments('IdRefraccion');
            $table->unsignedinteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('ExoftalmometriaOD', 30)->nullable();
			$table->string('ExoftalmometriaOI', 30)->nullable();
			$table->string('ExoftalmometriaBase', 30)->nullable();
			$table->string('PaquimetriaOD', 30)->nullable();
			$table->string('PaquimetriaOI', 30)->nullable();
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
			$table->string('EsquiascopiaSphOD', 20)->nullable();
			$table->string('EsquiascopiaCylOD', 20)->nullable();
			$table->string('EsquiascopiaEjeOD', 20)->nullable();
			$table->string('EsquiascopiaAddOD', 20)->nullable();
			$table->string('EsquiascopiaBifocalOD', 20)->nullable();
			$table->string('EsquiascopiaAVOD', 20)->nullable();
			$table->string('EsquiascopiaSphOI', 20)->nullable();
			$table->string('EsquiascopiaCylOI', 20)->nullable();
			$table->string('EsquiascopiaEjeOI', 20)->nullable();
			$table->string('EsquiascopiaAddOI', 20)->nullable();
			$table->string('EsquiascopiaBifocalOI', 20)->nullable();
			$table->string('EsquiascopiaAVOI', 20)->nullable();
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
        Schema::drop('Refraccion');
    }

}
