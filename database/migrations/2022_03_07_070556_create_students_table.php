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
            $table->integer('student_id')->unsigned()->unique();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('faculty_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
            $table->string('names');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('address');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
