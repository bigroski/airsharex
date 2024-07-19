<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\CitizenshipRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Citizenship;
use Illuminate\Validation\Rules;

class CitizenshipService extends BaseService{
	public function __construct(public CitizenshipRepository $citizenshipRepository){
			
	}

	public function paginate(){
		return $this->citizenshipRepository->paginate();
	}
	public function validateCitizenship($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeCitizenship($request){
		$data = $request->all();
		$model = $this->citizenshipRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->citizenshipRepository->findById($id);
	}

	public function updateCitizenship($data, $model){
		$data = $request->all();
		$this->citizenshipRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteCitizenship($id){

	}
}