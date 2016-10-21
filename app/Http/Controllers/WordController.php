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

            $wan=\DB::table('links')->get();
            return view("/web")->with(['list'=>$list,"data"=>$data,'configs'=>$configs,'wan'=>$wan]);
    		}
	    }
	}

    public function del(Request $request)
    {
        $did = $request->did;
        \DB::table('gouwche')->where('id',$did)->delete();
        return "删除成功";
    }
    public function shan(Request $request)
    {
        $did = $request->did;
        \DB::table('details')->where('id',$did)->delete();
        return '删除成功';
    }
    // 结算
    public function jiesuan(Reuqest $request)
    {  
        return $request->prices;
    }


    public function index(Request $request)
    {
        $db = \DB::table('details');
        $where = [];
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('id', 'like', "%{$name}%");//实现过滤控制器
            $where['id'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(10);
        $num = 0;
       // $status=\DB::table('details')->where('status','=','0')->pluck('status');
        $status=\DB::table('details')->where('status','0')->get();
        // dd($status);
        return view("admin.type.order")->with(["list"=>$list,"where"=>$where,"num"=>$num])->with(['status'=>$status]);
    }
 
    public function index1(Request $request)
    {
        $db = \DB::table('details');
        $where = [];
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('id', 'like', "%{$name}%");//实现过滤控制器
            $where['id'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(10);
        $num = 0;
       // $status=\DB::table('details')->where('status','=','0')->pluck('status');
        $status=\DB::table('details')->where('status','1')->get();
        // dd($status);
        return view("admin.type.order1")->with(["list"=>$list,"where"=>$where,"num"=>$num,"status"=>$status]);
    }

    public function index2(Request $request)
    {
        $db = \DB::table('details');
        $where = [];
        if($request->has('name')){
            $name = $request->input('name');
            $db->where('id', 'like', "%{$name}%");//实现过滤控制器
            $where['id'] = $name;
         // 模板显示
        } 
        $list = $db->paginate(10);
        $num = 0;
       // $status=\DB::table('details')->where('status','=','0')->pluck('status');
        $status=\DB::table('details')->where('status','=','2')->get();
        return view("admin.type.order2")->with(["list"=>$list,"where"=>$where,"num"=>$num,"status"=>$status]);
    }

    public function edit(Request $request,$id)
    {
        //1 执行删除 
        $data = \DB::table('details')->where('id',$id)->delete();//删除制定的id

        //删除后执行跳转 
        $db = \DB::table('details');
        $where = [];
            if($request->has('name')){
                 $name = $request->input('name');
                 $db->where('id', 'like', "%{$name}%");//实现过滤控制器
                 $where['id'] = $name;
            // 模板显示
            } 
         $list = $db->paginate(10);
         return redirect('type/order')->with(['where'=>$where,'$list'=>$list]);

    }


        public function edit1(Request $request,$id)
            {
                //1 执行删除 
                $data = \DB::table('details')->where('id',$id)->delete();//删除制定的id

                //删除后执行跳转 
                $db = \DB::table('details');
                $where = [];
                    if($request->has('name')){
                         $name = $request->input('name');
                         $db->where('id', 'like', "%{$name}%");//实现过滤控制器
                         $where['id'] = $name;
                    // 模板显示
                    } 
                 $list = $db->paginate(10);
                 return redirect('type/ordera')->with(['where'=>$where,'$list'=>$list]);

            }

            public function edit2(Request $request,$id)
                {
                    //1 执行删除 
                    $data = \DB::table('details')->where('id',$id)->delete();//删除制定的id

                    //删除后执行跳转 
                    $db = \DB::table('details');
                    $where = [];
                        if($request->has('name')){
                             $name = $request->input('name');
                             $db->where('id', 'like', "%{$name}%");//实现过滤控制器
                             $where['id'] = $name;
                        // 模板显示
                        } 
                     $list = $db->paginate(10);
                     return redirect('type/orderb')->with(['where'=>$where,'$list'=>$list]);

                }
    public function huo(Request $request,$id)
    {
         //$data = $request->only("status");
        $db = \DB::table('details');
        $where = [];
            if($request->has('name')){
                 $name = $request->input('name');
                 $db->where('id', 'like', "%{$name}%");//实现过滤控制器
                 $where['id'] = $name;
            // 模板显示
            } 
         $list = $db->paginate(10);
         $aa=\DB::table('details')
            ->where('id', $id)
            ->update(['status'=>1]);

     //  $data = \DB::table('details')->get();
       $data=\DB::table('details')->where('status','=','0')->get();
       //dd($data);

         return view('admin.type.order')->with('status',$data)->with(["list"=>$list,"where"=>$where]);
    }

    
    public function huoqq(Request $request,$id)
    {
         //$data = $request->only("status");
        $db = \DB::table('details');
        $where = [];
            if($request->has('name')){
                 $name = $request->input('name');
                 $db->where('id', 'like', "%{$name}%");//实现过滤控制器
                 $where['id'] = $name;
            // 模板显示
            } 
         $list = $db->paginate(10);
         $aa=\DB::table('details')
            ->where('id', $id)
            ->update(['status'=>2]);

        $data=\DB::table('details')->where('status','=','1')->get();
         return view('admin.type.order1')->with('status',$data)->with(["list"=>$list,"where"=>$where]);
    }

    public function huojj(Request $request,$id)
    {
         //$data = $request->only("status");
        $db = \DB::table('details');
        $where = [];
            if($request->has('name')){
                 $name = $request->input('name');
                 $db->where('id', 'like', "%{$name}%");//实现过滤控制器
                 $where['id'] = $name;
            // 模板显示
            } 
         $list = $db->paginate(10);
         $aa=\DB::table('details')
            ->where('id', $id)
            ->update(['status'=>'1']);

        $data=\DB::table('details')->where('status','=','2')->get();
         return view('admin.type.order2')->with('status',$data)->with(["list"=>$list,"where"=>$where]);
    }

    public function doshanchu(Request $request)
    {
      $did = $request->did;
     
      \DB::table('details')->where('id',$did)->delete();
      return '删除成功';
    }
    public function dosearch(Request $request)
    {   $name = $request->input('name');
        $danzi = \DB::table('details')->where('id','like','%{$name}%')->get();
        $where = [];
           
        $configs = \DB::table('config')->get(); 
         $wan=\DB::table('links')->get();
        return view('home.center')->with(['where'=>$where,'danzi'=>$danzi,'configs'=>$configs,'wan'=>$wan]);
    }
}
