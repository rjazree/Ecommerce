<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

	public function Index(){
		return view('pages.index');
	}
	
	public function home(){
		return view('pages.home');
		
	}
	
	
	public function Cart(){
		return view('pages.cart');
		
	}
	
	public function categories(){
		return view('pages.categories');
		
	}
	
	public function checkout(){
		return view('pages.checkout');
		
	}
	
	public function contact(){
		return view('pages.contact');
		
	}
	
	public function product(){
		return view('pages.product');
		
	}
		
	
}