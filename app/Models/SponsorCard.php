<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorCard extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'FullName',
     'Email',
     'CardNumber',
     'CardLastFourDigit',
     'ExpMonth',
     'ExpYear',
     'CVV',
    ];
}
