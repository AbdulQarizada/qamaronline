<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviders extends Model
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
     'Province_ID',
     'District_ID',
     'Language_ID',
     'CurrentJob_ID',
     'Profession_ID',
     'EducationLevel_ID',
     'NumberOfFree',
     'Discount',
     'PrimaryNumber',
     'SecondaryNumber',
     'Email',


     'ProvinceService_ID',
     'DistrictService_ID',
     'ServiceType_ID',


     'Status',
     'Status_By',
     'Created_By',
     'Owner'




    ];
}
