<?php 

namespace App\Classes\Repositories;

use App\Models\Citizenship;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class CitizenshipRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Citizenship $model){
		$this->model = $model;
	}
}
