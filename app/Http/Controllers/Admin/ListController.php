<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ListController extends Controller
{
   public function shop(Request $request)
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
         $list = $db->paginate(10);
         $num = 1;
         return view("admin.type.shopList")->with(["list"=>$list,"where"=>$where,"num"=>$num]);
         // 数据分页        
     }

    public function index2(Request $request,$id)
    {
        $db = \DB::table('goods')->orwhere("tid",$id);
        $where = [];
        if($request->has('name')){
             $name = $request->input('name');
             $db->where('goodsname', 'like', "%{$name}%");//实现过滤控制器
             $where['name'] = $name;
        // 模板显示
        } 
         $list = $db->paginate(10);
         $num = 1;
        return view("admin.type.shopList")->with(["list"=>$list,"where"=>$where,"num"=>$num]);
    }

}
