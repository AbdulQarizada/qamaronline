<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeneficiariesToFoodPacks extends Model
{
    use HasFactory;
    protected $fillable =
    [

     'FoodPack_ID',
     'Beneficiary_ID',
     'Created_By',
     'Owner'


    ];
}
