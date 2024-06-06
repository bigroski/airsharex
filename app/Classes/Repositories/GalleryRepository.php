<?php 

namespace App\Classes\Repositories;

use App\Models\Gallery;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class GalleryRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Gallery $model){
		$this->model = $model;
	}
}
