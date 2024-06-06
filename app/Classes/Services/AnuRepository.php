<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\AnuRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Anu;
use Illuminate\Validation\Rules;

class AnuService extends BaseService{
	public function __construct(public AnuRepository $AnuRepository){
			
	}

	public function paginate(){
		return $this->AnuRepository->paginate();
	}
	public function validateAnu($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeAnu($data){
		$model = $this->AnuRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->AnuRepository->findById($id);
	}

	public function updateAnu($data, $model){

		$this->AnuRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteAnu($id){

	}
}