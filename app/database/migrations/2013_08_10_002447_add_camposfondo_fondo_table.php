<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCamposFondoFondoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Fondo', function(Blueprint $table) {
            $table->text('PMVRD')->nullable();
			$table->text('PMVRI')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Fondo', function(Blueprint $table) {
            $table->dropColumn('PMVRD');
			$table->dropColumn('PMVRI');
        });
    }

}
