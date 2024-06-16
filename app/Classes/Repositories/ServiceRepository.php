<?php 

namespace App\Classes\Repositories;

use App\Models\Service;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class ServiceRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Service $model){
		$this->model = $model;
	}
}
