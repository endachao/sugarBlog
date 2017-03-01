<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'sg_setting';

    // protected $dateFormat = 'U'; 

    protected $fillable = ['key', 'value'];

    protected $casts = [
        'value' => 'array',
    ];
}
