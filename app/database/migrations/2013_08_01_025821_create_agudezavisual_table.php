<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgudezaVisualTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('AgudezaVisual', function(Blueprint $table) {
            $table->increments('IdAgudezaVisual');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('AVSCOD', 30)->nullable();
			$table->string('CCD', 30)->nullable();
			$table->string('PuntoD', 30)->nullable();
			$table->string('AVSCOI', 30)->nullable();
			$table->string('CCI', 30)->nullable();
			$table->string('PuntoI', 30)->nullable();
			$table->string('TonometriaD5', 20)->nullable();
			$table->string('TonometriaD10', 20)->nullable();
			$table->string('TonometriaI5', 20)->nullable();
			$table->string('TonometriaI10', 20)->nullable();
			$table->text('ParpadoD')->nullable();
			$table->text('ParpadoI')->nullable();
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
        Schema::drop('AgudezaVisual');
    }

}
