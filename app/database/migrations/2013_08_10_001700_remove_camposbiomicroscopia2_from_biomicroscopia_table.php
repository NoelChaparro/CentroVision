<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveCamposBiomicroscopia2FromBiomicroscopiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Biomicroscopia', function(Blueprint $table) {
            $table->dropColumn('ConjuntivaD');
			$table->dropColumn('ConjuntivaI');
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
            $table->text('ConjuntivaD')->nullable();
			$table->text('ConjuntivaI')->nullable();
        });
    }

}
