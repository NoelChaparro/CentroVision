<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveCamposFondoFromFondoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Fondo', function(Blueprint $table) {
            $table->dropColumn('PapilaD');
			$table->dropColumn('MaculaD');
			$table->dropColumn('PapilaI');
			$table->dropColumn('MaculaI');
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
            $table->text('PapilaD')->nullable();
			$table->text('MaculaD')->nullable();
			$table->text('PapilaI')->nullable();
			$table->text('MaculaI')->nullable();
        });
    }

}
