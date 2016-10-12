@extends('home.base.base1')
@section('content')
<link href="http://361img.361sport.com.cn/shop/css/user.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#get_code,#changeMobile{ background:#f97d02; border-radius:3px; margin:0 8px; color:white; padding:2px 5px; cursor:pointer;}
.formlist dl dd { width: 480px }
</style>

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
                <div class="username Arial fbold">chiehjie</div>
                <div style="margin-top:5px;">普通会员&nbsp;积分：0</div>
                <a class="useredit" href="/index.php?m=User&a=profile">编辑个人资料</a>
            </div>
            <div class="userinfo2">
                <a href="/index.php?m=User&a=comlist"><span>0</span>商品评论</a>
                <a href="/index.php?m=User&a=collect"><span>1</span>我的收藏</a>
                <a href="/index.php?m=User&a=order&order=status&status=1"><span>0</span>处理中订单</a>
            </div>
            <div>
                <div class="pclass_title clearfix close"><span></span>我的订单</div>
                <div class="pclass">
                    <ul>
                        <li><a href="/index.php?m=User&a=order">订单查询</a></li>
                        <li><a href="/index.php?m=User&a=backlist">退换货订单</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="pclass_title clearfix"><a href="/index.php?m=User&a=coupon">卡券中心(1)</a></div>
            </div>
            <div>
                <div class="pclass_title clearfix"><a href="/index.php?m=User&a=collect">收藏管理</a></div>
            </div>
			<!--
            <div>
                <div class="pclass_title clearfix"><a href="/index.php?m=User&a=exchange">我的积分</a></div>
            </div>-->
            <div>
                <div class="pclass_title clearfix close"><span></span>我的评论</div>
                <div class="pclass">
                    <ul>
                        <li><a href="/index.php?m=User&a=comment">未完成评论</a></li>
                        <li><a href="/index.php?m=User&a=comlist">发表过的评论</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="pclass_title clearfix"><a href="/index.php?m=User&a=address">收货地址</a></div>
            </div>
            <div>
                <div class="pclass_title clearfix close"><span></span>账户设置</div>
                <div class="pclass">
                    <ul>
                        <li><a href="/index.php?m=User&a=profile">个人档案</a></li>
                        <li><a href="/index.php?m=User&a=password">修改登录密码</a></li>
                    </ul>
                </div>
            </div>
</div>
<div class="pl_bottom2"></div>



        </div>
        <div class="u_right">
			<div class="title">修改个人信息</div>
			<div class="color1">亲爱的chiehjie，填写真实的资料，有助于我们为您提供更贴心得服务，还可以获取<b>50</b>积分。</div>
									<form method='post' id="form1" name="form1" action="/index.php?m=User&a=profile"  enctype="multipart/form-data">
			<div class="u_edit" style="padding-top:5px; padding-left:100px;">
				<div class="formlist">
					<dl>
						<dt>登录名：</dt>
						<dd class="ue_name">chiehjie</dd>
					</dl>
					<dl>
						<dt>真实姓名：</dt>
						<dd><span><input type="text" name="realname" id="realname" style="width:170px;" value="" /></span>&nbsp;<font color="#FF0000">*</font></dd>
					</dl>
					<dl>
						<dt>性别：</dt>
						<dd>
						<input type="radio" name="sex" id="sex" value="1" /> 男
						<input type="radio" name="sex" id="sex" value="0" checked="checked"/> 女
						<font color="#FF0000">*</font>
						</dd>
					</dl>
					<dl>
						<dt>生日：</dt>
						<dd>
						<span>
						<input type="text"  value="" name="birthday" id="birthday" class="ipt4"  style="width:80px;"/>
						</span>
						<font color="#FF0000">*</font>
						</dd>
					</dl>
					<dl>
						<dt><font size="-1">温馨提示：</font></dt>
						<dd>(<font color="#3399FF">VIP银卡、金卡会员，生日当天享商品5折优惠，限量1件（生日当天，吊牌价5折）</font>)</dd>
					</dl>
					<dl>
						<dt>证件：</dt>
						<dd>
						  <select name="credentials" id="credentials"  style="width:110px; height:26px;" >
							<option value="1" >身份证</option>
							<option value="2" >社保</option>
							<option value="3" >军人</option>
						  </select>
						  <span><input type="text" name="idcard"  id="idcard" value=""  style="width:250px;"/></span>
						  <font color="#FF0000">*</font>
						</dd>
					</dl>
					<dl>
						<dt>身份证审核：</dt>
												<dd style="width:600px;">
							正面图片<input type="file" name="face1" style="width:150px;">
							反面图片<input type="file" name="face2" style="width:150px;">（图片不超过1M）
						</dd>					</dl>
					<dl>
						<dt>电子邮箱：</dt>
						<dd><span><input type="text" name="email" id="email" value=""  style="width:366px;"/></span></dd>
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
						<dd id="szqy">
								<select name="province" class="prov" ></select>
								<select name="city" class="city"></select>
								<select name="district" class="dist"></select>
						</dd>
					</dl>
					<dl>
						<dt>邮政编码：</dt>
						<dd><span><input type="text" name="yzbm" id="yzbm" value="" /></span></dd>
					</dl>
					<dl>
						<dt>街道地址：</dt>
						<dd><span><input type="text" name="address" id="address"  style="width:366px;" value=""/></span></dd>
					</dl>
					<div class="clear"></div>
					<dl>
					<dt>手机号码：</dt>
					<dd><span style="border:none;"><input type="text" id="mobile"  value="13036675587" style="width:159px;"/>&nbsp;&nbsp;&nbsp;验证码：<input type="text" id="sms_code" style="width:46px;"/></span><input type="button" id="get_code" value="获取验证码"><span id="spanfortimeout" style="border:none"><a class="code_timeout" style="display:none;">60秒后可重新发</a></span><input type="button" id="changeMobile" value="修改"/></dd>
					</dl>
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
				<div class="formlist">
					<dl>
						<dt>固定电话：</dt>
						<dd>
							<span><input type="text" name="phone_zone" id="phone_zone"  value="" style="width:74px;" /></span> -
							<span><input type="text" name="phone" id="phone"  value="" style="width:132px;" /></span> -
							<span><input type="text" name="phone_opx" id="phone_opx"  value="" style="width:74px;" /></span>
							&nbsp;&nbsp;区号-电话号码-分机
					  </dd>
					</dl>
				</div>
				<div class="formlist" id="profile_error" style="display:none;">
					<dl>
						<dt></dt>
						<dd class="profile_error"></dd>
					</dl>
				</div>
				<div>
				  <input type="hidden" name="tid" value="139558">
				  <input type="submit" name="button2" id="button2" value="提交" class="saveinput"  id="saveinfo"/>
				</div>
			</div>
			</form>
		</div>
		<div class="clear"></div>
    </div>
</div>
<!--底部-->
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>

@endsection