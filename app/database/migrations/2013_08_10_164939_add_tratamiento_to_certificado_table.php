<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTratamientoToCertificadoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Certificado', function(Blueprint $table) {
            $table->text('Tratamiento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Certificado', function(Blueprint $table) {
            $table->dropColumn('Tratamiento');
        });
    }

}
