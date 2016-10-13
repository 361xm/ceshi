@extends("home.base.base")
@section('content')
<link href="{{ URL('home/css/user.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
.msg{ color:red; background:#ffdddd; border:1px solid #555555; margin-left:100px; height: 19px; margin-left: 110px; padding-left: 3px; padding-top: 3px; width: 226px; }
#get_code{ cursor:pointer; }
.login_cright .formlist dl{padding:6px 0px;}
</style>
<body>

<!--内容-->
<div class="u_dhtop">
</div>
<div class="login_content mauto">
	<div class="login_top"></div>
    <div class="login_c clearfix">
    	<form method='post' action="{{ URL('/dologin') }}" >
    		<input type='hidden' name="_token" value="{{ csrf_token() }}">
    		<div class="login_cleft f_l">
	        	<div class="title">
	        		@if(session('mag'))
					   <p class="login-box-msg" style="color:red;">{{ session('mag') }}</p>
					@else()
					   <em>使用已注册的361°商城账号登录：</em>
					 @endif()
	        	</div>
	            <div class="formlist" style="margin-bottom:10px;">
	            	<dl>
	                	<dt>帐号：</dt>
	                    <dd><span><input type="text" name="username" id="Laccount" onblur="if(value ==''){value='用户名或手机或邮箱'}" onfocus="if(value =='用户名或手机或邮箱'){value =''}" value="用户名或手机或邮箱"/></span></dd>
	                </dl>
	                <dl>
	                	<dt>密码：</dt>
	                    <dd><span><input type="password" name="password" id="Lpassword" value="" /></span></dd>
	                </dl>
	            </div>
	        	
	            <div class="remember"><div style="float:left; margin-top:2px;"><input type="checkbox" name="savecookie" id="savecookie" value="1" /></div><div style="float:left; margin-left:5px;">(记住我)两周内自动登录</div><a href="{{ URL('/forgetPasswd') }}" style="float:left; color:#BF262D; margin-left:20px;">忘记密码?</a> </div>
	            <div>
	            	<input type="submit" value="会员登录" class="submit pointer" style="margin-top:20px;"/>
	            </div>
				<div class="otherlogin" style="margin-top:5px;">第三方登陆</div>
				<div class="iframeform"><label style="text-align:center;"><a href="/index.php?m=Loginby&a=index&ltype=qq" class="loginbyqq"  target="_blank"></a><a href="/index.php?m=Loginby&a=index&ltype=sina" class="loginbysina"  target="_blank"></a></label></div>
			</div>
		</form>
        <div class="login_cbo f_l"></div>
        <form method='post' id="form2" action="{{ URL('/register') }}" >
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="login_cright f_l">
        	<div class="title">没有账号，马上注册一个：</div>
            <div class="formlist">
            	@if(session('msg'))
					<p class="login-box-msg" style="color:red;">{{ session('msg') }}</p>
				@else()
				@endif()
				<table>
				<tr>
            	<td>
            		<span style="font-size:14px">手 机 号&nbsp;：</span><input placeholder="请输入手机号" type="text" name="phone" onblur="doPhone(this.value)" style="border:1px solid #ddd; height:25px;width:180px">&nbsp;&nbsp;<span id="phone" style="font-size:15px"></span>
            	</td>
                </tr>
                <tr>
                	<td>
                		<span style="font-size:14px">用 户 名&nbsp;：</span><input placeholder="请输入用户名" type="text" name="username" onblur="doCheck(this.value)" style="border:1px solid #ddd; height:25px;width:180px">&nbsp;&nbsp;<span id="userName" style="font-size:15px"></span>
                	</td>
                </tr>
                <tr>
                	<td>
                		<span style="font-size:14px">密	&nbsp;码&nbsp; ：</span><input placeholder="请输入密码" type="password" name="password" style="border:1px solid #ddd; height:25px;width:180px">&nbsp;&nbsp;<span style="font-size:15px"></span>
                	</td>
                </tr>
                <tr>
                	<td>
                		<span style="font-size:14px">确认密码&nbsp;：</span><input placeholder="请确认密码" type="password" name="repassword" style="border:1px solid #ddd; height:25px;width:180px">&nbsp;&nbsp;<span style="font-size:15px"></span>
                	</td>
                </tr>
                <tr>
                	<td>
                		<span style="font-size:14px">验 证 码&nbsp;：</span><span><input name="code" type="text" placeholder="请输入验证码" style="border:1px solid #ddd; height:25px;width:180px">&nbsp;&nbsp;</span>
                	</td>
                </tr>
                <tr>
                	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img src="{{ URL('admin/captcha/time()') }}" onclick="this.src='{{ URL('admin/captcha') }}/'+Math.random()"><span></td>
                </tr>
                </table>
               <!--  <dl>
                	<dt>用户名：</dt>
                    <dd><span><input type="text" name="username" id="account" value=""/></span></dd>
                </dl>
                <dl>
                	<dt>密码：</dt>
                    <dd><span><input type="password" name="password" id="password" value="" /></span></dd>
                </dl>
                <dl>
                	<dt>确认密码：</dt>
                    <dd><span><input type="password" name="repassword" id="repassword" value=""/></span></dd>
                </dl>
                <dl>
                	<dt>验证码：</dt>
                	<dd><span><input name="code" type="text" id="J_codetext" placeholder="验证码" maxlength="6" class="login_txtbx"></span></dd>
                </dl>
                 <dl>
                 	<dt></dt>
                	<dd><span><img src="{{ URL('admin/captcha/time()') }}" onclick="this.src='{{ URL('admin/captcha') }}/'+Math.random()"><span></dd>
                </dl> -->
            </div>
			<div class="formlist" id="profile_error_reg" style="display:none; margin-top:5px;">
				<dl style="padding:0px;">
					<dt></dt>
					<dd class="profile_error" style="width:199px;"></dd>
				</dl>
			</div>
            <div>
            	<input type="submit" id="button2" value="提交" class="submit pointer" />
            </div>
            <div class="remember"><input type="hidden" name="is_regis" id="is_regis" value="0"/><input type="checkbox" name="yuedu" id="yuedu" checked="1" />我已阅读并同意《361°商城协议》</div>
        </div>
        </form>
    </div>
    <div class="login_bottom"></div>
</div>
<a href="#" class="toopen" target="_blank"></a>
<div class="clear"></div>
<script src="../../homejs/wb.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

		function doPhone(name)
		{
			if(name.match(/^1[34578]\d{9}$/) == null){
				alert('手机号输入位数不正确');
				return;
			}
			// 第一步：新建一个xml http请求对象
			var xmlHttp;
			if(window.XMLHttpRequest){
				// Firefox, Opera 8.0+, Safari
				xmlHttp = new XMLHttpRequest();
			}else{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			// 第二步：设置回调函数
			xmlHttp.onreadystatechange = function()
			{
				var info = document.getElementById('phone');
				// alert(xmlHttp.status);
				if(xmlHttp.readyState==4)
			    {
			    	var str = xmlHttp.responseText;
			    	if(str == 'yes'){
			    		info.innerHTML = '手机号已存在';
			    		info.style.color = 'red';
			    	}else{
			    		info.innerHTML = '手机号可用';
			    		info.style.color = 'green';
			    	}
			    }
			}

			// 第三步：初始化
			// 第一个参数：请求方式  get  和  post
			// 第二个参数：请求地址
			// 第三个参数：是否异步  true异步  false同步
			var a = xmlHttp.open("get","{{ URL('/register') }}?phone="+phone,true);
			// 第四步：正式发送
			xmlHttp.send();
		}

		//判断用户名
		function doCheck(name)
		{
			if(name.match(/^\w{6,16}$/) == null){
				alert('账号信息必须为6~16位有效字符');
				return;
			}
			// 第一步：新建一个xml http请求对象
			var xmlHttp;
			if(window.XMLHttpRequest){
				// Firefox, Opera 8.0+, Safari
				xmlHttp = new XMLHttpRequest();
			}else{
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			// 第二步：设置回调函数
			xmlHttp.onreadystatechange = function()
			{
				var userName = document.getElementById('userName');
				// alert(xmlHttp.status);
				if(xmlHttp.readyState==4)
			    {
			    	var str = xmlHttp.responseText;
			    	if(str == 'yes'){
			    		userName.innerHTML = '用户名已存在';
			    		userName.style.color = 'red';
			    	}else{
			    		userName.innerHTML = '用户名可用';
			    		userName.style.color = 'green';
			    	}
			    }
			}

			// 第三步：初始化
			// 第一个参数：请求方式  get  和  post
			// 第二个参数：请求地址
			// 第三个参数：是否异步  true异步  false同步
			var a = xmlHttp.open("get","{{ URL('/register') }}?phone="+phone,true);
			// 第四步：正式发送
			xmlHttp.send();
		}

</script>
<script type="text/javascript">
var loginUrl = "/index.php?m=Member&a=checkLogin";
var telUrl = "/index.php?m=Member&a=checkTel";
var emailUrl = "/index.php?m=Member&a=checkEmail";
var acUrl = "/index.php?m=Member&a=checkAccount";
var codeUrl = "/index.php?m=Member&a=getCodeBySms";
var regUrl = "/index.php?m=Member&a=register";
var tcodeUrl = "/index.php?m=Member&a=verify_code";
</script>
@endsection