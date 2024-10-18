<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\FlightBookingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\FlightBooking;
use Illuminate\Validation\Rules;

class FlightBookingService extends BaseService{
	public function __construct(public FlightBookingRepository $flightBookingRepository){
			
	}

	public function paginate(){
		return $this->flightBookingRepository->paginate();
	}
	public function validateFlightBooking($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeFlightBooking($request){
		$data = $request->all();
		$model = $this->flightBookingRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->flightBookingRepository->findById($id);
	}

	public function updateFlightBooking($data, $model){
		$data = $request->all();
		$this->flightBookingRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteFlightBooking($id){
		$model = $this->findById($id);
		$model->delete();
		return;
	}
}