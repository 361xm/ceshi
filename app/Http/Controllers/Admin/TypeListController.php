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
		$image = $request->file('image');
		$image1 = $request->file('image1');
		$image2 = $request->file('image2');
		$image3 = $request->file('image3');
		$image4 = $request->file('image4');
		$image5 = $request->file('image5');
		$image6 = $request->file('image6');
		$image_c = $request->file('image_c');
		$image_c1 = $request->file('image_c1');
		$image_c2 = $request->file('image_c2');
		$sex = $request->input('sex');
		// dd($sex);
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
	            if($request->hasFile("image")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image1")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image1");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image1 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image2")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image2");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image2 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image3")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image3");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image3 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image4")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image4");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image4 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image5")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image5");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image5 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image_c")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image_c");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image_c = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image_c1")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image_c1");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image_c1 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	        if($request->hasFile("image_c2")){
	            //获取上传信息,$file是一个uploadfile的对象 
	            $file = $request->file("image_c2");
	            //确认上传的文件是否成功
	            if($file->isValid()){
	                $picname = $file->getClientOriginalName(); //获取上传原文件名
	                $ext = $file->getClientOriginalExtension(); //获取上传文件名的后缀名
	                //执行移动上传文件
	                $filename = time().rand(1000,9999).".".$ext;
	                $image_c2 = $filename;
	                $file->move("admins/upload/",$filename);
	            }
	        }
	         	$img = \DB::table('images')->get();
	         	// dd($img);
	         	$god = \DB::table('goods');
	            $path='0'.'-'.$id;
	            $data = \DB::table('types')->insert(['pid'=>$id,'path'=>$path,'stock'=>$stock,'goodsname'=>$goodsname,'goodsprice'=>$goodsprice,'goodsdescript'=>$goodsdescript,'goodsImage'=>$goodsImage]);
	            $newdata = \DB::table('goods')->insertGetId(['tid'=>$id,'stock'=>$stock,'goodsname'=>$goodsname,'goodsprice'=>$goodsprice,'goodsdescript'=>$goodsdescript,'goodsImage'=>$goodsImage]);
	            $gid = \DB::table('images')->insert(['gid'=>$newdata,'image'=>$image,'image1'=>$image1,'image2'=>$image2,'image3'=>$image3,'image4'=>$image4,'image5'=>$image5,'image_c'=>$image_c,'image_c1'=>$image_c1,'image_c2'=>$image_c2]);
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
	public function delgood(Request $request)
	{	
		$id = $request->tid;
		\DB::table('goods')->where('id',$id)->delete();
		return "删除成功";
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
