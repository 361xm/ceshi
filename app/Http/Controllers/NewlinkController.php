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

			$configs = \DB::table('config')->get();
			return view('home/shangpin')->with(['list'=>$list,'where'=>$where,'configs'=>$configs,"wan"=>$wan]);
		}
		public function ShopList($id)
		{
			// $sess = Session()->all();
			// dd($sess);
			$list = \DB::table('goods')->where('id',$id)->get();
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->where('gid',$id)->get();
			// dd($data);
			$configs = \DB::table('config')->get();

			$wan=\DB::table("links")->get();
			return view('home/ShopList')->with(['list'=>$list,'data'=>$data,'configs'=>$configs,'wan'=>$wan]);

			// dd($data);
		}

		public function Shoping()

		{
			$wan=\DB::table("links")->get();
			$configs = \DB::table('config')->get();
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->get();
			return view('home/Shoping')->with(['configs'=>$configs,'data'=>$data,"wan"=>$wan]);
		}

		public function center(Request $request)
		{	$id = session('adminuser')->id;
			$danzi = \DB::table('details')->where('uid',$id)->get();
            if($request->has('name')){
            	 $name = $request->input('name');
            	 $danzi = \DB::table('details')->where('uid',$id)->where('id','=',$name)->get();
            } 
			$wan=\DB::table("links")->get();
	
			
			$configs = \DB::table('config')->get();
			return view('home/center')->with(['configs'=>$configs,'danzi'=>$danzi,"wan"=>$wan]);

		}


		public function edit()
		{


			$wan=\DB::table("links")->get();
			$configs = \DB::table('config')->get();
			return view('home/edit')->with(['configs'=>$configs,"wan"=>$wan]);

		}

		//添加收货人地址信息
		public function doAdd(Request $request)
		{
			// $data = $request->only('username','sex','email','area','sheng','shi','qu','phone');
			$username = $request->input('username');
			$sex = $request->input('sex');
			$email = $request->input('email');
			$area = $request->input('area');
			$sheng = $request->input('sheng');
			$shi = $request->input('shi');
			$qu = $request->input('qu');
			$phone = $request->input('phone');
			$id = Session('adminuser')->id;
			$areas = $area.$sheng.$shi.$qu;
			// dd($phone); 
			$uid = \DB::table('user_c')->pluck('uid');
			
			$array = array();
			foreach($uid as $key=>$value){
				$array[] = $value;	
			}
			if(!in_array($id,$array)){
				\DB::table('user_c')->insert(['uid'=>$id,'username'=>$username,'sex'=>$sex,'email'=>$email,'area'=>$areas,'phone'=>$phone]);
				return redirect('/doCenter');
				}else{
					$msg = '不能重复添加';
					$configs = \DB::table('config')->get();
					return view('/edit')->with(['msg'=>$img,'configs'=>$configs]);
				}
		}

		public function doCenter()
		{	
			$configs = \DB::table('config')->get();
			
			// return 1;
			$id = session('adminuser')->id;
			
			$uid = \DB::table('user_c')->pluck('uid');
			// dd($uid);
			$data = \DB::table('user_c')->where('uid',$id)->get();

			$wan=\DB::table("links")->get();

			$array = array();
			foreach($uid as $key=>$value){
				$array[] = $value;	
			}
			if(in_array($id,$array)){
				$configs = \DB::table('config')->get();

					return view('home/doEdit')->with(['data'=>$data,'configs'=>$configs,'wan'=>$wan]);
				}else{
					return view('home.doEdit')->with(['configs'=>$configs,'data'=>$data,'wan'=>$wan]);

					return view('home/doEdit')->with(['data'=>$data,'configs'=>$configs,'wan'=>$wan]);
				}
					return view('home.doEdit')->with(['configs'=>$configs,'data'=>$data,'wan'=>$wan]);
			
		}
		public function doEdit(Request $request)
		{
			$id = session('adminuser')->id;
			// dd($id);
			$list = $request->only('username','sex','email','area','phone');
			\DB::table('user_c')->where('uid',$id)->update($list);
			return redirect('/doCenter');
		}
	}
