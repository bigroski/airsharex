<?php 

namespace App\Classes\Repositories;

use App\Models\BookingOnDemand;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class BookingOnDemandRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(BookingOnDemand $model){
		$this->model = $model;
	}
}
