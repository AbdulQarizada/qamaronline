<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficiarylist extends Model
{
    use HasFactory;
    protected $fillable =
    [

     'Reference_ID',
     'Province_ID',
     'SecondaryNumber',
     'PrimaryNumber',
     'TazkiraID',
     'FullName',
     'FatherName',
     'Created_By',
     'Owner'


    ];
}
