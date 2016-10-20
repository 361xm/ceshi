<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class lianController extends Controller
{
    public function index(Request $request)
    {
    	$db = \DB::table('links');
     	$where = [];
	     	if($request->has('name')){
	             $name = $request->input('name');
	             $db->where('zi', 'like', "%{$name}%");//实现过滤控制器
	             $where['zi'] = $name;
	        // 模板显示
	        } 
	     $num = 0;
	     $list = $db->paginate(3);
        return view('admin.inter.link')->with(["list"=>$list,"where"=>$where,"num"=>$num]);   
    }

    //显示链接添加
  public function wang()
  {
  		return view("admin.inter.addlink");
  }

  //添加链接
  public function doqj(Request $request)
    {
        $data = $request->only('fu','zi','info');
        $db = \DB::table('links')->first();
        // dd($ob);
        if($request->input('fu')){
           $id = \DB::table('links')->insertGetId($data);
            if($id>0){
                return redirect("/interlinkage");
            } 
        }else{
                return redirect('/addinter');
        }
    }

    //执行删除
        public function destroy(Request $request,$id)
    {
        //1 执行删除 
        $data = \DB::table('links')->where('id',$id)->delete();//删除制定的id
        \DB::table('links')->where('id',$id)->delete();//删除类下面的商品
        return redirect('/interlinkage');

    }

    //执行修改
      public function shaqj(Request $request,$id)
      {
          $data = $request->only("fu","zi","info");
          if(!empty($request->input('fu'))){

          $da=\DB::table('links')->where('id',$id)->update($data);
          
          return redirect('/interlinkage');
        }
      }


}
