<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;


class UploadController extends Controller
{
	 public function doUplode()
    {
    	return 1111;//上传图片
    }
    //1  查看所有信息
     public function index(Request $request)
    {
    	$db = \DB::table('types');
     	$where = [];
	     	if($request->has('classname')){
	             $name = $request->input('classname');
	             $db->where('classname', 'like', "%{$name}%");//实现过滤控制器
	             $where['classname'] = $name;
	        // 模板显示
	        } 
	        $num = 0;
	     $list = $db->paginate(10);
         return view('admin.type.shop')->with(["list"=>$list,"where"=>$where,"num"=>$num]);   
    }
     //2 查看单条学生信息
//     public function show($id)
//     {
//         return "查看学生信息Id".$id;
//     }


//     //3 添加表单
//     public function create()
//     {
// //         return "添加表单";
//         //1 显示添加表单
//         return view("admin.user.add");


//     }


    //4 执行添加
    public function store(REQUEST $request)
    {
    	$data = $request->only("decipt","classname","classimage");
        //判断是否有上传
        if($request->hasFile("classimage")){
            //获取上传信息,$file是一个uploadfile的对象 
            $file = $request->file("classimage");
            //确认上传的文件是否成功
            if($file->isValid()){
                $picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $data['classimage'] = $filename;
                $file->move("admins/upload/",$filename);
            }
        }
		         //2 写入数据库
		         $id = \DB::table("types")->insertGetId($data);//执行添加返回自增ID号
		         //3 判断是否添加成功
		         if($id>0){
		         	$db = \DB::table('types');
		         	$where = [];
				     	if($request->has('classname')){
				             $name = $request->input('classname');
				             $db->where('classname', 'like', "%{$name}%");//实现过滤控制器
				             $where['classname'] = $name;
				        // 模板显示
				        } 
				        $num = 0;
				     $list = $db->paginate(10);
		             return view('admin.type.shop')->with(["list"=>$list,"where"=>$where,"num"=>$num]);
		         }else{
		             return "添加失败";
		         }
		}
        

    //5 修改表单
    public function edit()
    {
        return "修改表单";
       //1 获得需要修改的数据
       //$stu = \DB::table("types")->where('id',$id)->first();//获得单条信息
       // dd($stu);

       //2 加载修改表单
       //return view("admin/type/updataShop",['vo'=>$list]);


    }


//     //6 执行修改 
//     public function update(REQUEST $request,$id)
//     {
//          return "执行修改";
//         //1 接收表单提交的值 
// //        $data = $request->only("name","sex","age","classid");
// //
// //        //2 执行修改 
// //        \DB::table("user")->where("id",$id)->update($data);
// //        //3 跳
// //        return redirect("/stu");
//     }


    //7 执行删除 
    public function destroy($id)
    {
		// return "执行删除".$id;
        //1 执行删除 
        \DB::table('types')->where('id',$id)->delete();//删除制定的id
        //2 删除后执行跳转 
        return redirect("admin/type/shop");

    }

    public function put ()
    {
    	 return view("admin/type/addType");
    }
 }    
