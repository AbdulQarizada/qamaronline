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
     'Sponsor_ID',
     'Amount',
     'Type',
     'Card_ID',
     'StartDate',
     'EndDate',
     'IsActive',
     'IsActive_By',
     'Created_By',
     'Owner',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'Sponsor_ID');
    }

    public function orphan()
    {
        return $this->belongsTo(Orphan::class, 'Orphan_ID');
    }
}
