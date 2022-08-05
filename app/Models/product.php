<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [ 
        'P_ID',
        'P_name',
        'P_image',
        'Price',
        'P_quantity',
        'P_unit_pro',
        'P_number',
        'P_delete'

    ];
}
