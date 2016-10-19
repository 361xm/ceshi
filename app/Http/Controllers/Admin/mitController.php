<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class mitController extends Controller
{
	//查看评论信息
   	public function index(Request $request)
    {
    	$db = \DB::table('replay');
     	$where = [];
	     	if($request->has('name')){
	             $name = $request->input('name');
	             $db->where('content', 'like', "%{$name}%");//实现过滤控制器
	             $where['content'] = $name;
	        // 模板显示
	        } 
	     $num = 0;
	     $list = $db->paginate(10);
         return view('admin.type.comment')->with(["list"=>$list,"where"=>$where,"num"=>$num]);   
    }

     public function destroy($id)
    {
        //1 执行删除 
        $data = \DB::table('replay')->where('id',$id)->delete();//删除制定的id
        //2 删除后执行跳转 
        // dd($data);
         return redirect('/ment');

    }
}
