<?php
/**
 * User: jhasheng@hotmail.com
 * Date: 17/2/20
 * Time: 14:36
 */

namespace App\Repositories;

use App\Models\Post;
use Bosnadev\Repositories\Eloquent\Repository;

class PostRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return Post::class;
    }
}