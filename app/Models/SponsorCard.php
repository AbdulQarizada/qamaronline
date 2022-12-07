<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorCard extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'Sponsor_ID',
     'StripeCustomer_ID',
     'CardLastFourDigit',
     'IsActive',
     'IsActive_By',
     'Created_By',
     'Owner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Sponsor_ID');
    }
}
