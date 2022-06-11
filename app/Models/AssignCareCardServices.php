<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCareCardServices extends Model
{
    use HasFactory;
    
    protected $fillable =
     [    
    
      'Assignee_ID',
      'RequestedService_ID',
      'Province_ID',
      'District_ID',
      'ServiceProvider_ID',
      'ExpectedDate',
      'Status',
      'Status_By',
      'Created_By',
      'Owner'




     ];
}
