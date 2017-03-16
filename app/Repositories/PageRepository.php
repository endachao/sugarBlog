<?php

/**
 * Created by PhpStorm.
 * User: YuanChao <endachao@gmail.com>
 * Date: 2017/3/16
 */
namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;
use App\Models\Pages;

class PageRepository extends Repository
{
    public function model()
    {
        return Pages::class;
    }
}