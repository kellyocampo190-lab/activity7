<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('courses', function (Blueprint $table) {
    $table->id();
    $table->string('course_key', 20)->unique();
    $table->string('title', 150);
    $table->string('cover', 255);
    $table->text('content');
    $table->unsignedBigInteger('robotics_kit_id');
    $table->timestamps();

    $table->foreign('robotics_kit_id')
        ->references('id')
        ->on('robotics_kits')
        ->onDelete('restrict');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
