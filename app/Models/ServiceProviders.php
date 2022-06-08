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
     'Gender',
     'Province',
     'District',
     'Language',
     'CurrentJob',
     'Profession',
     'EducationLevel',

     'PrimaryNumber',
     'SecondaryNumber',
     'Email',


     'ProvinceService',
     'DistrictService',
     'ServiceType',


     'Status',
     'Status_By',
     'Created_By',
     'Owner'




    ];
}
