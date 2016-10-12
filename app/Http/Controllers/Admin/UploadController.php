<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
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
    	$data = $request->only("gid","decipt","classname","classimage");
        if(!empty($request->input('decipt')) && !empty($request->input("classname")) && !empty($request->file('classimage'))){
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
        }       $newData=\DB::table('types')->where('classname',$request->input('classname'))->first();
		          // 判断数据库中是否有这个大类
                    if(!$newData){
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
                     $look = "添加成功";
		             return view('admin.type.addType')->with(["list"=>$list,"where"=>$where,"num"=>$num,"look"=>$look]);
		         }else{
		             return "添加失败";
		         }
             }else{
                $look = "您已经有这个商品栏了~~";
                return view('admin/type/addType')->with(['look'=>$look]);
             }
         }else{
            $look = "您还没填写完吆~~，请务必添加...";
            return view('admin/type/addType')->with(['look'=>$look]);
         }
	}
        

    //5 修改表单
    public function edit($id)
    {
       return view("admin/type/upDataShop");

    }


    //6 执行修改 
    public function update(REQUEST $request,$id)
    {
         return "执行修改";
       //  1 接收表单提交的值 
       $data = $request->only("name","sex","age","classid");

       // //2 执行修改 
       \DB::table("user")->where("id",$id)->update($data);
       // //3 跳
       return redirect("/stu");
    }


    //7 执行删除 
    public function destroy(Request $request,$id)
    {
        //1 执行删除 
        $data = \DB::table('types')->where('id',$id)->delete();//删除制定的id

        //2 删除后执行跳转 
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
         return Redirect::to('file')->with(["list"=>$list,"where"=>$where,"num"=>$num]); 

    }

    public function put ()
    {
    	 return view("admin/type/addType");
    }
 }    
