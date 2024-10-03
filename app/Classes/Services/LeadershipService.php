<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\LeadershipRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Leadership;
use Illuminate\Validation\Rules;

class LeadershipService extends BaseService{
	public function __construct(public LeadershipRepository $leadershipRepository){
			
	}

	public function paginate(){
		return $this->leadershipRepository->paginate();
	}
	public function validateLeadership($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeLeadership($request){
		$data = $request->all();
		$model = $this->leadershipRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->leadershipRepository->findById($id);
	}

	public function updateLeadership($request, $model){
		$data = $request->all();
		$model = $this->leadershipRepository->findById($model);
		$this->leadershipRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteLeadership($id){
		$model = $this->leadershipRepository->findById($id);
		$model->delete();
		return;
	}
	public function all(){
		return $this->leadershipRepository->getAll();
	}
}