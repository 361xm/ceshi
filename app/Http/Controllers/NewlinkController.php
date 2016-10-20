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
			$configs = \DB::table('config')->get();
			return view('home/shangpin')->with(['list'=>$list,'where'=>$where,'configs'=>$configs]);
		}
		public function ShopList($id)
		{
			// $sess = Session()->all();
			// dd($sess);
			$list = \DB::table('goods')->where('id',$id)->get();
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->where('gid',$id)->get();
			// dd($data);
			$configs = \DB::table('config')->get();
			return view('home/ShopList')->with(['list'=>$list,'data'=>$data,'configs'=>$configs]);
			// dd($data);
		}

		public function Shoping()
		{	$configs = \DB::table('config')->get();
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->get();
			return view('home/Shoping')->with(['configs'=>$configs,'data'=>$data]);
			
		}

		public function center()
		{	
			$id = session('adminuser')->id;
			$danzi = \DB::table('details')->where('uid',$id)->get();
			$configs = \DB::table('config')->get();
			return view('home/center')->with(['configs'=>$configs,'danzi'=>$danzi]);
		}


		public function edit()
		{
			$configs = \DB::table('config')->get();
			return view('home/edit')->with(['configs'=>$configs]);
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
			// $uid = $data->id;
			// dd($id);
			$array = array();
			foreach($uid as $key=>$value){
				$array[] = $value;	
			}
			if(in_array($id,$array)){
				$configs = \DB::table('config')->get();
					return view('home/doEdit')->with(['data'=>$data,'configs'=>$configs]);
				}else{
					return view('home.doEdit')->with(['configs'=>$configs,'data'=>$data]);
				}
			
		}
		public function doEdit(Request $request)
		{
			$id = session('adminuser')->id;
			// dd($id);
			$list = $request->only('username','sex','email','area','phone');
			\DB::table('user_c')->where('uid',$id)->update($list);
			return redirect('/doCenter');
			// return 1;
		}
	}
