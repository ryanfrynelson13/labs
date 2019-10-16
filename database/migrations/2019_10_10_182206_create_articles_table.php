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
            $table->boolean('publish')->default(false);
            $table->bigInteger('categorie')->unsigned();            
            $table->bigInteger('user_id')->unsigned();            
            $table->foreign('categorie')->on('categories')->references('id');           
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');           
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
