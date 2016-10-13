<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;

	class LoginController extends Controller
	{
		public function login()
		{
			return view('home/login');
		
		}

		//2 执行登录 
    public function dologin(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        // dd($username);
        $ob = \DB::table('user')->where("username",$username)->first();
        // dd($ob);
        if($ob){
            //3 密码
            if($ob->password==$password){
                //31写入session
                $a = session()->set("adminuser",$ob);
                // dd($a);
                //32跳转到后台首页
                $list = \DB::table('types')->get();
                return view("web",['list'=>$list]);
            }
            return back()->with("mag","用户或密码错误");
        }
        return back()->with("mag","用户或密码错误");
    }
        //4 执行退出
    public function logout()
    {
        //忘记session
        session()->forget("adminuser");
        //重定向
        return view("home/login");
    }

    //忘记密码
    public function forgetPasswd()
    {
        return view('home/forgetPasswd');
    }
    //忘记密码的原始信息
    public function doForgetPasswd(Request $request)
    {
        $phone = $request->input('phone');
        // $email = $request->input('email');
        // dd($phone);
        $db = \DB::table('user')->first();
        // dd($db);
        if($db){
            if($db->phone==$phone){
                   return view('home/editPasswd');
                }
                return back()->with("mbg","手机号或者Email错误");
            }
            return back()->with("mbg","手机号或者Email错误");
        }


    //修改密码
     public function editPasswd()
    {
        
        return view('home/editPasswd');
    }
}
