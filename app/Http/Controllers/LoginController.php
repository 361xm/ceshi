<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	use APP\Http\Requests;

	class LoginController extends Controller
	{
		public function login()
		{
            $wan=\DB::table("links")->get();
			return view('home/login',["wan"=>$wan]);
		
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
                $id = session('adminuser')->id;
                $gouwche = \DB::table('gouwche')->where('uid',$id)->first();
                session()->set('gouwche',$gouwche);
                // dd($a);
                //32跳转到后台首页
          
                return redirect('/');
            }
            return back()->with("mag","用户或密码错误");
        }
        return back()->with("mag","用户或密码错误");
    }
        //4 执行退出
    public function logout()
    {
        $wan=\DB::table("links")->get();
        //忘记session
        session()->forget("adminuser");
        //重定向

        $configs=\DB::table('config')->get();
        return view("home/login")->with(['configs'=>$configs,'wan'=>$wan]);
    }

    //忘记密码
    public function forgetPasswd()
    {   $configs = \DB::table('config')->get();
        $wan=\DB::table('links')->get();
        return view('home/forgetPasswd')->with(['configs'=>$configs,'wan'=>$wan]);
    }
    //忘记密码的原始信息
    public function doForgetPasswd(Request $request)
    {
        $mycode = Session()->get('code');
        // dd($mycode);
       if($mycode!=$request->input('code')){
        $configs = \DB::table('config')->get();
                return back()->with("msg","验证码错误");//后退
                // session()->flash("msg","验证码错误");//写入错误信息
                // return redirect("admin/login");//重定向

            }
        $username = $request->input('name');
        $phone = $request->input('phone');
        // dd($phone);
        $db = \DB::table('user')->where("username",$username)->first();
         

        if($db){
            if($db->phone==$phone){ 
                session()->flash('username',$db->id);
                $ob = $db->id; 
                $configs = \DB::table('config')->get();
                $wan=\DB::table('links')->get();
                    return view('home/editPasswd')->with(['ob'=>$ob,'configs'=>$configs,'wan'=>$wan]);
                }
                return back()->with("msg","手机号或者用户名不存在");
            }
            return back()->with("msg","手机号或者用户名不存在");
        }

    //执行修改密码
     public function doEditPasswd(Request $request)
    {   
        $id = session()->get('username');
        // dd($id);
        $data = $request->only('password','repassword');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        // dd($repasswd);
        if($password===$repassword){
            $ob = \DB::table('user')->where('id',$id)->update($data);
            $configs = \DB::table('config')->get();
            $wan=\DB::table('links')->get();
            return view('/home/login')->with(['configs'=>$configs,'wan'=>$wan]);
        }else{
            $mvg = "密码不一致";
            $configs = \DB::table('config')->get();
            $wan=\DB::table('links')->get();
             return view('/home/editPasswd')->with(["mvg"=>$mvg,'configs'=>$configs,'wan'=>$wan]);
        }
    }
}
