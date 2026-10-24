<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_key')->unique();
            $table->string('title');
            $table->string('cover')->nullable();
            $table->text('content');
            $table->unsignedBigInteger('robotics_kit_id');
            $table->timestamps();

            $table->foreign('robotics_kit_id')
                ->references('id')
                ->on('robotics_kits');
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
