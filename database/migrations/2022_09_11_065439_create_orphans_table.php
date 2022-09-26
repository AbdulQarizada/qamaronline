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
        Schema::create('orphans', function (Blueprint $table) {
            $table->id();
            $table -> string('FirstName')->nullable();
            $table -> string('LastName')->nullable();
            $table -> string('IntroducerName')->nullable();
            $table -> string('TazkiraID')->nullable();
            $table -> string('Profile')->nullable();
            $table -> string('DOB')->nullable();
            $table -> integer('Gender_ID')->nullable();
            $table -> integer('Country_ID')->nullable();
            $table -> integer('Tribe_ID')->nullable();
            $table -> integer('Language_ID')->nullable();
            $table -> longText('WhyShouldYouHelpMe')->nullable();



            $table -> integer('PrimaryNumber')->nullable();
            $table -> integer('SecondaryNumber')->nullable();
            $table -> integer('EmergencyNumber')->nullable();
            $table -> integer('Province_ID')->nullable();
            $table -> integer('District_ID')->nullable();
            $table -> string('Village')->nullable();
            $table -> string('InCareName')->nullable();
            $table -> integer('InCareRelationship_ID')->nullable();
            $table -> integer('InCareNumber')->nullable();
            $table -> string('InCareTazkiraID')->nullable();



            $table -> string('CurrentlyInSchool')->nullable();
            $table -> string('SchoolName')->nullable();
            $table -> integer('SchoolProvince_ID')->nullable();
            $table -> integer('SchoolDistrict_ID')->nullable();
            $table -> string('SchoolVillage')->nullable();
            $table -> integer('SchoolNumber')->nullable();
            $table -> string('SchoolEmail')->nullable();
            $table -> integer('Class')->nullable();



            $table -> string('FatherName')->nullable();
            $table -> integer('MonthlyFamilyIncome')->nullable();
            $table -> integer('MonthlyFamilyExpenses')->nullable();
            $table -> integer('NumberFamilyMembers')->nullable();
            $table -> integer('IncomeStreem_ID')->nullable();
            $table -> integer('LevelPoverty')->nullable();
            $table -> integer('FamilyStatus_ID')->nullable();



            $table -> integer('IsSponsored')->nullable();
            $table -> integer('Sponsor_ID')->nullable();



            $table -> string('Tazkira')->nullable();
            $table -> string('FamilyPic')->nullable();
            $table -> string('HousePic')->nullable();

            
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
        Schema::dropIfExists('orphans');
    }
};
