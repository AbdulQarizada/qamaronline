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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('DOB')->nullable();
            $table->integer('Gender_ID')->nullable();
            $table->string('Email')->nullable();
            $table->string('PrimaryNumber')->nullable();
            $table->string('SecondaryNumber')->nullable();
            $table->longText('Address')->nullable();
            $table->string('Country')->nullable();
            $table->string('City')->nullable();
            $table->string('InterestedDepartment_ID')->nullable();
            $table->string('Reason')->nullable();
            $table->string('Resume')->nullable();
            $table->string('Owner')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
};
