<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveCamposBiomicroscopiaFromBiomicroscopiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Biomicroscopia', function(Blueprint $table) {
            $table->dropColumn('CorneaD');
			$table->dropColumn('CorneaI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Biomicroscopia', function(Blueprint $table) {
            $table->text('CorneaD')->nullable();
			$table->text('CorneaI')->nullable();
        });
    }

}
