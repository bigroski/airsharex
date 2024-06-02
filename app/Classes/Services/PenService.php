<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\PenRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pen;
use Illuminate\Validation\Rules;

class PenService extends BaseService{
	public function __construct(public PenRepository $penRepository){
			
	}

	public function paginate(){
		return $this->penRepository->paginate();
	}
	public function validatePen($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makePen($request){
		$data = $request->all();
		$model = $this->penRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->penRepository->findById($id);
	}

	public function updatePen($data, $model){
		$data = $request->all();
		$this->penRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deletePen($id){

	}
}