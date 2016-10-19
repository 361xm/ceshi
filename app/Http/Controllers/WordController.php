<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WordController extends Controller
{
    public function zhandian(Request $request)
    {
    	$data = $request->only('title','key','wzimage','open');
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
    		$configs = \DB::table('config')->update($data);
            $list = \DB::select("select *,concat(path,'-',id) as npath from types order by npath");
            $data = \DB::table('goods')->get();
            $configs = \DB::table('config')->get();
            return view("/web")->with(['list'=>$list,"data"=>$data,'configs'=>$configs]);
    		}
	    }
	}

    public function del(Request $request)
    {
        $did = $request->did;
        \DB::table('gouwche')->where('id',$did)->delete();
        return "删除成功";
    }
}
