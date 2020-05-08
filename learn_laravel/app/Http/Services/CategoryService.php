<?php

namespace App\Http\Services;

use App\Repositories\Category\CategoryInterface;

/**
 * Class CategoryServices
 * @package App\Http\Services
 *
 */
class CategoryServices extends Service {

    protected $_categoryRepository;

    /**
     * CategoryServices constructor.
     * @param CategoryInterface $categoryRepository
     */
    public function __construct(CategoryInterface $categoryRepository) {
        $this->_categoryRepository = $categoryRepository;
    }

    /**
     * Get list category
     *
     * @return mixed
     */
    public function getListCategory() {
        return $this->_categoryRepository->all();
    }

    /**
     * Find category by id
     *
     * @param int $id
     * @return mixed
     */
    public function find($id) {
        return $this->_categoryRepository->find($id);
    }
}
