<?php 

namespace App\Classes\Repositories;

use App\Models\Blade;
use 
use Auth;

class BladeRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Blade $model){
		$this->model = $model;
	}
}
