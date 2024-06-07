<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\TestimonialRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;
use Illuminate\Validation\Rules;
use Auth;
// use App\Models\User;

class TestimonialService extends BaseService{
	public function __construct(public TestimonialRepository $testimonialRepository){
			
	}
	
	public function paginate(){
		return $this->testimonialRepository->paginate();
	}
	/**
	 * Create testimonial
	 */

	public function create($request){
		$data = $request->all();
		$testimonial = $this->testimonialRepository->create($data);		
		addFeaturedImage($testimonial, $request);
		return $testimonial;
	}

	
	/**
	 * Find Tag By id
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function findById($id){
		return $this->testimonialRepository->findById($id);
	}

	public function update($request, $testimonial){
		$testimonial = $this->findById($testimonial);	
		$data = $request->all();
		$this->testimonialRepository->update($data, $testimonial);
		addFeaturedImage($testimonial, $request);
		return $testimonial;
	}
	public function delete($id){
        return $this->testimonialRepository->destroy($id);
	}
	public function homeTestimonial(){
		return $this->testimonialRepository->model->inRandomOrder()->take(10)->get();
	}
}