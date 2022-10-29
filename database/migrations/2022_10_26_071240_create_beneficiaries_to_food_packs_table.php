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
        Schema::create('beneficiaries_to_food_packs', function (Blueprint $table) {
            $table->id();
            $table -> integer('FoodPack_ID')->nullable();
            $table -> integer('Beneficiary_ID')->nullable();
            $table -> string('Created_By')->nullable();
            $table -> string('Owner')->nullable();
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
        Schema::dropIfExists('beneficiaries_to_food_packs');
    }
};
