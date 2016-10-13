<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class NewlinkController extends Controller
	{
		public function newlink()
		{
			return view('home/newlink');
		}

		public function info()
		{
			$list=\DB::table("press")->get();

    		return view("home/xinwen",["list"=>$list]);
		}

		public function page()
		{
			return view('home/ganchao');
		}

		public function product()
		{
			return view('home/shangpin');
		}
		public function ShopList()
		{
			return view('home/ShopList');
		}
		public function Shoping()
		{
			return view('home/Shoping');
		}

		public function center()
		{
			return view('home/center');
		}
		public function edit()
		{
			return view('home/edit');
		}
	}
