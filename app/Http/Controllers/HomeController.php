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
		
	
	
	public function admin(){
		return view('pages.index.index');
		
	}
	public function admin2(){
		return view('pages.index.index2');
		
	}
	
	public function chartjs(){
		return view('pages.charts.chartjs');
		
	}

	public function morris(){
		return view('pages.charts.morris');
		
	}
	
	public function inline(){
		return view('pages.charts.inline');
		
	}
	public function flot(){
		return view('pages.charts.flot');
		
	}
	
	
	
	
	
	
	
	public function advance(){
		return view('pages.forms.advanced');
		
	}
	
	
	public function editor(){
		return view('pages.forms.editors');
		
	}
	
	public function general(){
		return view('pages.forms.general');
		
	}
	
	public function four(){
		return view('pages.forms.examples.404');
	}
	
	public function five(){
		return view('pages.forms.examples.500');
		
	}
	
	public function widgets(){
		return view('pages.widgets');
		
	}
	

}


/*
class HomeController extends Controller{

	public function Index(){
		
		DB::insert('insert into students (id,name) values(?,?)',[6,'hamid']);
		DB::delete('delete from students where id= :id',['id'=>3]);
	
		//$students=DB::select('select * from students where name =?',['hasan']);
		//return view('home.index',['students'=>$students]); //it means home folder e index thakbe
		DB::transaction(function(){
		//	DB::insert('insert into students (id,name) values(?,?)',[1,'a']);
			
		//	DB::insert('insert into students (id,name) values(?,?)',[1,'b']);
		


		});

//		DB::beginTransaction();
		//DB::insert('insert into  students (id,name) values(?,?)',[3,'aa']);
		
//		DB::commit();

$students=DB::table('students')->get();
$astudent=DB::table('students')->where('id',3)->get();
return view('home.index',['students'=>$astudent]);

	}

	

	public function ContactUs(){

		return view('home.contact');

	}
}

*/