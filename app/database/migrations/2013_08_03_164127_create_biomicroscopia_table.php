<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiomicroscopiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Biomicroscopia', function(Blueprint $table) {
            $table->increments('IdBiomicroscopia');
            $table->unsignedInteger('Paciente_id');
            $table->foreign('Paciente_id')->references('IdPaciente')->on('DatosPacientes');
			$table->text('ConjuntivaD')->nullable();
			$table->text('CorneaD')->nullable();
			$table->string('BUTD', 30)->nullable();
			$table->text('ConjuntivaI')->nullable();
			$table->text('CorneaI')->nullable();
			$table->string('BUTI', 30)->nullable();
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
        Schema::drop('Biomicroscopia');
    }

}
