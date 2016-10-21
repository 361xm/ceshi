<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk4Controller extends Controller
	{
		public function lk4()
		{
			$configs = \DB::table('config')->get();
			$wan=\DB::table("links")->get();
			return view('home/lk4',["wan"=>$wan,'configs'=>$configs]);
		}
	}
