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
                <div style="margin-top:5px;">普通会员&nbsp;积分：0</div>
                <a class="useredit" href="{{ URL('/edit') }}">编辑个人资料</a>
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
            <div class="title">订单查询</div>
            <div class="uorder_zt"><a href="/index.php?m=User&a=order&order=add_time" class="check" >按日期列出的订单</a> | <a href="/index.php?m=User&a=order&order=status&status=0" >未支付订单</a></div>
          <div class="uoserch clearfix">
			<div class="uoserch_left"></div>
			<div class="uoserch_c">
									<form method="get">
					<input type="hidden" name="m" value="User" />
					<input type="hidden" name="a" value="order" />
					<div class="uoserch_c1 f_l">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<b>搜索您的订单：</b><input type="text" name="uo_keyword" id="uo_keyword" class="input"  value="收货人姓名、订单号…" onfocus="if( $(this).val() == '收货人姓名、订单号…' ){ $(this).val(''); return; }" onblur="if( $(this).val() == '' ){ $(this).val('收货人姓名、订单号…'); return; }"/></td><td>
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
                    <div class="uoserch_c2 f_l">
						日期：
                          <select name="time" id="select">
								<option value="0" selected="selected">所有订单</option><option value="1" >过去30天内下的订单</option><option value="3" >过去 3个月内下的订单</option><option value="6" >过去 6个月内下的订单</option>                          </select>
							<input type="submit" id="button2" value="搜索订单"  class="submit"/>
                    </div>
					</form>
			</div>
			<div class="uoserch_right"></div>
          </div>
          <div>所有订单，共 <b>0</b> 单</div>
		  		         <div class="page"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/user.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("a#delOrder").live("click",function(){
		var delid = $(this).attr("data-id");
		var delUrl = "/index.php?m=User&a=delOrder";
		artDialog.confirm("确定删除订单？",function(){
			$.post(delUrl,{delid:delid},function( result ){
				if( result.status == '0' ){
					artDialog.tips(result.msg,2,"succeed"); window.location.reload(); return true;
				} else {
					artDialog.tips(result.msg,2,"error"); return false;
				}
			},"json");
		},function(){ return false; });
	});
});
</script>
@endsection