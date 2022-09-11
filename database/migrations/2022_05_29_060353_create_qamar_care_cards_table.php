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
            $table->id()->start_from(1000);
            $table -> string('FirstName')->nullable();
            $table -> string('LastName')->nullable();
            $table -> string('FirstNameLocal')->nullable();
            $table -> string('LastNameLocal')->nullable();
            $table -> string('TazkiraID')->nullable();
            $table -> integer('QCC')->nullable();
            $table -> string('Profile')->nullable();
            $table -> string('DOB')->nullable();
            $table -> integer('Gender_ID')->nullable();
            $table -> integer('Language_ID')->nullable();
            $table -> integer('CurrentJob_ID')->nullable();
            $table -> integer('FutureJob_ID')->nullable();
            $table -> integer('EducationLevel_ID')->nullable();
            $table -> integer('QamarSupport_ID')->nullable();
            $table -> integer('PrimaryNumber')->nullable();
            $table -> integer('SecondaryNumber')->nullable();
            $table -> integer('RelativeNumber')->nullable();
            $table -> integer('Country_ID')->nullable();
            $table -> integer('Province_ID')->nullable();
            $table -> integer('District_ID')->nullable();
            $table -> string('Village')->nullable();
            $table -> integer('Tribe_ID')->nullable();
            $table -> string('Email')->nullable();
            $table -> integer('RelativeRelationship_ID')->nullable();
            $table -> string('RelativeName')->nullable();
            $table -> string('FatherName')->nullable();
            $table -> string('FatherNameLocal')->nullable();
            $table -> string('MaritalStatus')->nullable();
            $table -> string('SpuoseName')->nullable();
            $table -> string('SpuoseTazkiraID')->nullable();
            $table -> integer('EldestSonAge')->nullable();
            $table -> integer('MonthlyFamilyIncome')->nullable();
            $table -> integer('MonthlyFamilyExpenses')->nullable();
            $table -> integer('NumberFamilyMembers')->nullable();
            $table -> integer('IncomeStreem_ID')->nullable();
            $table -> integer('LevelPoverty')->nullable();
            $table -> integer('FamilyStatus_ID')->nullable();
            $table -> string('Tazkira')->nullable();
            $table -> string('Status')->nullable();
            $table -> integer('Status_By')->nullable();
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
        Schema::dropIfExists('qamar_care_cards');
    }
};
