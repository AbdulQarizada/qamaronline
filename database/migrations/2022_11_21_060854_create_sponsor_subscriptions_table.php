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
        Schema::create('sponsor_subscriptions', function (Blueprint $table) {
            $table->id();
            $table -> integer('Orphan_ID')->nullable();
            $table -> integer('Sponsor_ID')->nullable();
            $table -> string('Amount')->nullable();
            $table -> string('Type')->nullable();
            $table -> integer('Card_ID')->nullable();
            $table -> date('StartDate')->nullable();
            $table -> date('EndDate')->nullable();
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
        Schema::dropIfExists('sponsor_subscriptions');
    }
};
