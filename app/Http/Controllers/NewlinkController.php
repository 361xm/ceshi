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
			$data = \DB::table('images')->join('goods','images.gid','=','goods.id')->where('gid',$id)->get();
			// dd($data);
			return view('home/ShopList')->with(['list'=>$list,'data'=>$data]);
			// dd($data);
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
				\DB::table('user_c')->insert(['uid'=>$id,'username'=>$username,'sex'=>$sex,'email'=>$email,'area'=>$areas]);
				return redirect('/doCenter');
				}else{
					$msg = '不能重复添加';
					return view('/edit')->with(['msg'=>$img]);
				}
		}

		public function doCenter()
		{	
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
					return view('home/doEdit')->with(['data'=>$data]);
				}else{
					return '失败';
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
