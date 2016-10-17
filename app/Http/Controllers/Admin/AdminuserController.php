<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminuserController extends Controller
{
	//查询信息
	public function index(Request $request)
	{
		$db = \DB::table('admin');
        $where = [];
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('adminname', 'like', "%{$name}%");//实现过滤控制器
            $where['adminname'] = $name;
         // 模板显示
        } 
        $num=0;
        $list = $db->paginate(3);
        return view("admin.adminUser.user")->with(['list'=>$list,"where"=>$where,"num"=>$num]);
	}
	// 删除管理员
	public function destroy($id)
	{
		\DB::table('admin')->where('id',$id)->delete();
		return redirect('/Admin');
	}

    // 执行修改 
    public function update(Request $request,$id)
    {
    	$data = $request->only("adminname","password","repassword");
    	// $adminname = $request->input('adminname');
    	// dd($adminname);
    	// $password = $request->input('password');
    	// $repassword = $request->input('repassword');
    	// dd($data);
        if(!empty($request->input('adminname'))){
    		// return 1;
    		\DB::table('admin')->where('id',$id)->update($data);
    		return redirect('/Admin');
    	}
	}
}
