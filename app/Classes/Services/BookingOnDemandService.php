<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\BookingOnDemandRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\BookingOnDemand;
use Illuminate\Validation\Rules;

class BookingOnDemandService extends BaseService{
	public function __construct(public BookingOnDemandRepository $bookingOnDemandRepository){
			
	}

	public function paginate(){
		return $this->bookingOnDemandRepository->paginate();
	}
	public function validateBookingOnDemand($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeBookingOnDemand($request){
		$data = $request->all();
		$model = $this->bookingOnDemandRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->bookingOnDemandRepository->findById($id);
	}

	public function updateBookingOnDemand($data, $model){
		$data = $request->all();
		$this->bookingOnDemandRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteBookingOnDemand($id){

	}
}