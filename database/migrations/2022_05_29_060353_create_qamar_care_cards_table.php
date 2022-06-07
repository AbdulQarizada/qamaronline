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
            $table -> string('FirstName')->nullable();
            $table -> string('LastName')->nullable();
            $table -> string('TazkiraID')->nullable();
            $table -> integer('QCC')->nullable();
            $table -> string('Profile')->nullable();
            $table -> string('DOB')->nullable();
            $table -> string('Gender')->nullable();
            $table -> string('Language')->nullable();
            $table -> string('CurrentJob')->nullable();
            $table -> string('FutureJob')->nullable();
            $table -> string('EducationLevel')->nullable();
            $table -> integer('PrimaryNumber')->nullable();
            $table -> integer('SecondaryNumber')->nullable();
            $table -> integer('RelativeNumber')->nullable();
            $table -> string('Country')->nullable();
            $table -> string('Province')->nullable();
            $table -> string('District')->nullable();
            $table -> string('Village')->nullable();
            $table -> string('Tribe')->nullable();
            $table -> string('Email')->nullable();
            $table -> string('RelativeRelationship')->nullable();
            $table -> string('RelativeName')->nullable();
            $table -> string('FatherName')->nullable();
            $table -> string('SpuoseName')->nullable();
            $table -> integer('EldestSonAge')->nullable();
            $table -> integer('MonthlyFamilyIncome')->nullable();
            $table -> integer('MonthlyFamilyExpenses')->nullable();
            $table -> integer('NumberFamilyMembers')->nullable();
            $table -> string('IncomeStreem')->nullable();
            $table -> string('LevelPoverty')->nullable();
            $table -> string('FamilyStatus')->nullable();
            $table -> string('Tazkira')->nullable();
            $table -> string('Status')->nullable();
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
        Schema::dropIfExists('qamar_care_cards');
    }
};
