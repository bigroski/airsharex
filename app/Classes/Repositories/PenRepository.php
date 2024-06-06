<?php 

namespace App\Classes\Repositories;

use App\Models\Pen;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class PenRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Pen $model){
		$this->model = $model;
	}
}
