<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('titre',128);
            $table->text('content');
            $table->bigInteger('categorie')->unsigned();
            $table->bigInteger('tag1')->unsigned()->nullable();
            $table->bigInteger('tag2')->unsigned()->nullable();
            $table->bigInteger('tag3')->unsigned()->nullable();
            $table->bigInteger('tag4')->unsigned()->nullable();
            $table->bigInteger('tag5')->unsigned()->nullable();
            $table->foreign('categorie')->on('categories')->references('id');
            $table->foreign('tag1')->on('tags')->references('id');
            $table->foreign('tag2')->on('tags')->references('id');
            $table->foreign('tag3')->on('tags')->references('id');
            $table->foreign('tag4')->on('tags')->references('id');
            $table->foreign('tag5')->on('tags')->references('id');
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
        Schema::dropIfExists('articles');
    }
}
