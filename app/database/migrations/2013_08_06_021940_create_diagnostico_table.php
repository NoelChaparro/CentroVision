<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosticoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diagnostico', function(Blueprint $table) {
            $table->increments('IdDiagnostico');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->boolean('AstigmatismoD')->nullable();
			$table->boolean('GlaucomaD')->nullable();
			$table->boolean('CataratasD')->nullable();
			$table->boolean('ConjuntivitisD')->nullable();
			$table->boolean('QueratitisD')->nullable();
			$table->boolean('EstrabismoD')->nullable();
			$table->boolean('AstigmatismoI')->nullable();
			$table->boolean('GlaucomaI')->nullable();
			$table->boolean('CataratasI')->nullable();
			$table->boolean('ConjuntivitisI')->nullable();
			$table->boolean('QueratitisI')->nullable();
			$table->boolean('EstrabismoI')->nullable();
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
        Schema::drop('Diagnostico');
    }

}
