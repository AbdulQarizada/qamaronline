<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
        protected $fillable =
     [    
    
        'FirstName',
        'LastName',
        'TazkiraID',
        'DOB',
        'Gender_ID',
        'Country_ID',
        'Tribe_ID',
        'Language_ID',
        'FatherName',
        'MotherName',
        'MonthlyFamilyIncome',
        'MonthlyFamilyExpenses',
        'NumberFamilyMembers',
        'IncomeStreem_ID',
        'FamilyStatus_ID',
        'MaritalStatus',

        'Profile',
        'Tazkira',





        'PrimaryNumber',
        'SecondaryNumber',
        'Email',
        'CurrentProvince_ID',
        'CurrentDistrict_ID',
        'CurrentVillage',
        'RelativeName',
        'RelativeRelationship_ID',
        'RelativeNumber',
        'Facebook',
        'Telegram',
        'Twitter',






        'SchoolName',
        'SchoolProvince_ID',
        'SchoolDistrict_ID',
        'SchoolPercentage',
        'SchoolGraduationDate',
        'EnglishProficiency_ID',

        // documents
        'SchoolDiploma',
        'SchoolTranscript',
        'EnglishDiploma',



        



        'OraganizationName',
        'Position',
        'OrganizationStartDate',
        'OrganizationEndDate',

     
        'WorkExperienceLetter',
        'Resume',


        
        'WhyChosenPersonalStatement',
        'WhyChosenTHisCountryPersonalStatement',
        'PlanAfterGraduationPersonalStatement',
        'ScholarshipType_ID',
        'Scholarship_ID',
        'PrefernceOneScholarshipModule_ID',
        'PrefernceTwoScholarshipModule_ID',
        'PrefernceThreeScholarshipModule_ID',




        'Status',
        'Status_By',
        'Created_By',
        'Owner',




     ];
}
