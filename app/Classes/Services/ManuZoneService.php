<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\ManuZoneRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\ManuZone;
use Illuminate\Validation\Rules;

class ManuZoneService extends BaseService{
	public function __construct(public ManuZoneRepository $manuZoneRepository){
			
	}

	public function paginate(){
		return $this->manuZoneRepository->paginate();
	}
	public function validateManuZone($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeManuZone($data){
		$model = $this->manuZoneRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->manuZoneRepository->findById($id);
	}

	public function updateManuZone($data, $model){

		$this->manuZoneRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteManuZone($id){

	}
}