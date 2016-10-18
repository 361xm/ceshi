<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeListController extends Controller
{	
	// 添加商品
	public function create(Request $request,$id)
	{	
		$goodsname = $request->input('goodsname');
		$goodsprice = $request->input('goodsprice');
		$stock = $request->input('stock');
		$goodsdescript = $request->input('goodsdescript');
		$goodsImage = $request->file('goodsImage');
		// 上传
		 if(!empty($goodsname) && !empty($goodsprice) && !empty($goodsImage)){
        //判断是否有上传
	        if($request->hasFile("goodsImage")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("goodsImage");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $goodsImage = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	            $path='0'.'-'.$id;
	            $data = \DB::table('types')->insert(['pid'=>$id,'path'=>$path,'stock'=>$stock,'goodsname'=>$goodsname,'goodsprice'=>$goodsprice,'goodsdescript'=>$goodsdescript,'goodsImage'=>$goodsImage]);
	            $newdata = \DB::table('goods')->insert(['tid'=>$id,'stock'=>$stock,'goodsname'=>$goodsname,'goodsprice'=>$goodsprice,'goodsdescript'=>$goodsdescript,'goodsImage'=>$goodsImage]);
	            $db = \DB::table('types')->where('pid',$id);
		        $where = [];
		            if($request->has('goodsname')){
		                 $name = $request->input('goodssname');
		                 $db->where('goodsname', 'like', "%{$name}%");//实现过滤控制器
		                 $where['goodsname'] = $name;
		            // 模板显示
		            } 
		            $num = 0;
		         $list = $db->paginate(10);
		         return \Redirect::to('types')->with(["list"=>$list,"where"=>$where,"num"=>$num]); 

	        }
	        return "请填写完整";
		
			}
		}
	// 删除商品
	public function delgood($id)
	{	
		\DB::table('goods')->where('id',$id)->delete();
		return redirect('types');
	}
	// 修改商品
	public function update(Request $request,$id)
	{	
		$goodsname = $request->input('goodsname');
		$goodsprice = $request->input('goodsprice');
		$stock = $request->input('stock');
		$goodsdescript = $request->input('goodsdescript');
		$goodsImage = $request->file('goodsImage');
		// 上传
		 if(!empty($goodsname) && !empty($goodsprice) && !empty($goodsImage)){
        //判断是否有上传
	        if($request->hasFile("goodsImage")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("goodsImage");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $goodsImage = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	            $data = \DB::table('goods')->where('id',$id)->update(['stock'=>$stock,'goodsname'=>$goodsname,'goodsprice'=>$goodsprice,'goodsdescript'=>$goodsdescript,'goodsImage'=>$goodsImage]);
	            $db = \DB::table('goods')->where('tid',$id);
		        $where = [];
		            if($request->has('goodsname')){
		                 $name = $request->input('goodssname');
		                 $db->where('goodsname', 'like', "%{$name}%");//实现过滤控制器
		                 $where['goodsname'] = $name;
		            // 模板显示
		            } 
		            $num = 0;
		         $list = $db->paginate(10);
		         return \Redirect::to('types')->with(["list"=>$list,"where"=>$where,"num"=>$num]); 

	        }
	        return "请填写完整";
		
			}
	}
}