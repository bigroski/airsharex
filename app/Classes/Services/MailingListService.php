<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\MailingListRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\MailingList;
use Illuminate\Validation\Rules;

class MailingListService extends BaseService{
	public function __construct(public MailingListRepository $mailingListRepository){
			
	}

	public function paginate(){
		return $this->mailingListRepository->paginate();
	}
	public function validateMailingList($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeMailingList($request){
		$data = $request->all();
		$model = $this->mailingListRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	public function adduserToMailingList($data){
		$model = $this->mailingListRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->mailingListRepository->findById($id);
	}

	public function updateMailingList($data, $model){
		$data = $request->all();
		$this->mailingListRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteMailingList($id){

	}
}