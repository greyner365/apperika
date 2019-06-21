<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->string('slug')->unique();
            $table->text('link')->nullable();
            $table->text('homework');
            $table->string('file')->nullable();            
            $table->integer('id_lessons')->unsigned();
            $table->foreign('id_lessons')->references('id')->on('lessons')->onDelete('cascade');
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
        Schema::dropIfExists('topics');
    }
}
