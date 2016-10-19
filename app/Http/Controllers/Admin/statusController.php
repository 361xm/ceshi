<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;

class UsersController extends CommonController
{
    //为当前用户准备分配角色信息
    public function loadRole($uid=0)
    {
        //获取所有角色信息
        $rolelist = \DB::table("role")->get();
        //获取当前用户的角色id
        
        // $rids = \DB::table("user_role")->where("uid",$uid)->lists("rid");//这个现在用不了了

        
        //用户有哪些角色 
        $rids = \DB::select('select rid from user_role where uid='.$uid);
        $rid = [];
        foreach($rids as $k=>$v){
            $rid[$k] = $v->rid;
        }

        //加载模板
        return view("admin.users.rolelist",["uid"=>$uid,"rolelist"=>$rolelist,"rids"=>$rid]);
    }
    
    public function saveRole(Request $request){
        $uid = $request->input("uid");
        //清除数据
        \DB::table("user_role")->where("uid",$uid)->delete();
        
        $rids = $request->input("rids");
        if(!empty($rids)){
            //处理添加数据
            $data = [];
            foreach($rids as $v){
                $data[] = ["uid"=>$uid,"rid"=>$v];
            }
            //添加数据
            \DB::table("user_role")->insert($data);
        }
        return "角色保存成功!";
    }
}
