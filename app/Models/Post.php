<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'sg_posts';

    protected $fillable = ['*'];
}
