<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>361°多一度热爱，361°官方商城</title>
<meta name="keywords" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在“多一度热爱”品牌精神的指引下，361°积极践行“热爱”文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。">
<meta name="description" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在“多一度热爱”品牌精神的指引下，361°积极践行“热爱”文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。">
<link href="http://361img.361sport.com.cn/shop/css/css.css" rel="stylesheet" type="text/css" />
<link href="http://361img.361sport.com.cn/shop/css/product-new.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://361img.361sport.com.cn/shop/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link href="http://361img.361sport.com.cn/shop/js/artDialog/skins/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('./admins/bootstrap/css/bootstrap1.css') }}">
</head>
<body>
<div class="newheader361"> 
	<!--登陆/注册-->
        <div class="toplogin">

        <div class="logincont"> <a href="#" class="area"  target="_blank"></a>

                <?php 
                    if(isset(session('qtuser')->username)){
                      ?>  
                        &nbsp;<a href="{{ URL('/center')}}" style="margin-left:8px;font-size:16px;"><em style="margin-left:8px;margin-right:8px;font-size:16px;" >{{ session('qtuser')->username }}</em></a>&nbsp;&nbsp;
                        <span><a href="{{ URL('/logout') }}" style="font-size:16px;">退出</a></span>

                    <?php

                    }else{
                    ?>
                        <a href="{{ URL('/login') }}" style="font-size:16px;" class="in">注册登录</a>
                    <?php
                    }
                ?>

            <em style="margin-left:8px;font-size:16px;">欢迎您：</em>
        </div>
                    
    </div>
        <!--导航-->
        <div class="top_nav">
            <div class="navcon"> <a class="logo" ></a>
                <div class="newshop_menu" style="width:684px;">
                    <ul>
                        <li><a href="/" style="background:none;" class="dd" >首页</a></li>
                        <li class="mainlevel"><a href="{{ URL('/product') }}" target="_blank" class="dd"><em></em>所有产品</a>
                        </li>
                        <li class="pointer"><a href="{{ URL('/info') }}" target="_blank" class="dd">品牌新闻</a></li>
                        <!--<li class="pointer"><a href="http://rio2016.361sport.com.br/" target="_blank" class="dd" style="color:red;">里约奥运</a></li>-->
                        <li class="pointer"><a href="{{ URL('/pages') }}" target="_blank" class="dd" style="color:red;">敢超10K</a></li>
                        <li class="pointer"><a href="{{ URL('/Shoping') }}" target="_blank" class="dd">购物车</a></li>
                </div>
                <div class="serch">
                    <div class="clearfix">
                        <form id="search" name="search" method="get" action="/index.php?m=Product&a=index">
                            <input type="text" name="keyword" id="keyword" class="input" onblur="if(value ==''){value='跑鞋'}" onfocus="if(value =='跑鞋'){value =''}" value="跑鞋"/>
                            <input type="hidden" value="Product" name="m"/>
                            <input type="hidden" value="index" name="a"/>
                            <input type="submit" class="submit pointer" />
                        </form>
                        <div style="clear:both;"></div>
                    </div>
                
                </div>
            </div>
        </div>
</div>
<div class="newheaderno"></div>

