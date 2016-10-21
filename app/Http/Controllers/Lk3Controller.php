<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk3Controller extends Controller
	{
		public function lk3()
		{
			$configs = \DB::table('config')->get();
			$wan=\DB::table("links")->get();
			return view('home/lk3',["wan"=>$wan,'configs'=>$configs]);
		}
	}
