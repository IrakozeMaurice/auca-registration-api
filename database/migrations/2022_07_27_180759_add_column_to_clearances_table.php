<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToClearancesTable extends Migration
{
    public function up()
    {
        Schema::table('clearances', function (Blueprint $table) {
            $table->boolean('cleared');
        });
    }

    public function down()
    {
        Schema::table('clearances', function (Blueprint $table) {
            $table->dropColumn('cleared');
        });
    }
}