<div class="fl-category"><b>所有分类</b> </div>
<div class="search-result clearfix">
	<div class="search-menu">
			<div class="smenu-list">
			<h4 class=" clearfix">选择品牌<span>&nbsp;</span></h4>
			<ul class="clearfix" style="display:block;">
				<a href="http://www.361sport.com/index.php?m=Product&a=index&brand=5"><li><img src="http://www.361sport.com/Uploads/category/2015/10/10/5618cf09a4db1.jpg" /></li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&brand=6"><li><img src="http://www.361sport.com/Uploads/category/2015/10/10/5618ceee526e3.jpg" /></li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&brand=2"><li><img src="http://www.361sport.com/Uploads/category/2015/10/10/5618cee3cca0d.jpg" /></li></a>			</ul>
		</div>
		<div class="smenu-list border-top">
			<h4 class="open clearfix">性别<span>&nbsp;</span></h4>
			<ul class="smenulist clearfix" >
				<a href="#" onclick="Do()" id="men" value="男士"><li>男士</li></a>
				<a href="#" onclick="women()" id="women" value="女士"><li>女士</li></a>
			</ul>
		</div>
	</div>
	<div class="search-list">
				<div class="search-choose clearfix">
			<div class="youchoose"><b>您的选择：</b></div>

			<div class="chooseleft" id="choose">

			</div>
			<div class="chooseright"><a href="/index.php?m=Product&a=index"></a><span>共<em></em>件产品</span></div>
		</div>
		<div class="sr-chooseCon">
			<div id="other-search">
				<div class="chooseCon01">
					<table  cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td class="choosetitle">尺&nbsp;&nbsp;&nbsp;码</td>
							<td  id="chimasize">&nbsp;&nbsp;
								<input type="button"  id="btn_1" value="XS" onClick="btn_1()"  style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_2" value="S" 	onClick="btn_2()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_3" value="M"	onClick="btn_3()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_4" value="L" 	onClick="btn_4()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_5" value="XL" onClick="btn_5()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_6" value="XXL" onClick="btn_6()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_7" value="XXXL" onClick="btn_7()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_8" value="36" onClick="btn_8()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_9" value="37" onClick="btn_9()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_10" value="38" onClick="btn_10()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_11" value="39" onClick="btn_11()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_12" value="40" onClick="btn_12()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_13" value="41" onClick="btn_13()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_14" value="42" onClick="btn_14()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="btn_15" value="43" onClick="btn_15()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
							</td>
							<td id="more"><a href="javascript:void(0);">更多>></a></td>
						</tr>
					</table>
				</div>
				<div class="chooseCon01">
					<table cellpadding="0" cellspacing="0">
						<tr  valign="top">
							<td  class="choosetitle">颜&nbsp;&nbsp;&nbsp;色</td>
							<td>&nbsp;&nbsp;
								<input type="button"  id="col_1" value="白" onClick="col_1()"  style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="col_2" value="红" onClick="col_2()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="col_3" value="黑"	onClick="col_3()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="col_4" value="黄" onClick="col_4()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="col_5" value="紫" onClick="col_5()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
								<input type="button"  id="col_6" value="灰" onClick="col_6()" 	style="background-color:#fff;color:#ddd;"/>&nbsp;&nbsp;
							</td>
						</tr>
					</table>
				</div>

				
			</div>
			<a href="javascript:void(0);" class="openicon"><span>收起</span></a>
		</div>
		<div class="p_right">
			<ul class="clearfix"  id="container">
				@foreach($list as $p)
				<li>
	            	<div class="prli">
	                	<div class="prl_top"></div>
	                    	<div class="prl_c">
		                    	<div class="prl_pic" style="position:relative;">
		                        	<a href='{{ URL("/ShopList/$p->id") }}'><img src="admins/upload/{{ $p->goodsImage }}" style="width:189px;height:189px" class="bigpic scrollLoading"></a>
		                        </div>
		                        <div class="prl_2 clearfix">
		                            <div class="prl_title">
		                            	<div class="title">{{ $p->goodsname }}</div>
		                            </div>
		                            <div class="prl_des">
		                            	{{ $p->goodsprice }}                                
		                            	<span>吊牌价<font>{{ $p->goodsprice+100 }}</font></span>
		                            </div>  
		                        </div>
	                    	</div>
	                    <div class="prl_bottom"></div>
	                </div>
	            </li>
	            @endforeach
            </ul>
		</div>
	</div>
	<center style="float:right;" class="current">
        {!! $list->appends($where)->render() !!}
    </center>
</div>

