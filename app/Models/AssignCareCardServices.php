<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCareCardServices extends Model
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
      'Gender',
      'Language',
      'CurrentJob',
      'FutureJob',
      'EducationLevel',
      'PrimaryNumber',
      'SecondaryNumber',
      'RelativeNumber',
      'RelativeRelationship',
      'RelativeName',
      'FamilyStatus',
      'Country',
      'Tribe',
      'Province',
      'District',
      'Village',
      'Email',
      'FatherName',
      'SpuoseName',
      'EldestSonAge',
      'MonthlyFamilyIncome',
      'MonthlyFamilyExpenses',
      'NumberFamilyMembers',
      'IncomeStreem',
      'LevelPoverty',
      'Tazkira',
      'Status',
      'Status_By',
      'Created_By',
      'Owner'




     ];
}
