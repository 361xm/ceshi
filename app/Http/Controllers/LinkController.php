<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	class LinkController extends Controller
	{
		public function link()
		{
			$configs = \DB::table('config')->get();
			$wan=\DB::table("links")->get();
			return view('home/link',["wan"=>$wan,'configs'=>$configs]);
		}
	}