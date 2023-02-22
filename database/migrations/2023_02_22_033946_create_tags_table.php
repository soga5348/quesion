<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagssTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->integer('todo_id');
            $table->string('tag_name');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */public function down()
    {
        Schema::dropIfExists('books');
    }
}