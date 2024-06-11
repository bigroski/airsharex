<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bigroski\Tukicms\App\Models\Post;
use Bigroski\Tukicms\App\Classes\Services\PostService;
use Bigroski\Tukicms\App\Classes\Services\CategoryService;
use Bigroski\Tukicms\App\Classes\Services\TagService;
use App\Mail\ContactForm;
use Mail;
use Auth;
class StaticController extends Controller
{
    //

	public function __construct(private PostService $postService,
		private CategoryService $categoryService,
		private TagService $tagService
	){

	}
	public function home(){
		return view('html.testPage');
	}
	public function about(){
		return view('html.about');
	}
	public function services(){
		return view('html.services');
	}
	public function blog(){
		$posts = Post::all();
		return view('html.blog')->with([
			'posts' => $posts
		]);
	}
	public function blogDetail($blog_id){
		$posts = Post::find($blog_id);
		return view('html.blogDetail')->with([
			'post' => $posts
		]);
	}
	public function signup(){
		return view('html.login');
	}
	public function register(){
		return view('html.register');
	}
	public function forgetpassord(){
		return view('html.forgetpassord');
	}
	public function history(){
		return view('html.history');
	}
	public function ourstory(){
		return view('html.ourstory');
	}
	public function contact(){
		return view('html.contact');
	}
	public function policy(){
		return view('html.policy');
	}
	public function disclaimer(){
		return view('html.disclaimer');
	}
	public function gallery(){
		return view('html.gallery');
	}
	public function emailverify(){
		return view('html.emailverify');
	}
	public function account(){
		return view('html.account');
	}
	public function search(){
		return view('html.search');
	}
	public function news(){
		$posts = $this->postService->paginatePosts();
		$categories = $this->categoryService->getAllCategories();
		$recent = $this->postService->getLatestArticles(2);
		$popularCategories = $this->tagService->getPopular();
		return view('html.news')->with([
			'posts' => $posts,
			'categories' => $categories,
			'popularTags' => $popularCategories,
			'recents' => $recent,


		]);
	}
	public function newsdetail($slug){
		$post = $this->postService->getPostBySlug($slug);
		$recent = $this->postService->getLatestArticles(2);
		$categories = $this->categoryService->getAllCategories();
		$popularCategories = $this->tagService->getPopular();
		return view('html.newsdetail')->with([
			'post' => $post, 
			'recents' => $recent,
			'categories' => $categories,
			'popularTags' => $popularCategories
		]);
	}
	public function processContact(Request $request){
		// dd($request->all());
		
		Mail::to('pratik.raghubanshi@gmail.com')->send(new ContactForm($request->all()));
		$request->session()->flash('success', 'Thank you for Contacting Us');
		return redirect()->back();
	}
	public function category($slug){
		
		$selectedCategory = $this->categoryService->findBySlug('category',$slug);
		// dd($selectedCategory);
		$posts = $selectedCategory->posts()->paginate();
		$categories = $this->categoryService->getAllCategories();
		$recent = $this->postService->getLatestArticles(2);

		$popularCategories = $this->tagService->getPopular();

		
		return view('html.news')->with([
			'posts' => $posts,
			'popularTags' => $popularCategories,
			'recents' => $recent,
			'selectedCategory' => $selectedCategory,
			'categories' => $categories
		]);
	}
	public function tag($slug){
		// dd($slug);
		$selectedCategory = $this->tagService->findBySlug('tag', $slug);
		// dd($selectedCategory);
		$posts = $selectedCategory->posts()->paginate();
		$categories = $this->categoryService->getAllCategories();
		$recent = $this->postService->getLatestArticles(2);

		$popularCategories = $this->tagService->getPopular();

		
		return view('html.news')->with([
			'posts' => $posts,
			'popularTags' => $popularCategories,
			'recents' => $recent,
			'selectedCategory' => $selectedCategory,
			'categories' => $categories
		]);
	}
	public function updateAccount(Request $request){
		$user = Auth::user();
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->phone = $request->phone;
		$user->address_one = $request->address_one;
		$user->address_two = $request->address_two;
		$user->city = $request->city;
		$user->state = $request->state;
		$user->save();
		$request->session()->flash('success', 'Profile successfully updated');
		return redirect()->back();
	}
}
