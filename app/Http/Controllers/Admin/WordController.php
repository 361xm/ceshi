<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
   	  public function index(Request $request)
      {
        $db = \DB::table('orders');
        $where = [];
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('id', 'like', "%{$name}%");//实现过滤控制器
            $where['id'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(3);
        $num = 0;
        return view("admin.type.order")->with(["list"=>$list,"where"=>$where,"num"=>$num]);
        // 数据分页
      }
}
