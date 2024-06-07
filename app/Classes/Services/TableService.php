<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\TableRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Table;
use Illuminate\Validation\Rules;

class TableService extends BaseService{
	public function __construct(public TableRepository $tableRepository){
			
	}

	public function paginate(){
		return $this->tableRepository->paginate();
	}
	public function validateTable($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeTable($request){
		$data = $request->all();
		$model = $this->tableRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->tableRepository->findById($id);
	}

	public function updateTable($data, $model){
		$data = $request->all();
		$this->tableRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteTable($id){

	}
}