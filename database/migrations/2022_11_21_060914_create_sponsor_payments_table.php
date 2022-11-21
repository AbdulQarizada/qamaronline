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
        Schema::create('sponsor_payments', function (Blueprint $table) {
            $table->id();
            $table -> string('SubscriptionType')->nullable();
            $table -> string('Amount')->nullable();
            $table -> string('FullName')->nullable();
            $table -> string('Email')->nullable();
            $table -> string('Card_ID')->nullable();
            $table -> string('ChargeID')->nullable();
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
        Schema::dropIfExists('sponsor_payments');
    }
};
