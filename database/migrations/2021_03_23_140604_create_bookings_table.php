<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotels_id');
            $table->unsignedBigInteger('rooms_id');
            $table->string('nroom');
            $table->string('adate');
            $table->string('ldate');
            $table->string('name');
            $table->string('card');
            $table->string('expdate');
            $table->string('phone');
            $table->timestamps();

            $table->foreign('hotels_id')->references('id')->on('hotels'); 
            $table->foreign('rooms_id')->references('id')->on('rooms'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
