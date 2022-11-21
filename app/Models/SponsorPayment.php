<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorPayment extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'SubscriptionType',
     'Amount',
     'FullName',
     'Email',
     'Card_ID',
     'ChargeID',
    ];
}
