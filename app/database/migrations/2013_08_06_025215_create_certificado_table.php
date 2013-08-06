<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCertificadoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Certificado', function(Blueprint $table) {
            $table->increments('IdCertificado');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->text('AnexosOculares')->nullable();
			$table->text('SegmentoAnterior')->nullable();
			$table->text('FondoOjo')->nullable();
			$table->text('PercepcionCromatica')->nullable();
			$table->text('Diagnostico')->nullable();
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
        Schema::drop('Certificado');
    }

}
