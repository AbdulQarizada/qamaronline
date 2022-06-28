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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('TazkiraID')->nullable();
            $table->string('DOB')->nullable();
            $table->integer('Gender_ID')->nullable();
            $table->integer('Country_ID')->nullable();
            $table->integer('Tribe_ID')->nullable();
            $table->integer('Language_ID')->nullable();
            $table->string('FatherName')->nullable();
            $table->string('MotherName')->nullable();
            $table->integer('MonthlyFamilyIncome')->nullable();
            $table->integer('MonthlyFamilyExpenses')->nullable();
            $table->integer('NumberFamilyMembers')->nullable();
            $table->integer('IncomeStreem_ID')->nullable();
            $table->integer('FamilyStatus_ID')->nullable();
            $table->string('MaritalStatus')->nullable();

            // documents
            $table->string('Profile')->nullable();
            $table->string('Tazkira')->nullable();





            $table->integer('PrimaryNumber')->nullable();
            $table->integer('SecondaryNumber')->nullable();
            $table->string('Email')->nullable();
            $table->integer('CurrentProvince_ID')->nullable();
            $table->integer('CurrentDistrict_ID')->nullable();
            $table->string('CurrentVillage')->nullable();
            $table -> string('RelativeName')->nullable();
            $table -> integer('RelativeRelationship_ID')->nullable();
            $table -> integer('RelativeNumber')->nullable();

            $table->string('Facebook')->nullable();
            $table->string('Telegram')->nullable();
            $table->string('Twitter')->nullable();






            $table->string('SchoolName')->nullable();
            $table->integer('SchoolProvince_ID')->nullable();
            $table->integer('SchoolDistrict_ID')->nullable();
            $table->integer('SchoolPercentage')->nullable();
            $table->string('SchoolGraduationDate')->nullable();
            $table->integer('EnglishProficiency_ID')->nullable();

            // documents
            $table->string('SchoolDiploma')->nullable();
            $table->string('SchoolTranscript')->nullable();
            $table->string('EnglishDiploma')->nullable();



            



            $table->string('OraganizationName')->nullable();
            $table->string('Position')->nullable();
            $table->string('OrganizationStartDate')->nullable();
            $table->string('OrganizationEndDate')->nullable();

            // documents
            $table->string('WorkExperienceLetter')->nullable();
            $table->string('Resume')->nullable();

            
            
            $table->longText('WhyChosenPersonalStatement')->nullable();
            $table->longText('WhyChosenTHisCountryPersonalStatement')->nullable();
            $table->longText('PlanAfterGraduationPersonalStatement')->nullable();

            $table->integer('ScholarshipType_ID')->nullable();
            $table->integer('Scholarship_ID')->nullable();
            $table->integer('PrefernceOneScholarshipModule_ID')->nullable();
            $table->integer('PrefernceTwoScholarshipModule_ID')->nullable();
            $table->integer('PrefernceThreeScholarshipModule_ID')->nullable();

            $table->string('Status')->nullable();
            $table->integer('Status_By')->nullable();
            $table->integer('Created_By')->nullable();
            $table->integer('Owner')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
