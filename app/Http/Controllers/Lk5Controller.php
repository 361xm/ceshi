<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class Lk5Controller extends Controller
	{
		public function lk5()
		{
			$configs = \DB::table('config')->get();
			$wan=\DB::table("links")->get();
			return view('home/lk5',["wan"=>$wan,'configs'=>$configs]);
		
		}
		public function lk6()
		{
			$configs = \DB::table('config')->get();
			$wan=\DB::table("links")->get();
			return view('home/link',["wan"=>$wan,'configs'=>$configs]);
		
		}
	}
