<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'FirstName',
     'LastName',
     'DOB',
     'Gender_ID',
     'Email',
     'PrimaryNumber',
     'SecondaryNumber',
     'Address',
     'Country',
     'City',
     'WeeklyHours',
     'MediaPresence',
     'WhatYouOffer',
     'Profile',
     'Passport',
     'Resume',
     'Owner',
    ];

}
