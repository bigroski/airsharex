<?php 

namespace App\Classes\Repositories;

use App\Models\Book;
use Bigroski\Tukicms\App\Classes\Repositories\Repository;
use Auth;

class BookRepository extends Repository{
	/**
	 * Constructor
	 * @param Booking $booking [description]
	 */
	public function __construct(Book $model){
		$this->model = $model;
	}
}
