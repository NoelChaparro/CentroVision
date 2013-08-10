<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddMmhgToAgudezaVisualTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('AgudezaVisual', function(Blueprint $table) {
            $table->string('MmhgD', 20)->nullable();
			$table->string('MmhgI', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AgudezaVisual', function(Blueprint $table) {
            $table->dropColumn('MmhgD');
			$table->dropColumn('MmhgI');
        });
    }

}
