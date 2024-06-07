<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\AirportRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use App\Repositories\VendorRepository;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

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
		$user = Auth::user();
		$data = $request->all();
		$data['user_id'] = $user->type=='vendor'??$user->id??null;
		$vendor = $this->vendorRepository->create($data);		
		addFeaturedImage($vendor, $request);
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
		$user = Auth::user();
		$data['user_id'] = $user->type=='vendor'??$user->id??null;
		$this->vendorRepository->update($data, $airport);
		addFeaturedImage($airport, $request);
		
		return $airport;
	}
	public function delete($id){
        return $this->vendorRepository->destroy($id);
	}
	/**
	 * Get the list of featured vendors
	 * @return [type] [description]
	 */
	public function featuredVendors(){
		return $this->vendorRepository->getLatest(20);
	}
}