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
        Schema::create('orphan_payments', function (Blueprint $table) {
            $table->id();
            // $table -> integer('OrphanID')->nullable();
            $table -> string('PaymentOption')->nullable();
            $table -> string('PaymentAmount')->nullable();
            $table -> string('FullName')->nullable();
            $table -> string('Email')->nullable();
            $table -> string('CardNumber')->nullable();
            $table -> string('Password')->nullable();
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
        Schema::dropIfExists('orphan_payments');
    }
};
