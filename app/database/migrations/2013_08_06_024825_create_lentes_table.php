<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLentesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lentes', function(Blueprint $table) {
            $table->increments('IdLentes');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('SphOD', 20)->nullable();
			$table->string('CylOD', 20)->nullable();
			$table->string('EjeOD', 20)->nullable();
			$table->string('DIOD', 20)->nullable();
			$table->string('PrismaOD', 20)->nullable();
			$table->string('BaseOD', 20)->nullable();
			$table->string('SphOI', 20)->nullable();
			$table->string('CylOI', 20)->nullable();
			$table->string('EjeOI', 20)->nullable();
			$table->string('DIOI', 20)->nullable();
			$table->string('PrismaOI', 20)->nullable();
			$table->string('BaseOI', 20)->nullable();
			$table->string('Add', 30)->nullable();
			$table->string('AO', 30)->nullable();
			$table->string('Color', 30)->nullable();
			$table->string('Bifocal', 30)->nullable();
			$table->boolean('Cristal')->nullable();
			$table->boolean('CR39')->nullable();
			$table->string('Observaciones', 100)->nullable();
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
        Schema::drop('Lentes');
    }

}
