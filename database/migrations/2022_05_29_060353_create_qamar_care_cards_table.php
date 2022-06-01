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
        Schema::create('qamar_care_cards', function (Blueprint $table) {
            $table->id();
            $table -> string('FirstName');
            $table -> string('LastName');
            $table -> string('Email');
            $table -> string('Province');
            $table -> string('District');
            $table -> integer('PNumber');
            $table -> integer('SNumber');
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
        Schema::dropIfExists('qamar_care_cards');
    }
};
