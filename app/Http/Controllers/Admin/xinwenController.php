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

       // dd($request->input('name'));

    	$db = \DB::table('press');
     	$where = [];
	     	if($request->has('name')){
	             $name = $request->input('name');
	             $db->where('smallhead','like',"%{$name}%");//实现过滤控制器
	             $where['smallhead'] = $name;
	        // 模板显示
	        } 

         $num = 0;
	     $list = $db->paginate(3);
         
         return view('admin.xinwen.news')->with(["list"=>$list,"where"=>$where,"num"=>$num]);
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
    }


    //执行删除 
    public function destroy(Request $request,$id)
    {
        //1 执行删除 
        $data = \DB::table('press')->where('id',$id)->delete();//删除制定的id

        //2 删除后执行跳转 
        $db = \DB::table('press');
        $where = [];
            if($request->has('smallhead')){
                 $name = $request->input('smallhead');
                 $db->where('smallhead', 'like', "%{$name}%");//实现过滤控制器
                 $where['smallhead'] = $name;
            // 模板显示
            } 
         $list = $db->paginate(10);
         return redirect('xinwen/press')->with(["list"=>$list,"where"=>$where]);

    }

    //修改页面显示
    public function edit($id)
    {
        $data = \DB::table('press')->where('id',$id);
        $list = $data->paginate(10); 
        return view("admin/xinwen/updateWen")->with(['id'=>$id,'list'=>$list]);
    }

    //执行修改
    public function update(REQUEST $request,$id)
    {

        $data = $request->only("bithead","smallhead","describe","img");

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

            $id = \DB::table("press")->where("id",$id)->update($data);
            
            return redirect('xinwen/press');
    }
}
