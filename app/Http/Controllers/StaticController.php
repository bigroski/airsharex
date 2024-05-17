<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    //

	public function testPage(){
		return view('html.testPage');
	}
	public function blog(){
		return view('html.blog');
	}
}
