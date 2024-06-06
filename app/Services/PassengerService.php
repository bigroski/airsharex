<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\PassengerRepository;
use Auth;

class PassengerService extends BaseService{
	public function __construct(public PassengerRepository $passengerRepository){
			
	}
	
	public function paginate(){
		return $this->passengerRepository->paginate();
	}
	/**
	 * Create passenger
	 */

	public function create($request){
		$data = $request->all();
		$passenger = $this->passengerRepository->create($data);		
		return $passenger;
	}

	
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->passengerRepository->findById($id);
	}

	public function update($request, $passenger){
		$passenger = $this->findById($passenger);	
		$data = $request->all();
		$this->passengerRepository->update($data, $passenger);
		
		return $passenger;
	}
	public function delete($id){
        return $this->passengerRepository->destroy($id);
	}
}