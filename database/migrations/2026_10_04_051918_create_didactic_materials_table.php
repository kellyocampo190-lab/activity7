<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDidacticMaterialsTable extends Migration
{
    public function up()
    {
        Schema::create('didactic_materials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('material_type')->nullable();
            $table->string('file_path')->nullable();
            $table->unsignedBigInteger('course_id')->unique();
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('didactic_materials');
    }
}
