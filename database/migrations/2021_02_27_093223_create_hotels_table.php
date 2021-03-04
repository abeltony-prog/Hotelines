<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('hotels', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('users_id');
                $table->string('name');
                $table->string('province');
                $table->string('district');
                $table->string('email');
                $table->integer('telphone');
                $table->string('file');
                $table->timestamps();
                $table->foreign('users_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
