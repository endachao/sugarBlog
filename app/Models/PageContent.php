<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageInfo extends Model
{
    //
    protected $table = 'sg_page_content';

    protected $fillable = ['page_id', 'content'];
}
