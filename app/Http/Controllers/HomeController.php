<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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