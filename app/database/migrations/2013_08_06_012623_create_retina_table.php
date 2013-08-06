<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetinaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Retina', function(Blueprint $table) {
            $table->increments('IdRetina');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->text('VasosD')->nullable();
			$table->text('RetinaPerifericaD')->nullable();
			$table->text('VasosI')->nullable();
			$table->text('RetinaPerifericaI')->nullable();
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
        Schema::drop('Retina');
    }

}
