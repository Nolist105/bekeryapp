<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    use HasFactory;
    protected $table = 'material';
    protected $fillable = [ 
        'M_ID',
        'M_name',
        'M_balane',
        'M_unit_use',
        'M_point',
        'M_unit_pack',
        'M_number',
        'M_delete'
    ];
}
