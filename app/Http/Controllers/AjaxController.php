<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AjaxController extends Controller
{
     public function index(Request $request,$id,$color)
     {    
          if(isset(session('qtuser')->username)){
               $uid = session('qtuser')->id;
               $goodscolor = $request->input('goodscolor');
               $sizes = $request->input('sizes');
               $count = $request->input('goodcount');
               $goodsname = \DB::table('goods')->where('id',$id)->get();
               $name = $goodsname[0]->goodsname;
               $price = $goodsname[0]->goodsprice;
               $data = \DB::table('gouwche')->insert(['uid'=>$uid,'gid'=>$id,'color'=>$goodscolor,'sizes'=>$sizes,'count'=>$count,'goodname'=>$name,'goodsimg'=>$color,'goodsprice'=>$price]);
               $configs = \DB::table('config')->get(); 
              $list = \DB::table('goods')->join('gouwche','gouwche.gid','=','goods.id')->where('uid',$uid)->get();

               $wan=\DB::table('links')->get();
               return view('home/Shoping')->with(['list'=>$list,'configs'=>$configs,'wan'=>$wan]);             
          }else{
               return redirect('/login');
          }
     }    	
}
