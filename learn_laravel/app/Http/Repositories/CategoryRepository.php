<?php 
namespace App\Repositories;

use App\Category;

class CategoryRepository
{
    /**
     * To telling repository what model class you want to use.
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }
}