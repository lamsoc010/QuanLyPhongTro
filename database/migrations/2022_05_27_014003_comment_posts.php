<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_posts', function (Blueprint $table) {
            $table->id();
            $table->string('contents');
            $table->bigInteger('idPosts')->unsigned();
            $table->bigInteger('idUser')->unsigned();

            $table->foreign('idPosts')
                ->references('id')->on('posts')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('idUser')
                ->references('id')->on('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_posts');
    }
}
