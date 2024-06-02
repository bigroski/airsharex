<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\OnlineBookingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\OnlineBooking;
use Illuminate\Validation\Rules;

class OnlineBookingService extends BaseService{
	public function __construct(public OnlineBookingRepository $onlineBookingRepository){
			
	}

	public function paginate(){
		return $this->onlineBookingRepository->paginate();
	}
	public function validateOnlineBooking($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeOnlineBooking($data){
		$model = $this->onlineBookingRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->onlineBookingRepository->findById($id);
	}

	public function updateOnlineBooking($data, $model){

		$this->onlineBookingRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteOnlineBooking($id){

	}
}