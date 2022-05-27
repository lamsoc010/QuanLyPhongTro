<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReplyCommentsPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_comment_posts', function (Blueprint $table) {
            $table->id();
            $table->string('contents');
            $table->bigInteger('idCommentPosts')->unsigned();
            $table->bigInteger('idUser')->unsigned();

            $table->foreign('idCommentPosts')
                ->references('id')->on('comment_posts')
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
        Schema::dropIfExists('reply_comment_posts');

    }
}
