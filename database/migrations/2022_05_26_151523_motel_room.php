<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MotelRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motel_room', function (Blueprint $table) {
            $table->id();
            $table->integer('room_number');
            $table->float('area');
            $table->float('price');
            $table->string('descreption');
            $table->string('status');
            $table->bigInteger('idMotels')->unsigned();
            $table->timestamps();

            $table->foreign('idMotels')
                ->references('id')->on('motels')
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
        Schema::dropIfExists('motel_room');
    }
}
