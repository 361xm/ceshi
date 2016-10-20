<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ZhiFuController extends Controller
{
    public function zhifu()
    {	
		$uid = session('adminuser')->id;
		// 用户详情
		$data = \DB::table('user_c')->where('uid',$uid)->first();
		// 用户购物车
		$list = \DB::table('gouwche')->where('uid',$uid)->first();
		$time = time();
		\DB::table('details')->insert(['uid'=>$uid,'gid'=>$list->gid,'color'=>$list->color,'gimage'=>$list->goodsimg,'area'=>$data->area,'big'=>$list->sizes,'count'=>$list->count,'username'=>$data->username,'userphone'=>$data->phone,'status'=>'0','time'=>$time,'price'=>$list->goodsprice,'gdname'=>$list->goodname]);
    	 $configs = \DB::table('config')->get(); 
    	return view('home.zhifu')->with(['configs'=>$configs,'list'=>$list,'data'=>$data]);
    }
}
