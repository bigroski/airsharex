<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\AirportRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use Illuminate\Validation\Rules;
use Auth;
// use App\Models\User;

class AirportService extends BaseService{
	public function __construct(public AirportRepository $airportRepository){
			
	}
	
	public function paginate(){
		return $this->airportRepository->paginate();
	}
	/**
	 * Create airport
	 */

	public function create($request){
		$data = $request->all();
		$airport = $this->airportRepository->create($data);		
		return $airport;
	}

	
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->airportRepository->findById($id);
	}

	public function updatePost($request, $airport){
		$airport = $this->findById($airport);	
		$data = $request->all();
		$this->airportRepository->update($data, $airport);
		
		return $airport;
	}
	public function delete($id){
        return $this->airportRepository->destroy($id);
	}
}