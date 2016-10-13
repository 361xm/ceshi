<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class xinwenController extends Controller
{
	//查询数据库
    public function line(Request $request)
    {
    	$db = \DB::table('press');
     	$where = [];
	     	if($request->has('smallhead')){
	             $name = $request->input('smallhead');
	             $db->where('smallhead','like',"%{$name}%");//实现过滤控制器
	             $where['smallhead'] = $name;
	        // 模板显示
	        } 
	     $list = $db->paginate(2);
         return view('admin.xinwen.news')->with(["list"=>$list,"where"=>$where]);
    }

    //添加新闻
    public function title()
    {
    	return view('admin.xinwen.addWen');
    }

    //执行添加
    public function addtitle(Request $request)
    {
    	$data = $request->only("bithead","smallhead","img","describe","time");
        //判断是否有上传
        if($request->hasFile("img")){
            //获取上传信息,$file是一个uploadfile的对象 
            $file = $request->file("img");
            //确认上传的文件是否成功
            if($file->isValid()){
                $picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $data['img'] = $filename;
                $file->move("admins/upload/",$filename);
            }
        }
		         //2 写入数据库
		 $id = \DB::table("press")->insertGetId($data);//执行添加返回自增ID号
		         //3 判断是否添加成功
		         if($id>0){
		            return redirect('xinwen/press');
		         }else{
		             return "添加失败";
		         }
    	// return view('admin.xinwen.addWen');
    }


    //执行删除 
    public function destroy()
    {
        // //1 执行删除 
        // $data = \DB::table('press')->where('id',$id)->delete();//删除制定的id

        // //2 删除后执行跳转 
        // $db = \DB::table('press');
        
        //return redirect('xinwen/press'); 

        return 111;

    }
}
