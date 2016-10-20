<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DingdanController extends Controller
{
	public function dingdan($id)
	{
		$uid = session('adminuser')->id;
		$data = \DB::table('user_c')->where('uid',$uid)->first();
		$list = \DB::table('gouwche')->where('uid',$uid)->first();
   		return view('home/dindan')->with(['data'=>$data,'list'=>$list]);
  	 }
}
