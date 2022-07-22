<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('general')->unsigned();
            $table->integer('major')->unsigned();
            $table->boolean('dean');
            $table->integer('books')->unsigned();
            $table->boolean('it');
            $table->boolean('student_services');
            $table->boolean('business');
            $table->boolean('secondary');
            $table->boolean('transcript');
            $table->boolean('completion');
            $table->boolean('gown');
            $table->boolean('diploma');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clearances');
    }
}
