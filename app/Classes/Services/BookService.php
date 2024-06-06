<?php

namespace App\Classes\Services;
use Bigroski\Tukicms\App\Classes\Services\BaseService;
use App\Classes\Repositories\BookRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Book;
use Illuminate\Validation\Rules;

class BookService extends BaseService{
	public function __construct(public BookRepository $bookRepository){
			
	}

	public function paginate(){
		return $this->bookRepository->paginate();
	}
	public function validateBook($request){
		$request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
	}
	/**
	 * Create Tag
	 */

	public function makeBook($request){
		$data = $request->all();
		$model = $this->bookRepository->create($data);
		addFeaturedImage($model, request());
		
		return $model;

	}
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->bookRepository->findById($id);
	}

	public function updateBook($data, $model){
		$data = $request->all();
		$this->bookRepository->update($data, $model);
		addFeaturedImage($model, request());
		return $model;
	}
	public function deleteBook($id){

	}
}