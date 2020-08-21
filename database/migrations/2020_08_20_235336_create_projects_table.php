<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('customer');
            $table->string('year_create');
            $table->string('mass');
            $table->string('image');
            $table->string('categories');
            $table->timestamp('date_update')->nullable();
            $table->Integer('user_create');
            $table->Integer('user_update')->nullable();
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')
                    ->references('id')
                    ->on('posts');
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
        Schema::dropIfExists('projects');
    }
}