<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<div id="bottom">
	<!--商标-->
    <div class="trademark">
    	<div class="trademark-content" style="width:1180px;">
            <div class="trademark-tip">
            	<img src="http://361img.361sport.com.cn/shop/images/newindex2016/images/foot2016.png" />

     		</div>
      		<div class="promis"  style="width:1260px;margin-left:-40px">
             	<div class="promis-content">
                	<div class="promise-con">
                    	<ul>
                           <li>
                            	<div class="promise-left"><img src="http://361img.361sport.com.cn/shop/images/newindex5/images/guanfang-pic.png" width="91" height="34" /></div>
                                <div class="promise-right" style="width:77px;">所售商品 均为官方正品</div>
                                <div class="promise-bot"></div>
                          </li>
                            <li>
                            	<div class="promise-left"><img src="http://361img.361sport.com.cn/shop/images/newindex5/images/sever.png" width="134" height="34" /></div>
                              <div class="promise-right">7天无理由退换货 贴心售后服务</div>
                              <div class="promise-bot"></div>
                          </li>
                            <li>
                            	<div class="promise-left"><img src="http://361img.361sport.com.cn/shop/images/newindex5/images/shiwu.png" width="136" height="34" /></div>
                              <div class="promise-right">100%实物拍摄 如实详情描述</div>
                              <div class="promise-bot"></div>
                          </li>
                          <li>
                            	<div class="promise-left"><img src="http://361img.361sport.com.cn/shop/images/newindex5/images/baoyou.png" width="136" height="34" /></div>
                            <div class="promise-right" >满179元包邮 <br />包邮服务轻松购</div>
                            <div class="promise-bot"></div>
                          </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="communite">
                  <div class="communite-content">
                  	<div class="newfoot_cl">
        	 @foreach($wan as $new)    
                <dl>
                    <dt>{{ $new->fu }}</dt>
                    <dd><a href="http://{{ $new->info }}">{{ $new->zi }}</a></dd>
                </dl>
                @endforeach 
          
        </div>
                    <div class="newfoot_cr">
                        <dl>
                            <dt>联系361°官方商城</dt>
                            <dd class="tel">
                                <div class="phone-left"><img src="http://361img.361sport.com.cn/shop/images/newindex5/images/phone.png" width="42" height="42" /></div>
                                <div class="phone-right">
                                    <span class="p1">0592-3790038</span>
                                    <span class="p2">&nbsp;&nbsp;在线时间：周一至周五<br>(9:00-12:00   13:00-18:00)<br></span>
                                </div>
                            </dd>
                            <dd style="margin-bottom:0px;">
                                <div class="phone-left"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes"><img src="http://361img.361sport.com.cn/shop/images/newindex5/images/qq.png" width="45" height="43" /></a></div>
                                <div class="phone-right">
                                    <div class="fourtime"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">== 361在线客服 ==</a></div>
                                </div>
                            </dd>
                            <dd style="padding-left:78px;">
                                <div class="phone-right">
                                    <div class="fourtime5"><a href="tencent://message/?uin=476849964&Site=qq&Menu=yes">QQ:476849964</a></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
					<div class="clear"></div>

                  </div>
                </div>
                
      </div>
      <div class="Certificate" style="width:1260px;margin-left:-40px">中国 闽ICP备05003868号 ©2013 三六一度(中国)有限公司 All Rights Reserved</div>
    </div>
</div>

<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/jquery.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/common.js"></script>
<script type="text/javascript">
var signUrl = "/index.php?m=User&a=signIn";
</script>

