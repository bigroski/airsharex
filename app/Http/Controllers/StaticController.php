<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return view('html.blog');
	}
	public function signup(){
		return view('html.login');
	}
	public function register(){
		return view('html.register');
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
}
