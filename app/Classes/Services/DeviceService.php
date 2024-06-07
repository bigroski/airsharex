<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\DeviceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Device;
use Illuminate\Validation\Rules;

class DeviceService extends BaseService{
	public function __construct(public DeviceRepository $deviceRepository){
			
	}

	public function paginate(){
		return $this->deviceRepository->paginate();
	}
	public function validateDevice($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeDevice($request){
		$data = $request->all();
		$model = $this->deviceRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->deviceRepository->findById($id);
	}

	public function updateDevice($data, $model){
		$data = $request->all();
		$this->deviceRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteDevice($id){

	}
}