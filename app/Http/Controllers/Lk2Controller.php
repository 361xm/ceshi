<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk2Controller extends Controller
	{
		public function lk2()
		{
			$wan=\DB::table("links")->get();
			return view('home/lk2',["wan"=>$wan]);
		}
	}