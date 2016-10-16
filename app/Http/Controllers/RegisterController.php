<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{   
    // 前台登录Ajax无刷新验证
    public function register(Request $request)
    {
        $data = $request->only("phone","username","password","repassword");
        $mycode = Session()->get('code');
       // dd($mycode);
       if($mycode!=$request->input('code')){
                return back()->with("msg","验证码错误");//后退
                // session()->flash("msg","验证码错误");//写入错误信息
                // return redirect("admin/login");//重定向

            }
		$phone = $request->input("phone");
		$username = $request->input("username");
		$password = $request->input("password");
		$repassword = $request->input("repassword");
		// dd($repassword);
        $ob = \DB::table('user');
        // dd($ob);
        if($phone==$ob->phone || $username==$ob->username || $password===$repassword){
        	\DB::table('user')->insertGetId($data);
        	return redirect("/login");
        }else{
        	echo '密码不一致';
        }
        

    }

    // 后台用户模块添加用户
    public function addUser(Request $request)
    {
        $data = $request->only("phone","username","password");
        $username = $request->input('username');
        $phone = $request->input('phone');
        $password = $request->input('password');
        // 从数据库里面进行验证
        $ob = \DB::table('user')->where('username',$username)->orwhere("phone",$phone)->get();
        if($ob->phone){
            return "y";
        }else{
            return "n";
        }
    }

    //3 验证码
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session()->flash('code', $phrase);

        //生成图片
        // header("Cache-Control: no-cache, must-revalidate");
        // header('Content-Type: image/jpeg');
        // $builder->output();
        // exit;
        return response($builder->output())->header('Content-Type','image/jpeg');
    }

    //4 执行退出
    public function logout()
    {
        //忘记session
        session()->forget("adminuser");
        //重定向
        return redirect("admin/login");
    }
}
