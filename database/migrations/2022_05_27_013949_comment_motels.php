<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentMotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_motels', function (Blueprint $table) {
            $table->id();
            $table->string('contents');
            $table->bigInteger('idMotels')->unsigned();
            $table->bigInteger('idUser')->unsigned();

            $table->foreign('idMotels')
                ->references('id')->on('motels')
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
        Schema::dropIfExists('comment_motels');
    }
}
