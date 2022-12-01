<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorPayment extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'Sponsor_ID',
     'SubscriptionType',
     'Amount',
     'FullName',
     'Email',
     'Card_ID',
     'ChargeID',
     'IsPaid',
     'Status_By',
     'Created_By',
     'Owner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
