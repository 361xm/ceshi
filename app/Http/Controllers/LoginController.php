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
                session()->set("adminuser",$ob);
                //32跳转到后台首页
                return view("/home/link");
            }
            return back()->with("msg","用户或密码错误");
        }
        return back()->with("msg","用户或密码错误");
    }
	}
