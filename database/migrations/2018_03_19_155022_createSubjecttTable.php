<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjecttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('teacher_fio');
            $table->integer('rating')->nullable()->unsigned();
            $table->integer('student_id')->unsigned();
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('users');
//            after('column')->comment('comment')->default($value)->first()->nullable();->unsigned()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
