<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('min_grade');
            $table->text('pre_skills')->nullable();
            $table->text('pre_courses');
            $table->integer('course_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reqs');
    }
}
