<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCCIPCBiomicroscopiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Biomicroscopia', function(Blueprint $table) {
            $table->text('CCIPCD')->nullable();
			$table->text('CCIPCI')->nullable();
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
            $table->dropColumn('CCIPCD');
			$table->dropColumn('CCIPCI');
        });
    }

}
