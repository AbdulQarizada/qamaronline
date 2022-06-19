<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $fillable =
    [    
   
     'ScholarshipName',
     'ScholarshipType_ID',
     'Country_ID',
     'StartDate',
     'EndDate',
     'Seats',
    
     'Status',
     'Status_By',
     'Created_By',
     'Owner'




    ];
}
