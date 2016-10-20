<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class zhanController extends Controller
{
     public function zhandian(Request $request)
    {
    	$data = $request->only("title","key","wzimage","open");

        //判断是否有上传
        if($request->hasFile("wzimage")){
            //获取上传信息,$file是一个uploadfile的对象 
            $file = $request->file("wzimage");
            //确认上传的文件是否成功
            if($file->isValid()){
                $picname = $file->getClientOriginalName(); //获取上传原文件名
                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
                //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                $data['wzimage'] = $filename;
                $file->move("admins/upload/",$filename);
            }
        }
		         //2 写入数据库
		  \DB::table("config")->insertGetId($data);//执行添加返回自增ID号
		         //3 判断是否添加成功

        return redirect("/config");
		 
    }
}
