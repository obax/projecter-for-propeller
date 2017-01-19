<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_name', 200);
            $table->string('category', 200);
            $table->dateTime('due_date');
            $table->boolean('is_completed');
            //$table->foreign('assigned_to')->references('id')->on('users');
            $table->timestamps(); //must be on change
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     //   Schema::drop('tasks');
     Schema::dropIfExists('users');
    }
}
