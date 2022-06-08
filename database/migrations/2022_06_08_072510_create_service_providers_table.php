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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table -> string('FirstName')->nullable();
            $table -> string('LastName')->nullable();
            $table -> string('TazkiraID')->nullable();
            $table -> integer('QCC')->nullable();
            $table -> string('Profile')->nullable();
            $table -> string('DOB')->nullable();
            $table -> string('Gender')->nullable();
            $table -> string('Province')->nullable();
            $table -> string('District')->nullable();
            $table -> string('CurrentJob')->nullable();
            $table -> string('Language')->nullable();
            $table -> string('Profession')->nullable();
            $table -> string('EducationLevel')->nullable();



            // $table -> string('FutureJob')->nullable();


            $table -> integer('PrimaryNumber')->nullable();
            $table -> integer('SecondaryNumber')->nullable();
            $table -> string('Email')->nullable();



            // $table -> integer('RelativeNumber')->nullable();
            // $table -> string('Country')->nullable();
            $table -> string('ProvinceService')->nullable();
            $table -> string('DistrictService')->nullable();
            $table -> string('ServiceType')->nullable();

            // $table -> string('Village')->nullable();
            // $table -> string('Tribe')->nullable();


            // $table -> string('RelativeRelationship')->nullable();
            // $table -> string('RelativeName')->nullable();
            // $table -> string('FatherName')->nullable();
            // $table -> string('SpuoseName')->nullable();
            // $table -> integer('EldestSonAge')->nullable();
            // $table -> integer('MonthlyFamilyIncome')->nullable();
            // $table -> integer('MonthlyFamilyExpenses')->nullable();
            // $table -> integer('NumberFamilyMembers')->nullable();
            // $table -> string('IncomeStreem')->nullable();
            // $table -> string('LevelPoverty')->nullable();
            // $table -> string('FamilyStatus')->nullable();
            // $table -> string('Tazkira')->nullable();
            $table -> string('Status')->nullable();
            $table -> string('Status_By')->nullable();
            $table -> string('Created_By')->nullable();
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
        Schema::dropIfExists('service_providers');
    }
};