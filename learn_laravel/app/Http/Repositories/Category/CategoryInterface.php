<?php
namespace App\Repositories\Category;

interface CategoryInterface
{
    /**
     * Get 5 posts
     *
     * @return mixed
     */
    public function all();
}