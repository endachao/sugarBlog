<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageStatus extends Model
{
    protected $table = 'sg_page_status';

    protected $fillable = ['page_id', 'pv', 'uv'];
}
