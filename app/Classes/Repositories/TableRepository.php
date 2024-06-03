<?php 

namespace App\Classes\Repositories;

use App\Models\Table;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class TableRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Table $model){
		$this->model = $model;
	}
}
