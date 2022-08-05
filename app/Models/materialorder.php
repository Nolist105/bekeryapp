<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialorder extends Model
{
    use HasFactory;
    protected $table = 'materialorder';
    protected $fillable = [ 
        'M_ID',
        'M_name',
        'MO_date',
        'MO_delete'
    ];
}
