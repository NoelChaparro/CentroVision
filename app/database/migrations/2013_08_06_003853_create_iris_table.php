<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIrisTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Iris', function(Blueprint $table) {
            $table->increments('IdIris');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->text('IrisPupilasD')->nullable();
			$table->text('CristalinoD')->nullable();
			$table->text('IrisPupilasI')->nullable();
			$table->text('CristalinoI')->nullable();
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
        Schema::drop('Iris');
    }

}
