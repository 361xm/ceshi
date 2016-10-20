<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk5Controller extends Controller
	{
		public function lk5()
		{
			$wan=\DB::table("links")->get();
			return view('home/lk5',["wan"=>$wan]);
		
		}
		public function lk6()
		{
			$wan=\DB::table("links")->get();
			return view('home/lk5',["wan"=>$wan]);
		
		}
	}
