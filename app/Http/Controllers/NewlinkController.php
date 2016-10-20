<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;
	
	class NewlinkController extends Controller
	{
		public function newlink()
		{
			$wan=\DB::table("links")->get();
			return view('home/newlink',["wan"=>$wan]);
		}

		public function link()
		{
			$wan=\DB::table("links")->get();
			$list=\DB::table("types")->get();
			$data = \DB::table('goods')->get();
			return view('/web',["wan"=>$wan,"list"=>$list,"data"=>$data]);
		}

		public function info()
		{
			$list=\DB::table("press")->get();
			$wan=\DB::table("links")->get();
    		return view("home/xinwen",["list"=>$list,"wan"=>$wan]);
		}

		public function page()
		{	
			$wan=\DB::table("links")->get();
			return view('home/ganchao')->with(["wan"=>$wan]);
		}

		public function product()
		{
			$db = \DB::table('goods');
			$where = [];
			$list = $db->paginate(40);
			$wan=\DB::table("links")->get();
			// dd($list);
			return view('home/shangpin')->with(['list'=>$list,'where'=>$where,"wan"=>$wan]);
		}
		public function ShopList($id)
		{
			// $sess = Session()->all();
			// dd($sess);
			$list = \DB::table('goods')->where('id',$id)->get();
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->get();
			return view('home/ShopList')->with(['list'=>$list,'data'=>$data]);
			// dd($data);
		}
		public function Shoping()
		{
			$wan=\DB::table("links")->get();
			return view('home/Shoping')->with(["wan"=>$wan]);
		}

		public function center()
		{
			$wan=\DB::table("links")->get();
			return view('home/center',["wan"=>$wan]);
		}
		public function edit()
		{
			$wan=\DB::table("links")->get();
			return view('home/edit',["wan"=>$wan]);
		}
	}
