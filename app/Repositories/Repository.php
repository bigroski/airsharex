<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Log;

class Repository
{
    public $model;
    

    /**
     * Paginate Model
     * @return Illuminate\Contracts\Pagination\LengthAwarePaginator [description]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    public function paginate()
    {
        $with = null;
        $modelItem = $this->model;
        if (is_array($with) && !empty($with)) {
            $modelItem = $modelItem->with($with);
        }
        $modelItem = $modelItem->orderBy('created_at', 'desc')->paginate();
        return $modelItem;
    }

    /**
     * Find Model By Id
     * @param integer $id Primary key of model
     * @param array $with Relationship to eager Load
     * @return Model
     */
    public function findById($id, $with = null)
    {
        $modelItem = $this->model->findOrFail($id);
        if (is_array($with)) {
            return $modelItem->load($with);
        }
        return $modelItem;
    }

    /**
     * Common Interface to Create Model
     * @param array $data
     * @return Model
     */
    public function create($data)
    {
        // dd($data);
        return $this->model->create($data);
    }

    /**
     * Update Existing model
     * @param array $data array with values to update
     * @param Model $model
     * @return Model
     */
    public function update($data, $model)
    {
        $model->update($data);
        return $model;
    }

    /**
     * Paginate model with where clause
     * @param string $column_name Column Name From database
     * @param string $condition Value
     * @return Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginateWhere($column_name, $condition)
    {
        return $this->queryWhere($column_name, $condition)->paginate();
    }

    /**
     * General Query with single where
     * @param string $column_name
     * @param string $condition
     * @return QueryBuilder
     */
    public function queryWhere($column_name, $condition)
    {
        return $this->model->where($column_name, $condition);
    }
    public function queryLike($column_name, $condition)
    {
        return $this->model->where($column_name,'LIKE', '%'.$condition.'%');
    }
    public function destroy($id)
    {          
       $model = $this->findById($id);
       return  $model->delete();
    }

}
