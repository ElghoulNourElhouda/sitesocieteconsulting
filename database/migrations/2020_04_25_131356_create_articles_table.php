<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->string('picture');
            $table->integer('liking')->default('1');
            $table->integer('commenting')->default('1');

            $table->timestamps();
            $table->timestamp('published_at')->useCurrent();
            
            $table->foreign('users_id')
                  ->references('users_id')
                  ->on('users')
                  ->onDelete('cascade');
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

     public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function like()
    {
        return $this->hasMany('Like');
    }
}
