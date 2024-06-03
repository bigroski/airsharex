<?php 

namespace App\Classes\Repositories;

use App\Models\Anu;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class AnuRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Anu $model){
		$this->model = $model;
	}
}
