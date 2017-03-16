<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    //
    protected $table = 'sg_pages';

    protected $fillable = ['title', 'status'];
}
