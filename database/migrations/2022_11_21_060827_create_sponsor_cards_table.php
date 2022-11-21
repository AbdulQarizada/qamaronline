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
        Schema::create('sponsor_cards', function (Blueprint $table) {
            $table->id();
            $table -> string('FullName')->nullable();
            $table -> string('Email')->nullable();
            $table -> string('CardNumber')->nullable();
            $table -> integer('CardLastFourDigit')->nullable();
            $table -> string('ExpMonth')->nullable();
            $table -> string('ExpYear')->nullable();
            $table -> string('CVV')->nullable();
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
        Schema::dropIfExists('sponsor_cards');
    }
};
