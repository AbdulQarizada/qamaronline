<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorSubscription extends Model
{
    use HasFactory;
    protected $fillable =
    [
     'Orphan_ID',
     'Amount',
     'Type',
     'Card_ID',
     'StartDate',
     'EndDate',
    ];
}
