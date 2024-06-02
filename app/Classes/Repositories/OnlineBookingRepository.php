<?php 

namespace App\Classes\Repositories;

use App\Models\OnlineBooking;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class OnlineBookingRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(OnlineBooking $model){
		$this->model = $model;
	}
}
