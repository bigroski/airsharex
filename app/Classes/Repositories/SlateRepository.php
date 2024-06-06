<?php 

namespace App\Classes\Repositories;

use App\Models\Slate;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class SlateRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Slate $model){
		$this->model = $model;
	}
}
