<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveOrbitasFromGonioscopiaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Gonioscopia', function(Blueprint $table) {
            $table->dropColumn('OrbitaD');
			$table->dropColumn('OrbitaI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Gonioscopia', function(Blueprint $table) {
            $table->text('OrbitaD')->nulleble();
			$table->text('OrbitaI')->nulleable();
        });
    }

}
