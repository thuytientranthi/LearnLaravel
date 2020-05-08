<?php
namespace App\Repositories\Category;

use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Category::class;
    }

    /**
     * Get all data category
     *
     * @return mixed
     */
    public function all()
    {
        return $this->getAll();
    }
}