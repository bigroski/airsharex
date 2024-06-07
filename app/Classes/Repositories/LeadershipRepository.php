<?php 

namespace App\Classes\Repositories;

use App\Models\Leadership;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class LeadershipRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Leadership $model){
		$this->model = $model;
	}
}
