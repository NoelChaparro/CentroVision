<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBajaVisionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BajaVision', function(Blueprint $table) {
            $table->increments('IdBajaVision');
            $table->unsignedinteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('RequiereAlgunEstudio', 50)->nullable();
			$table->string('RequiereTomarMedicamento', 50)->nullable();
			$table->text('ImpresionDiagnostica')->nullable();
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
        Schema::drop('BajaVision');
    }

}
