<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrphanPayment extends Model
{
    use HasFactory;
    protected $fillable =
    [    
   
        'OrphanID',
        'PaymentOption',
        'PaymentAmount',
        'FullName',
        'Email',
        'CardNumber',
        'Password',
        'ChargeID',


    


    ];
}
