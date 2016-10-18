<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
   	  public function zhandian(Request $request)
    {
    	// $open=$request->input('open');
    	$data = $request->only("title","key","wzimage",'open');
        //判断是否有上传
        // dd($request->hasFile('wzimage'));
        // var_dump($request->hasFile("wzimage"));
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
            //2 写入数据库
		 		$id = \DB::table("config")->update($data);//执行添加返回自增ID号
		 		$list = \DB::select("select *,concat(path,'-',id) as npath from types order by npath");
    			$data = \DB::table('goods')->get();
		        $configs = \DB::table('config')->get();
		         //3 判断是否添加成功
		         return view('web')->with(['configs'=>$configs,'data'=>$data,'list'=>$list]);
        }       
        		return "错误";
		        
    }
}
