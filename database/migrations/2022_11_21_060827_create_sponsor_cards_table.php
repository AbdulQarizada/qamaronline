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
            $table -> integer('Sponsor_ID')->nullable();
            $table -> string('StripeCustomer_ID')->nullable();
            $table -> integer('CardLastFourDigit')->nullable();
            $table -> integer('IsActive')->nullable();
            $table -> integer('IsActive_By')->nullable();
            $table -> integer('Created_By')->nullable();
            $table -> integer('Owner')->nullable();
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
