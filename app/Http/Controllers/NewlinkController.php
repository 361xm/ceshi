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
			$db = \DB::table('goods');
			$where = [];
			$list = $db->paginate(40);
			// dd($list);
			return view('home/shangpin')->with(['list'=>$list,'where'=>$where]);
		}
		public function ShopList($id)
		{
			// $sess = Session()->all();
			// dd($sess);
			$list = \DB::table('goods')->where('id',$id)->get();
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
