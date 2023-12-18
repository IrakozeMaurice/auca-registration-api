<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('faculty_id');

            $table->integer('student_id')->unsigned()->unique();
            $table->string('names');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->boolean('farg')->default(0);

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
