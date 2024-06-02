<?php 

namespace App\Classes\Repositories;

use App\Models\$MODEL_NAME;
use 
use Auth;

class $MODEL_NAMERepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct($MODEL_NAME $model){
		$this->model = $model;
	}
}
