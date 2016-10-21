@extends("home.base.base1")
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
                <div class="username Arial fbold">{{ session('adminuser')->username }}</div>
                <a class="useredit" href="{{ URL('/edit') }}" style="color:orange;">添加个人资料</a>
                <a class="useredit" href="{{ URL('/doCenter')}}" style="color:orange;">修改个人资料</a>
            </div>

            <div>
                <div class="pclass_title clearfix close"><span></span>我的订单</div>
                <div class="pclass">
                    <ul>
                        <li><a href="{{ URL('/center')}}">订单查询</a></li>
                        <li><a href="/index.php?m=User&a=backlist">退换货订单</a></li>
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
            <div class="title">订单查询</div>
            <div class="uorder_zt"></div>
          <div class="uoserch clearfix">
			<div class="uoserch_left"></div>
			<div class="uoserch_c">
				<form method="post" action="{{ URL('/center') }}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="uoserch_c1 f_l">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>                  
									<b>搜索您的订单：</b><input type="text" name="name" id="uo_keyword" class="input" onfocus="if( $(this).val() == '收货人姓名、订单号…' ){ $(this).val(''); return; }" onblur="if( $(this).val() == '' ){ $(this).val('收货人姓名、订单号…'); return; }"/></td><td>
									<input type="submit" id="button2" value="搜索订单"  class="submit"/>
								</td>
							</tr>
						</table>
					</div>
					</form>
					<form method="get">
					<input type="hidden" name="m" value="User" />
					<input type="hidden" name="a" value="order" />
					<input type="hidden" name="order" value="add_time" />
					<input type="hidden" name="status" value="" />
					<input type="hidden" name="uo_keyword" value="收货人姓名、订单号…" />
					</form>
			</div>
			<div>
                <!-- 遍历这一块 -->
                @foreach($danzi as $gb)
                <table width="98%" cellspacing="0" cellpadding="15" border="0" class="uolist_bo" id="dindan">
                    <tbody><tr>
                    <td width="26%" valign="top" class="uolist_left" rowspan="2">
                        已下订单<br>
                        <span class="time">{{ $gb->time }}</span><br>
                        订单编号 <font color="#004b91">GF{{ $gb->id}}</font><br>
                        收件人 <font color="#333333">{{ $gb->username }}</font><br>
                        应付金额<font color="#bc1820">￥{{ $gb->price}}</font><br>
                    </td>
                    <td valign="top" class="uolist_right1" colspan="2"><span class="color1"><?php if($gb->status==1){ echo '商家已发货';}else if($gb->status==0){echo '商家还未发货';}else{echo "退货中";}?></span></td>
                    </tr>
                    <tr>
                      <td valign="middle" height="190">
                      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="orderlist-all">
                            <tbody><tr>
                              <td width="32%">
                                <a href="/index.php?m=Product&amp;a=show&amp;proid=6705" target="_blank"><img width="150" height="150" src='{{ asset("admins/upload/$gb->gimage")}}'></a>
                              </td>
                              <td width="68%" class="uolist_right2">
                                  <div></div>
                                  <div class="yahei"><a href="/index.php?m=Product&amp;a=show&amp;proid=6705" target="_blank">{{ $gb->gdname }}</a></div>
                                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody><tr>
                                      <td width="45%">颜色：{{ $gb->color}}<br>尺寸：{{ $gb->big}} 
                                      <br>数量：{{ $gb->count}}</td>
                                      <td width="55%">价格：￥{{ $gb->price*$gb->count}}</td>
                                    </tr>
                                  </tbody></table>
                              </td>
                            </tr>                                                 </tbody></table>
                      </td>
                      <td width="18%" valign="middle">
                        <div class="uolist_right3">
                            <ul>
                                <li style="margin:10px 31px;"><a onclick="dodels({{ $gb->id }})" data-id="43518" id="delOrder">删除</a></li>                           </ul>
                        </div>
                      </td>
                  </tr>
                </tbody>@endforeach</table>
                <!-- 结束 -->
            </div>
          </div>
		  		         <div class="page"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/user.js"></script>
<script type="text/javascript">
  function dodels(id){
    $.ajax({
        type:'get',
        url:'{{ URL("/doshanchu")}}',
        data:{did:id},
        datatype:'json',
        success:function(data){
          $('#dindan').remove();
          alert(data);
        },
        error:function(data){
          alert('错误');
        }
      });
  }
</script>
@endsection
