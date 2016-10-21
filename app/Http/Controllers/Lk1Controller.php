<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk1Controller extends Controller
	{
		public function lk1()
		{
			$configs = \DB::table('config')->get();
			$wan=\DB::table("links")->get();
			return view('home/lk1',["wan"=>$wan,'configs'=>$configs]);
		}
	}