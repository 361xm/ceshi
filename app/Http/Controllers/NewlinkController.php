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
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->get();
			$configs = \DB::table('config')->get();
			return view('home/ShopList')->with(['list'=>$list,'data'=>$data,'config'=>$configs]);
			// dd($data);
		}
		public function Shoping()
		{	$configs = \DB::table('config')->get();
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->get();
			return view('home/Shoping')->with(['configs',$configs,'data',$data]);
			
		}

		public function center()
		{	$configs = \DB::table('config')->get();
			return view('home/center')->with('configs',$configs);
		}
		public function edit()
		{
			return view('home/edit');
		}
	}
