<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class shopController extends Controller
{
     public function index(Request $request)
     {
        // 获得一个连接对象
     	$db = \DB::table('types');
     	$where = [];
     	if($request->has('name')){
             $name = $request->input('name');
             $db->where('classname', 'like', "%{$name}%");//实现过滤控制器
             $where['name'] = $name;

        // 模板显示
        } 
         $list = $db->paginate(10);
         $num = 1;
         view()->share('list', $list);
         return view("admin.type.shop")->with(["list"=>$list,"where"=>$where,"num"=>$num]);
         // 数据分页"
        
     }
}
