<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
   public function shop (Request $request)
     {
        // 获得一个连接对象
     	$db = \DB::table('goods');
     	$where = [];
     	if($request->has('name')){
             $name = $request->input('name');
             $db->where('goodsname', 'like', "%{$name}%");//实现过滤控制器
             $where['name'] = $name;
        // 模板显示
        } 
         $list = $db->paginate(1);
         return view("admin.type.shopList")->with(["list"=>$list,"where"=>$where]);
         // 数据分页
        
     }
}
