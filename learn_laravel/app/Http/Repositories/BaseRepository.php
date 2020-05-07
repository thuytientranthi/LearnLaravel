<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Prettus\Repository\Eloquent\BaseRepository as BaseRepo;

abstract class BaseRepository extends BaseRepo
{
    /**
     * Get all data
     */
    public function getAll()
    {
        return $model->all();
    }

    /**
     * Delete data with conditions.
     *
     * @param array $where Conditions to delete
     *
     * @return mixed
     */
    public function deleteWhere(array $where)
    {
        return $this->model->where($where)->delete();
    }

    /**
     * Inserting records into the database table.
     *
     * @param array $data      Rows data
     * @param array $timestamp Timestamp
     *
     * @return bool
     */
    public function insertMany($data, $timestamp = false)
    {
        if ($timestamp) {
            foreach ($data as $key => $value) {
                $value['updated_at'] = Carbon::now();
                $value['created_at'] = Carbon::now();
                $data[$key] = $value;
            }
        }

        return \DB::table($this->model->getTable())->insert($data);
    }

    /**
     * Delete a model.
     *
     * @param Collection $model Model
     *
     * @return mixed
     */
    public function deleteModel($model)
    {
        return $model->delete();
    }

    /**
     * This method overide "update" method.
     *
     * @param array $attributes Attribute to update
     * @param int   $id         Model's id
     *
     * @return mixed
     */
    public function update(array $attributes, $id)
    {
        $this->applyCriteria();
        parent::update($attributes, $id);
    }

    /**
     * First or create.
     *
     * @param array $attributes Attributes
     *
     * @return mixed
     */
    public function firstOrCreate(array $attributes = [])
    {
        return $this->model->firstOrCreate($attributes);
    }

    /**
     * Update a model.
     *
     * @param Collection $model      Model
     * @param array      $attributes Attributes
     *
     * @return mixed
     */
    public function updateModel($model, $attributes)
    {
        return $model->update($attributes);
    }

    /**
     * Get query builder for datatables.
     *
     * @param array $column query column
     *
     * @return Illuminate\Database\Eloquent\Builder         QueryBuilder for datatable
     */
    public function datatables($column = ['*'])
    {
        $this->applyCriteria();
        $this->applyScope();

        return $this->model->select($column);
    }

    /**
     * This method overide "withTrashed" method.
     *
     * @return mixed
     */
    public function withTrashed()
    {
        return $this->model->withTrashed();
    }
}
