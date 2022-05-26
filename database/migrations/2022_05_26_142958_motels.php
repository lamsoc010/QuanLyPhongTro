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
            $table->integer('room_quantity');
            $table->string('descreption');
            $table->string('status');
            $table->integer('idUser');
            $table->timestamps();

            // $table->primary('idUser');

            // if(Schema::hasTable('users')){
            //     $table->integer('idUser')->unsigned();
            //     $table->foreign('idUser')->references('id')->on('users');
            // }
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
