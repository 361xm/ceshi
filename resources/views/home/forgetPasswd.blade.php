@extends('home.base.base1')
@section('content')
<!--内容-->
<div class="u_dhtop">
</div>
<div class="login_content mauto">
	<div class="login_top"></div>
	<div class="login_c clearfix" style="height:500px;">
		<div style="text-align:center"><img src="../../home/images/getpwd.png"></div>
		<br><br><br>
		<form action="{{ URL('/doForgetPasswd') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<table width="400" border="0" cellspacing="0" cellpadding="0" align="center" id="getpwdsteep1">
				<tbody>
					<tr>
						<td>
							<div class="title">
				        		@if(session('msg'))
								   <p class="login-box-msg" style="color:red;">{{ session('msg') }}</p>
								@else()
								   <em>使用已注册的361°商城账号登录：</em>
								 @endif()
				        	</div>
							<div class="formlist">
								<div style="text-align:center">
									@if(session('msg'))
									   <p class="login-box-msg" style="color:red;">{{ session('msg') }}</p>
									@else()
									   <em>请输入新密码：</em>
									@endif()
								</div>
								
								<dl id="name">
								<dt>用户名：</dt>
									<dd><span><input type="text" name="name" id="name"></span></dd>
								</dl>
								<dl id="phone">
								<dt>手机号：</dt>
									<dd><span><input type="text" name="phone" id="email"></span></dd>
								</dl>
								
								<dl id="maillyz">
									<dt>验证码：</dt>
									<dd style="width:270px;"><span style="float:left;"><input type="text" name="code" id="mail_code" style="width:105px;height:35px;"></span><span style="margin-left:18px;"><img src="{{ URL('admin/captcha/time()') }}" onclick="this.src='{{ URL('admin/captcha') }}/'+Math.random()"><span></dd>
								</dl>
							</div>
							<div style="padding-left:110px;padding-top:20px;"><input type="submit" id="check_code" class="btn_bac" value="下一步"></div>
						</td>
					</tr>
				</tbody>	
			</table>
		</form>
	</div>
	<div class="login_bottom"></div>
</div>
<div class="clear"></div>
<script src="../../home/js/wb.js" type="text/javascript" charset="utf-8"></script>

<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move;"></div><a class="aui_close" href="javascript:/*artDialog*/;">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_nw"></td><td class="aui_n"></td><td class="aui_ne"></td></tr><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move;"></div><a class="aui_close" href="javascript:/*artDialog*/;">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>
@endsection
