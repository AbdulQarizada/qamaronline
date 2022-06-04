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
            $table -> integer('TazkiraID');
            $table -> integer('QCC');
            $table -> string('Profile');
            $table -> string('DOB');
            $table -> string('Gender');
            $table -> string('Language');
            $table -> string('CurrentJob');
            $table -> string('FutureJob');
            $table -> string('EducationLevel');
            $table -> integer('PrimaryNumber');
            $table -> integer('SecondaryNumber');
            $table -> integer('EmergencyNumber');
            $table -> string('Province');
            $table -> string('District');
            $table -> string('Village');
            $table -> string('Email');
            $table -> string('FatherName');
            $table -> string('SpuoseName');
            $table -> integer('EldestSonAge');
            $table -> integer('MonthlyFamilyIncome');
            $table -> integer('MonthlyFamilyExpenses');
            $table -> integer('NumberFamilyMembers');
            $table -> string('IncomeStreem');
            $table -> string('LevelPoverty');
            $table -> string('Tazkira');
            $table -> string('Status');
            $table -> string('Created_By');
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
