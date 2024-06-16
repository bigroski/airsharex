<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Service;
use Illuminate\Validation\Rules;

class ServiceService extends BaseService{
	public function __construct(public ServiceRepository $serviceRepository){
			
	}

	public function getAll(){
		return $this->serviceRepository->getAll();
	}

	public function paginate(){
		return $this->serviceRepository->paginate();
	}
	public function validateService($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeService($request){
		$data = $request->all();
		$model = $this->serviceRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->serviceRepository->findById($id);
	}

	public function updateService($request, $model){
		// dd($model);
		$model = $this->serviceRepository->findById($model);
		$data = $request->all();
		$this->serviceRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteService($id){

	}
	public function getFeaturedService(){
		return $this->serviceRepository->queryWhere('is_featured', true)->get();
	}
}