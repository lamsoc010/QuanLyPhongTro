<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReplyCommentsMotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_comment_motels', function (Blueprint $table) {
            $table->id();
            $table->string('contents');
            $table->bigInteger('idCommentMotels')->unsigned();
            $table->bigInteger('idUser')->unsigned();

            $table->foreign('idCommentMotels')
                ->references('id')->on('comment_motels')
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
        Schema::dropIfExists('reply_comment_motels');
    }
}
