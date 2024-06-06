<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Illuminate\Validation\Rules;

class CustomerService extends BaseService{
	public function __construct(public CustomerRepository $customerRepository){
			
	}

	public function paginate(){
		return $this->customerRepository->paginate();
	}
	public function validateCustomer($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeCustomer($request){
		$data = $request->all();
		$model = $this->customerRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->customerRepository->findById($id);
	}

	public function updateCustomer($data, $model){
		$data = $request->all();
		$this->customerRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteCustomer($id){

	}
}