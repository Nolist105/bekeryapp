<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockin extends Model
{
    
    use HasFactory;
    protected $table = 'stockin';
    protected $fillable = [ 
        'M_ID',
        'M_name',
        'S_date',
        'S_in',
        'S_unit_count',
        'S_cost'
    ];
}
