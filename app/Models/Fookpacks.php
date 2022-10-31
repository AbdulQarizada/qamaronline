<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fookpacks extends Model
{
    use HasFactory;

    protected $fillable =
     [

      'Name',
      'ExpectedDate',
      'Province_ID',
      'District_ID',
      'TotalBudget',
      'OrganizationName',
      'TargetBeneficiaries',
      'Description',
      'Created_By',
      'Owner'




     ];
}
