<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('status');
            $table->integer('views');
            $table->string('image');
            $table->bigInteger('idCategory')->unsigned();
            $table->bigInteger('idUser')->unsigned();
            $table->timestamps();

            $table->foreign('idCategory')
                ->references('id')->on('category')
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
        Schema::dropIfExists('posts');
    }
}
