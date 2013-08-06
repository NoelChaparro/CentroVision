<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGonioscopiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gonioscopia', function(Blueprint $table) {
            $table->increments('IdGonioscopia');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->string('G1D', 20)->nullable();
			$table->string('G2D', 20)->nullable();
			$table->string('G3D', 20)->nullable();
			$table->string('G4D', 20)->nullable();
			$table->text('OrbitaD')->nullable();
			$table->string('G1I', 20)->nullable();
			$table->string('G2I', 20)->nullable();
			$table->string('G3I', 20)->nullable();
			$table->string('G4I', 20)->nullable();
			$table->text('OrbitaI')->nullable();
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
        Schema::drop('Gonioscopia');
    }

}
