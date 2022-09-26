<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphan extends Model
{
    use HasFactory;
    protected $fillable =
    [    
   
        'FirstName',
        'LastName',
        'IntroducerName',
        'TazkiraID',
        'Profile',
        'DOB',
        'Gender_ID',
        'Country_ID',
        'Tribe_ID',
        'Language_ID',
        'WhyShouldYouHelpMe',
        

        'PrimaryNumber',
        'SecondaryNumber',
        'EmergencyNumber',
        'Province_ID',
        'District_ID',
        'Village',
        'InCareName',
        'InCareRelationship_ID',
        'InCareNumber',
        'InCareTazkiraID',


       


       
       

        'CurrentlyInSchool',            
        'SchoolName',
        'SchoolProvince_ID',
        'SchoolDistrict_ID',
        'SchoolVillage',
        'SchoolNumber',
        'SchoolEmail',
        'Class',

 
      

        'FatherName',
        'MonthlyFamilyIncome',
        'MonthlyFamilyExpenses',
        'NumberFamilyMembers',
        'IncomeStreem_ID',
        'LevelPoverty',
        'FamilyStatus_ID',

        
        'Tazkira',
        'HousePic',
        'FamilyPic',

        'Sponsor_ID',



        'Status',
        'IsSponsored',
        'Status_By',
        'Created_By',
        'Owner',



    ];
}
