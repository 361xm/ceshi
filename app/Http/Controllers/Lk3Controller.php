<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk3Controller extends Controller
	{
		public function lk3()
		{
			$wan=\DB::table("links")->get();
			return view('home/lk3',["wan"=>$wan]);
		}
	}
