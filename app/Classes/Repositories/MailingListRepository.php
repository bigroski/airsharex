<?php 

namespace App\Classes\Repositories;

use App\Models\MailingList;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class MailingListRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(MailingList $model){
		$this->model = $model;
	}
}
