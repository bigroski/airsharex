<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bigroski\Tukicms\App\Models\Post;
class StaticController extends Controller
{
    //

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
		return view('html.news');
	}
	public function newsdetail(){
		return view('html.newsdetail');
	}
}
