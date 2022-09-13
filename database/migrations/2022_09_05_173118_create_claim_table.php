<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->bigInteger('client');
            $table->string('agent')->nullable();
            $table->string('callStatus')->nullable();
            $table->dateTime('inQueue')->nullable();
            $table->dateTime('withAgent')->nullable();
            $table->string('hinQueue')->nullable();
            $table->string('hwithAgent')->nullable();
            $table->string('addCo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claim');
    }
};
