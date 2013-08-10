<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCampoToDatosPacientesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DatosPacientes', function(Blueprint $table) {
            $table->string('Campo', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DatosPacientes', function(Blueprint $table) {
            $table->dropColumn('Campo');
        });
    }

}