<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/jquery.scrollLoading-min.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/superslide.2.1.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript">
$(function(){
	//flash
	$(".variousv").fancybox({
            'padding' : 0, 'autoScale' : false, 'transitionIn' : 'none', 'transitionOut' : 'none', 'width' : 860, 'height' : 524, 'overlayColor' : '#000'
     });
	//silde
		//other-search
	$("a.openicon").click(function(){
		if( $(this).find("span").hasClass("up") ){
			$("#other-search").slideDown("slow");
			$(this).find("span").removeClass("up").html("收起");
			return true;
		} else { //不存在时候为展开
			$("#other-search").slideUp("slow");
			$(this).find("span").addClass("up").html("展开");
			return true;
		}
	});
	//left-menu
	$(".smenu-list>h4").click(function(){
		if( $(this).hasClass("open") ){
			$(this).siblings("ul").slideDown("slow");
			$(this).removeClass("open");
			return true;
		} else {
			$(this).siblings("ul").slideUp("slow");
			$(this).addClass("open");
			return true;
		}
	});
	//左边JS
	$("td#more>a").click(function(){
		var height = $(this).parent().parent().parent().parent().parent().height();
		if( height == '34' ){
			$(this).parent().parent().parent().parent().parent().animate({"height":"68px"});
		} else {
			$(this).parent().parent().parent().parent().parent().animate({"height":"34px"});
		}
	});
	//itemlist
	$(".scrollLoading").scrollLoading();
	$(".pclass_title").live("click",function() {
		if(!($(this).hasClass("open"))){
			var $pclass = $(this).parent().find(".pclass");
			$(this).addClass("open").removeClass("close");
			$pclass.slideDown()	
		} else {
			var $pclass = $(this).parent().find(".pclass");
			$(this).addClass("close").removeClass("open");
			$pclass.slideUp()
		}	
	});
	$(".pre-pic").click(function() {
		n=parseInt($(this).parent().find(".num").html());
		videoWidth = $(this).parent().find("li").width();
		n=n-3;
		if(n<0) { n=n+3; return false; } else {
			$(this).parent().find(".spiclist>ul").animate({left:-n*videoWidth});
			$(this).parent().find(".num").html(n)
		}
	});
	$(".next-pic").click(function() {
		n=parseInt($(this).parent().find(".num").html());
		n=n+3;
		videoLen = $(this).parent().find("li").length;
		videoWidth = $(this).parent().find("li").width();
		if(n>=videoLen) { n=n-3; return false; } else {
			$(this).parent().find(".spiclist>ul").animate({left:-n*videoWidth});
			$(this).parent().find(".num").html(n)
		}
	});
	$(".p_right ul li").hover(function() {
		$(this).css("z-index","100");
		$(this).find(".prli").addClass("check");
		videoLen = $(this).find("li").length;
		videoWidth = $(this).find("li").width();
		$(this).find("ul").css({width:videoLen*videoWidth,left:"0"});
	},function(){
		$(this).css("z-index","0");
		$(this).find(".prli").removeClass("check");	
	});
	$(".spiclist ul li").find("img").hover(function() {
		var src=$(this).attr("data-img");
		$(this).parents(".prl_pic").find(".bigpic").attr("src",src);
	});
});
</script>
<script type="text/javascript">
	function btn_1(){
		var btn_1 = document.getElementById('btn_1').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_1;
		choose.style.color = 'orange';
	}
	function btn_2(){
		var btn_2 = document.getElementById('btn_2').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_2;
		choose.style.color = 'orange';
	}
	function btn_3(){
		var btn_3 = document.getElementById('btn_3').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_3;
		choose.style.color = 'orange';
	}
	function btn_4(){
		var btn_4 = document.getElementById('btn_4').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_4;
		choose.style.color = 'orange';
	}
	function btn_5(){
		var btn_5 = document.getElementById('btn_5').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_5;
		choose.style.color = 'orange';
	}
	function btn_6(){
		var btn_6 = document.getElementById('btn_6').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_6;
		choose.style.color = 'orange';
	}
	function btn_7(){
		var btn_7 = document.getElementById('btn_7').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_7;
		choose.style.color = 'orange';
	}
	function btn_8(){
		var btn_8 = document.getElementById('btn_8').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_8;
		choose.style.color = 'orange';
	}
	function btn_9(){
		var btn_9 = document.getElementById('btn_9').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_9;
		choose.style.color = 'orange';
	}
	function btn_10(){
		var btn_10 = document.getElementById('btn_10').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_10;
		choose.style.color = 'orange';
	}
	function btn_11(){
		var btn_11 = document.getElementById('btn_11').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_11;
		choose.style.color = 'orange';
	}
	function btn_12(){
		var btn_12 = document.getElementById('btn_12').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_12;
		choose.style.color = 'orange';
	}
	function btn_13(){
		var btn_13 = document.getElementById('btn_13').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_13;
		choose.style.color = 'orange';
	}
	function btn_14(){
		var btn_14 = document.getElementById('btn_14').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_14;
		choose.style.color = 'orange';
	}
	function btn_15(){
		var btn_15 = document.getElementById('btn_15').value;
		var choose = document.getElementById('choose');
		choose.innerHTML = btn_15;
		choose.style.color = 'orange';
	}
		function col_1(){
		var col_1 = document.getElementById('col_1').value;
		var choose = document.getElementById('choose');
		choose.innerHTML += col_1;

	}
        function col_2(){
        var col_2 = document.getElementById('col_2').value;
        var choose = document.getElementById('choose');
        choose.innerHTML += col_2;

    }
        function col_3(){
        var col_3 = document.getElementById('col_3').value;
        var choose = document.getElementById('choose');
        choose.innerHTML += col_3;

    }
        function col_4(){
        var col_4 = document.getElementById('col_4').value;
        var choose = document.getElementById('choose');
        choose.innerHTML += col_4;

    }
        function col_5(){
        var col_5 = document.getElementById('col_5').value;
        var choose = document.getElementById('choose');
        choose.innerHTML += col_5;

    }
        function col_6(){
        var col_6 = document.getElementById('col_6').value;
        var choose = document.getElementById('choose');
        choose.innerHTML += col_6;

    }

</script>
<script type="text/javascript">
    var choose = document.getElementById('choose');
    var mens = document.getElementById('mens').value();
    function Do(){
       $.ajax({
            url:'{{ URL("/men") }}',
            type:'get',
            data:{did:"{{ $p->id }}"},
            dataType:'html',
            success:function(data){
                // var men =  "received JSON:" + JSON.stringify(data);
                // $('#choose').html(function(){
                //     return men;
               // alert(data)
               if(data == 0){
                    var a = "男士";
                choose.innerHTML = a;
                choose.style.color = 'orange';
              }
            },
            error:function(){
                alert('ajax请求失败');
            },
        });
    }
    function women(){
       $.ajax({
            url:'{{ URL("/men") }}',
            type:'get',
            data:{did:"{{ $p->id }}"},
            dataType:'html',
            success:function(data){
                // var men =  "received JSON:" + JSON.stringify(data);
                // $('#choose').html(function(){
                //     return men;
               // alert(data)
               if(data !== 0){
                    var a = "女士";
                choose.innerHTML = a;
                choose.style.color = 'orange';
              }
            },
            error:function(){
                alert('ajax请求失败');
            },
        });
    }
</script>



