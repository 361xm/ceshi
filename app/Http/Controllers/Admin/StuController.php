<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


	
 
class StuController extends Controller
{   
    public function doUplode()
    {
    	return 1111;//上传图片
    }
    //1  查看所有信息
     public function index(Request $request)
    {
    	// 获得一个连接对象
    	// return 111;
    	$db = \DB::table('user');
    	$where = [];
    	if($request->has('name')){
            $name = $request->input('name');
            $db->where('username', 'like', "%{$name}%");//实现过滤控制器
            $where['name'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(10);
        $num = 1;
        return view("admin.user.user")->with(["list"=>$list,"where"=>$where,"num"=>$num]);
        // 数据分页
        
    }
    //2 查看单条学生信息
    public function show($id)
    {
        return "查看学生信息Id".$id;
    }

    //3 添加表单
    public function create()
    {
//         return "添加表单";
        //1 显示添加表单
        return view("admin.user.add");

    }

    //4 执行添加
    public function store(REQUEST $request)
    {
//        return "1";
        // return "执行添加";
        //1 接收提交的数据 
        //对于任何一个请求都会触发一个request对象 
        // dd($request);//

        // 获得name的值
        // $data = $request->input('name');
        // 获得所有的请求提交的值 
//         $data = $request->all();
//         return $request;
        //获得指定的下标对应的值 
        $data = $request->only("phone","username","password");
        // dd($data);

        //2 写入数据库
        $id = \DB::table("user")->insertGetId($data);//执行添加返回自增ID号

        //3 判断是否添加成功
        if($id>0){
            $look="添加成功";
                sleep(2);
             return view("admin.user.add")->with(["look"=>$look]);;
        }else{
           $look= "添加失败";
           sleep(2);
           return view('admin.user.add')->with(["look"=>$look]);
           
        }
    }

    //5 修改表单
    public function edit($id)
    {
         return "修改表单".$id;
//        //1 获得需要修改的数据
//        $stu = \DB::table("user")->where('id',$id)->first();//获得单条信息
//        // dd($stu);
//
//        //2 加载修改表单
//        return view("user.edit",['vo'=>$list]);

    }

    //6 执行修改 
    public function update(REQUEST $request,$id)
    {
         return "执行修改";
        //1 接收表单提交的值 
//        $data = $request->only("name","sex","age","classid");
//
//        //2 执行修改 
//        \DB::table("user")->where("id",$id)->update($data);
//        //3 跳
//        return redirect("/stu");
    }

    //7 执行删除 
    public function destroy($id)
    {
//         return "执行删除".$id;
        //1 执行删除 
        \DB::table('user')->where('id',$id)->delete();//删除制定的id

        //2 删除后执行跳转 
        // return back();
        return redirect("/stu");


    }
}
