<?php 

namespace App\Classes\Repositories;

use App\Models\Device;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class DeviceRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Device $model){
		$this->model = $model;
	}
}
