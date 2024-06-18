<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Gallery;
use Illuminate\Validation\Rules;

class GalleryService extends BaseService{
	public function __construct(public GalleryRepository $galleryRepository){
			
	}
	public function getAllData(){
		return $this->galleryRepository
		->getAllData();
	}
	public function getAll(){
		return $this->galleryRepository->getAll();
	}
	public function paginate(){
		return $this->galleryRepository->paginate();
	}
	public function validateGallery($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeGallery($request){
		$data = $request->all();
		$model = $this->galleryRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->galleryRepository->findById($id);
	}

	public function updateGallery($request, $model){
		$data = $request->all();
		$this->galleryRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteGallery($id){

	}
}