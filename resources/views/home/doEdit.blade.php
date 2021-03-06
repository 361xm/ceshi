@extends('home.base.base1')
@section('content')
<link href="http://361img.361sport.com.cn/shop/css/css.css" rel="stylesheet" type="text/css" />
<link href="http://361img.361sport.com.cn/shop/css/user.css" rel="stylesheet" type="text/css" />
<link href="http://361img.361sport.com.cn/shop/js/artDialog/skins/default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.uoserch_c1 .input{height:18px;margin:0;}
.uoserch_c .submit{margin-left:10px;}
.uoserch_c1,.uoserch_c2{height:27px;line-height:27px;text-align:center;padding:0;}
.bank{ width:535px; position:absolute; left:566px; top:200px; background:#f0f0f5; border:2px solid #ddd; border-radius:4px; }
.bankClose{ text-align:right;	 }
</style>
<script type="text/javascript" src="../../home/js/jsAddress.js"></script>
<!--内容-->
<div class="userbac">
    <div class="u_dhtop">
        <div class="u_dh">
            <b>首页</b> > <a href="">会员中心</a>
        </div>
    </div>
    <div class="pcon clearfix">
        <div class="u_left">
        ﻿<div class="pl_top"></div>
        <div class="pl_c">
            <div class="userinfo">
                <div class="username Arial fbold">{{ session('qtuser')->username }}</div>
                <div style="margin-top:5px;">普通会员&nbsp;积分：0</div>
                <a class="useredit" href="{{ URL('/edit') }}" style="color:orange;">添加个人资料</a>
                <a class="useredit" href="{{ URL('/doCenter')}}" style="color:orange;">修改个人资料</a>
            </div>

            <div>
                <div class="pclass_title clearfix close"><span></span>我的订单</div>
                <div class="pclass">
                    <ul>
                        <li><a href="/index.php?m=User&a=order">订单查询</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="pclass_title clearfix close"><span></span>账户设置</div>
                <div class="pclass">
                    <ul>
                        <li><a href="{{ URL('/doCenter') }}">个人档案</a></li>
                        <li><a href='{{ URL("/forgetPasswd") }}'>修改登录密码</a></li>
                    </ul>
                </div>
            </div>
</div>
<div class="pl_bottom2"></div>
        </div>
        <div class="u_right">
			<div class="title">修改个人信息</div>
			<div class="color1">亲爱的{{ session('qtuser')->username }}，填写真实的资料，有助于我们为您提供更贴心得服务，还可以获取<b>50</b>积分。</div>
			<form method='post' id="form1" name="form1" action="/doEdit" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="u_edit" style="padding-top:5px; padding-left:100px;">
					<div class="formlist">
						<dl>
							<dt>登录名：</dt>
							<dd class="ue_name">{{ session('qtuser')->username }}</dd>
						</dl>
						@foreach($data as $list)
						<dl>
							<dt>真实姓名：</dt>
							<dd><span><input type="text" name="username" id="realname" style="width:170px;" value="{{ $list->username }}" /></span>&nbsp;<font color="#FF0000">*</font></dd>
						</dl>
						<dl>
							<dt>性别：</dt>
							<dd>
							<input type="radio" name="sex" id="sex" value="{{ $list->sex }}" /> 男
							<input type="radio" name="sex" id="sex" value="{{ $list->sex }}" checked="checked"/> 女
							<font color="#FF0000">*</font>
							</dd>
						</dl>
						
						<dl>
							<dt>电子邮箱：</dt>
							<dd><span><input type="text" name="email" id="email" value="{{ $list->email }}"  style="width:366px;"/></span></dd>
						</dl>

					</div>
					<div class="tomail" style="padding-bottom:55px;">
						<div style="float:left; margin-top:2px;"><input type="checkbox" name="email_call" id="email_call" value="1" /></div>
						<div style="float:left; margin-left:5px;">我愿意接受来自361度官方商城的活动邮件</div>
						<div style="clear:both"></div>
					</div>
					<div class="formlist">
						<dl>
							<dt>所在区域：</dt>
							<div>  
							<select id="area" name="area">{{ $list->area }}</select>  
							省：<select id="cmbProvince" name="sheng">{{ $list->area }}</select>  
							市：<select id="cmbCity" name="shi">{{ $list->area }}</select>  
							区：<select id="cmbArea" name="qu">{{ $list->area }}</select>  
							<br /><br /> 
							</div>  
						</dl>
						<dl>
							<dt>街道地址：</dt>
							<dd><span><input type="text" name="address" id="address"  style="width:366px;" value="{{ $list->area }}"/></span></dd>
						</dl>
						<div class="clear"></div>
						<dl>
						<dt>手机号码：</dt>
						<dd><span style="border:none;"><input type="text" id="mobile" name="phone" value="{{ $list->phone }}" style="width:159px;"/></span></dd>
						</dl>
						@endforeach
					</div>
				
					<div class="formlist" id="profile_error_mobile" style="display:none;">
						<dl>
							<dt></dt>
							<dd class="profile_error"></dd>
						</dl>
					</div>
					<div class="tomail">
						<div style="float:left; margin-top:2px;"><input type="checkbox" name="mobile_call" id="mobile_call" value="1" /></div>
						<div style="float:left; margin-left:5px;">我愿意接受来自361度官方商城的活动短信/彩信</div>
						<div style="clear:both;"></div>
					</div>
					
					<div class="formlist" id="profile_error" style="display:none;">
						<dl>
							<dt></dt>
							<dd class="profile_error"></dd>
						</dl>
					</div>
					<div>
					  <input type="hidden" name="tid" value="139558">
					  <input type="submit" name="button" id="button2" value="提交" class="saveinput"  id="saveinfo"/>
					</div>
				</div>
			</form>
		</div>
		<div class="clear"></div>
    </div>
</div>
<!--底部-->
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">  
    addressInit('area','cmbProvince','cmbCity','cmbArea','西北地区', '北京', '市辖区', '东城区');  
    //addressInit('Select1', 'Select2', 'Select3');  
</script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/user.js"></script>
<script type="text/javascript">
</script>
@endsection
