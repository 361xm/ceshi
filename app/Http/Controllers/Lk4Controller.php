<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk4Controller extends Controller
	{
		public function lk4()
		{
			$wan=\DB::table("links")->get();
			return view('home/lk4',["wan"=>$wan]);	
		}
	}
