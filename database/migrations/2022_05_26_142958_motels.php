<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Motels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('area');
            $table->double('min_price');
            $table->double('max_price');
            $table->integer('room_quantity');
            $table->integer('views');
            $table->text('descreption');
            $table->string('status');
            $table->string('image');
            $table->string('person');
            $table->bigInteger('idUser')->unsigned();
            $table->timestamps();
            
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
        Schema::dropIfExists('motels');
    }
}
