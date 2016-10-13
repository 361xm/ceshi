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
			return view('home/xinwen');
		}

		public function page()
		{
			return view('home/ganchao');
		}

		public function product()
		{
			$db = \DB::table('product');
			$where = [];
			$list = $db->paginate(1);
			// dd($list);
			return view('home/shangpin')->with(['list'=>$list,'where'=>$where]);
		}
		public function ShopList()
		{
			$list = \DB::table('product')->get();
			return view('home/ShopList')->with(['list'=>$list]);
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
