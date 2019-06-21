<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('califications', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['aprobado','en revision']);
            $table->text('observacion')->nullable();
            $table->integer('id_homeworks')->unsigned();
            $table->foreign('id_homeworks')->references('id')->on('homeworks')->onDelete('cascade');
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
        Schema::dropIfExists('califications');
    }
}
