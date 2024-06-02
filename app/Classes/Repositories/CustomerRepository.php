<?php 

namespace App\Classes\Repositories;

use App\Models\Customer;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class CustomerRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Customer $model){
		$this->model = $model;
	}
}
