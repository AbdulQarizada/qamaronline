<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QamarCareCard extends Model
{
    use HasFactory;

    protected $fillable =
     [    
    
      'FirstName',
      'LastName',
      'TazkiraID',
      'QCC',
      'Profile',
      'DOB',
      'Gender_ID',
      'Language_ID',
      'CurrentJob_ID',
      'FutureJob_ID',
      'EducationLevel_ID',
      'PrimaryNumber',
      'SecondaryNumber',
      'RelativeNumber',
      'RelativeRelationship_ID',
      'RelativeName',
      'FamilyStatus_ID',
      'Country_ID',
      'Tribe_ID',
      'Province_ID',
      'District_ID',
      'Village',
      'Email',
      'FatherName',
      'SpuoseName',
      'EldestSonAge',
      'MonthlyFamilyIncome',
      'MonthlyFamilyExpenses',
      'NumberFamilyMembers',
      'IncomeStreem_ID',


      
      'LevelPoverty',
      'Tazkira',
      'Status',
      'Status_By',
      'Created_By',
      'Owner'




     ];
}
