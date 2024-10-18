<?php 

namespace App\Classes\Repositories;

use App\Models\FlightBooking;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class FlightBookingRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(FlightBooking $model){
		$this->model = $model;
	}
}
