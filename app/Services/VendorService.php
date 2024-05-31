<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\AirportRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Repositories\VendorRepository;
use Illuminate\Validation\Rules;
use Auth;
// use App\Models\User;

class VendorService extends BaseService{
	public function __construct(public VendorRepository $vendorRepository){
			
	}
	
	public function paginate(){
		return $this->vendorRepository->paginate();
	}
	/**
	 * Create airport
	 */

	public function create($request){
		$data = $request->all();
		$vendor = $this->vendorRepository->create($data);		
		return $vendor;
	}

	
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->vendorRepository->findById($id);
	}

	public function update($request, $airport){
		$airport = $this->findById($airport);	
		$data = $request->all();
		$this->vendorRepository->update($data, $airport);
		
		return $airport;
	}
	public function delete($id){
        return $this->vendorRepository->destroy($id);
	}
}