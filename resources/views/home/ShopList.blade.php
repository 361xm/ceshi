<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>361°多一度热爱，361°官方商城</title>
<meta name="keywords" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在“多一度热爱”品牌精神的指引下，361°积极践行“热爱”文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。,361°童装 男款 长袖T恤" />
<meta name="description" content="作为中国领先的专业运动品牌，361°提供给所有热爱运动的年轻消费者设计与科技兼备的运动产品，并鼓励他们全情投入，不计得失地热爱运动。在“多一度热爱”品牌精神的指引下，361°积极践行“热爱”文化，将品牌、研发、设计、生产、经销融为一体，产品包括运动鞋、服及相关配件、童装、时尚休闲等多种品类，致力成为全球最令人尊敬的运动品牌企业之一。,361°童装 男款 长袖T恤" />
<link href="http://361img.361sport.com.cn/shop/css/css.css" rel="stylesheet" type="text/css" />
<link href="http://361img.361sport.com.cn/shop/css/productview.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://361img.361sport.com.cn/shop/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link href="http://361img.361sport.com.cn/shop/js/artDialog/skins/default.css" rel="stylesheet" type="text/css" />
<style>
	#dd img{
		border:1px solid #ddd;
	}
	#dd img.cc{
		border:2px solid #F39800;
	}
</style>
</head>
<body>
<div class="newheader361"> 
	<!--登陆/注册-->
    <div class="toplogin">

    <div class="logincont"> <a href="#" class="area"  target="_blank"></a>

            <?php 
                if(isset(session('adminuser')->username)){
                  ?>  
                    &nbsp;<a href="{{ URL('/center')}}" style="margin-left:8px;font-size:16px;"><em style="margin-left:8px;margin-right:8px;font-size:16px;" >{{ session('adminuser')->username }}</em></a>&nbsp;&nbsp;
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
                    <div class="search-hots-keywords"> 热门搜索：
                        <a href="http://www.361sport.com/index.php?m=Product&a=index&sports=12&pclass=4&sex=1">跑步鞋</a>
                        <a href="http://www.361sport.com/index.php?m=Product&a=index&keyword=短T">短T恤</a>
                        <a href="http://www.361sport.com/index.php?m=Pages&a=keji160323">科技助跑</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="newheaderno"></div>

<!--content Begin-->
<div class="pv_topgm">
	<div class="pv_topgm_c clearfix">
		<div class="tm_left">
			<ul>
				<a class="on">商品详情</a>|
				<a>商品评论(<span>0</span>)</a>|
				<a>尺码说明</a>
			</ul>
		</div>
		<a class="gmclose"></a>
		<div class="tm_right">
			<div class="buy">
					<span class="buynow"><a  href="javascript:void(0);" data-tid="6414"></a></span>
					<span class="addmycart"><a  href="javascript:void(0);" data-tid="6414"></a></span>			</div>
		</div>
	</div>
</div>
<div class="pv_dhtop">
	<div class="pv_dh">
    	<b>所有分类</b> > <a href="/index.php?m=Index&a=index">首页</a>  > <a href="/index.php?m=Product&a=index">商品列表</a> >361°童装 男款 长袖T恤    </div>
</div>
<!--content End-->
<!--itemBegin-->
<div class="pv_c1">
	<div class="pv_xc">
		@foreach($list as $ob)
			<div class="pvxc_left f_l">
							<div id="piclist" data-dcolor="白">
                <div class="bigpic"><img src='{{ asset("admins/upload/$ob->goodsImage") }}' rel='{{ asset("admins/upload/$ob->goodsImage") }}' width="535" height="535"  class="jqzoom"/><span class="picfd"></span></div>
                <div class="smallpic">
					<a  class="check"><img src='{{ asset("admins/upload/$ob->goodsImage") }}' data-mig='{{ asset("admins/upload/$ob->goodsImage") }}' data-big='{{ asset("admins/upload/$ob->goodsImage") }}'  height="97" width="97"/></a>
				<a  class="check"><img src='{{ asset("admins/upload/$ob->goodsImage") }}' data-mig='{{ asset("admins/upload/$ob->goodsImage") }}' data-big='{{ asset("admins/upload/$ob->goodsImage") }}'  height="97" width="97"/></a>
			<a  class="check"><img src='{{ asset("admins/upload/$ob->goodsImage") }}' data-mig='{{ asset("admins/upload/$ob->goodsImage") }}' data-big='{{ asset("admins/upload/$ob->goodsImage") }}'  height="97" width="97"/></a>
		<a  class="check"><img src='{{ asset("admins/upload/$ob->goodsImage") }}' data-mig='{{ asset("admins/upload/$ob->goodsImage") }}' data-big='{{ asset("admins/upload/$ob->goodsImage") }}'  height="97" width="97"/></a></div>
            </div>
			</div>
				
				<div class="pvxc_right f_l">
					<div class="title">
						<h1>{{ $ob->goodsname }}</h1><span class="rand5"></span>
					</div>
					<div class="price">
						<div class="pricenum">
							<div class="yahei scjg">
								吊牌价：<span class="pricec1">￥{{ $ob->goodsprice+100 }}</span>
							</div>
							销售价 <span class="pricec2">￥{{ $ob->goodsprice }}</span> <span class="zhekou">[ 6.2折   节省￥60.00 ] </span> 
						</div>
						<div class="ktfx">
							<div class="f_l pricekt" style="width:350px;padding-top:0px; position:relative;">
								<span>运费: 不包邮( <a href="javascript:void(0);">运费详情</a> )</span><br />
								<div id="postage-express">
									<div  class="triangle_border_up"><span></span></div>
									<div class="triangle_zfx">
										<table cellpadding="0" cellspacing="0">
											<tr>
												<th id="dqmc">地区</th>
												<th id="dqyf">运费</th>
											</tr>
																					<tr>
												<td>其他</td>
												<td id="show-dqyf"></td>
											</tr>									</table>
										<div class="post-remark">备注：会员满179.00包邮</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="color xx contnet_color" data-pid="6414">
						<dl class="content_right" id="dd">
							<dt>颜色分类</dt>
								<dd><img src='{{ asset("admins/upload/$ob->goodsImage") }}'  width="38" height="38"/></a></dd>
								<dd><img src='{{ asset("admins/upload/$ob->goodsImage") }}'  width="38" height="38"/></a></dd>
								<dd><img src='{{ asset("admins/upload/$ob->goodsImage") }}'  width="38" height="38"/></a></dd>
						</dl>
					</div>
					<div class="size xx contnet_size" data-pid="6414">
						<dl class="content_right">
							<dt>大小选择</dt>
							<label><input name="Fruit" type="radio" value="" class="btn-group"/>35</label>
							<label><input name="Fruit" type="radio" value="" />36</label>
							<label><input name="Fruit" type="radio" value="" />37</label>
							<label><input name="Fruit" type="radio" value="" />38</label>
							<label><input name="Fruit" type="radio" value="" />39</label>
							<label><input name="Fruit" type="radio" value="" />40</label>
							<label><input name="Fruit" type="radio" value="" />41</label>
							<label><input name="Fruit" type="radio" value="" />42</label>
						</dl>
					</div>
					<div class="xx num">
						<dl style="display:block;">
							<dt>数量</dt>
							<dd class="input"><input name="num" type="text" id="cartnum"  value="1" size="5"  onkeyup="value=value.replace(/\D+/g,'')" /></dd>
							<dd class="input2"><span class="up"></span><span class="down"></span></dd>
							<dd class="kuc">件 库存 <em id="pro_count_ku">116</em> 件<em class="tishi"> 商品库存不足 </em></dd>
							<div style="clear:both;"></div>
						</dl>
						<div class="kuc-error">您所填写的商品数量超过库存！</div>
					</div>
					<div class="yhhd">
						<dl class="clearfix">
							<dd><a href="http://www.361sport.com/index.php?m=Pages&a=zypx160805" style="border-bottom:1px solid #F00; text-decoration:none;">畅跑随心 专业跑鞋推荐</a></dd><dd><a href="http://www.361sport.com/index.php?m=Pages&a=xzdr20160608" style="border-bottom:1px solid #F00; text-decoration:none;">fun享一厦 夏季潮人搭配</a></dd>					</dl>
					</div>
					<div class="buy">
							<span class="buynow"><a  href="javascript:void(0);" data-tid="6414"></a></span>
							<span class="addmycart"><a  href="javascript:void(0);" data-tid="6414"></a></span><a name="tcmiaodian" id="tcmiaodian"></a>				</div>
					<input type="hidden" name="zti" id="zti" value=""/>
					<div class="bdsharebuttonbox">
						<span>分享到：</span><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到豆瓣网" href="#" class="bds_douban" data-cmd="douban"></a>
						<span class="favorites tostore" id="favorites"  data-tid="6414" style="position:relative;">加入收藏</span>
					</div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
			@endforeach
			<div style="clear:both;"></div>
								</div>
    </div>
</div>
<!--itemEnd-->
<div class="clear"></div>
<!--comment Begin-->
<div class="pvspxq clearfix">
	<div class="xq_left">
		<div class="xq_search">
	<div class="title">快速检索</div>
	<div class="csl">
		<div class="submitlist clearfix">
			<form id="search" action="/index.php?m=Product&a=index" method="get" name="search">
			<span>关键字</span><input type="text" name="keyword" class="keyword"><br>
			<span>价格</span><input type="text" name="price1" class="price" value="￥" onfocus="if(value =='￥'){value =''}" onblur="if(value ==''){value='￥'}"> - <input type="text" name="price2" class="price" value="￥" onfocus="if(value =='￥'){value =''}" onblur="if(value ==''){value='￥'}"><br>
			<input type="hidden" name="m" value="Product">
			<input type="hidden" name="a" value="index">
			<input class="submit pointer" type="submit">
			</form>
		</div>
		<div class="keylist clearfix">
			<ul>
				<li><a href="/index.php?m=Product&a=index&sports=13&pclass=4">篮球鞋</a><em></em></li>
				<li><a href="/index.php?m=Product&a=index&sports=12&pclass=4">跑步鞋</a></li>
				<li><a href="/index.php?m=Product&a=index&sports=20&pclass=4">综训鞋</a></li>
				<li><a href="/index.php?m=Product&a=index&sports=42&pclass=4">休闲鞋</a></li>
				<li><a href="/index.php?m=Product&a=index&sports=16&pclass=4">户外鞋</a><em></em></li>
			</ul>
		</div>
	</div>
</div>
<div class="goumguo hotsell">
	<dl class="clearfix">
		<dt>热销款 <a class="hotrefresh"></a></dt><dd><a href="/index.php?m=Product&a=show&proid=5438" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/02/22/m_56ca7b21a329e.jpg" height="82" width="82"/></a><div>￥189.00</div></dd><dd><a href="/index.php?m=Product&a=show&proid=5434" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/02/22/m_56ca739a69082.jpg" height="82" width="82"/></a><div>￥159.00</div></dd><dd><a href="/index.php?m=Product&a=show&proid=5423" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/02/20/m_56c80e9cbbf41.jpg" height="82" width="82"/></a><div>￥159.00</div></dd><dd><a href="/index.php?m=Product&a=show&proid=5418" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/02/20/m_56c7e1eaaa488.jpg" height="82" width="82"/></a><div>￥199.00</div></dd>				
	</dl>
</div>
<div class="goumguo">
	<dl>
		<dt>猜你喜欢</dt>
		<dd>
				<a href="/index.php?m=Product&a=show&proid=5199" target="_blank"><img src="http://361img.361sport.com.cn/product/2015/12/08/b_5666872d9a2d3.jpg" height="200" width="200"/></a>
			<div class="prl_info">
				<div class="prl_color">3色</div>
				<b>
					<a href="/index.php?m=Product&a=show&proid=5199" target="_blank">绒里夹克</a>
				</b>
				<div class="prl_des">
					￥245.00<span>吊牌价<font>￥499.00</font></span>
				</div>
			</div>
			</dd><dd>
				<a href="/index.php?m=Product&a=show&proid=2846" target="_blank"><img src="http://361img.361sport.com.cn/product/2015/11/17/b_564aa04c660d8.JPG" height="200" width="200"/></a>
			<div class="prl_info">
				<div class="prl_color">7色</div>
				<b>
					<a href="/index.php?m=Product&a=show&proid=2846" target="_blank">冬季男装轻质保暖白鸭绒填充羽绒服</a>
				</b>
				<div class="prl_des">
					￥199.00<span>吊牌价<font>￥539.00</font></span>
				</div>
			</div>
			</dd><dd>
				<a href="/index.php?m=Product&a=show&proid=3068" target="_blank"><img src="http://361img.361sport.com.cn/product/2015/01/16/b_54b8c5e345508.jpg" height="200" width="200"/></a>
			<div class="prl_info">
				<div class="prl_color">3色</div>
				<b>
					<a href="/index.php?m=Product&a=show&proid=3068" target="_blank">休闲鞋</a>
				</b>
				<div class="prl_des">
					￥119.00<span>吊牌价<font>￥319.00</font></span>
				</div>
			</div>
			</dd><dd>
				<a href="/index.php?m=Product&a=show&proid=5358" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/02/20/b_56c7c67ac29da.jpg" height="200" width="200"/></a>
			<div class="prl_info">
				<div class="prl_color">3色</div>
				<b>
					<a href="/index.php?m=Product&a=show&proid=5358" target="_blank">篮球鞋</a>
				</b>
				<div class="prl_des">
					￥289.00<span>吊牌价<font>￥539.00</font></span>
				</div>
			</div>
			</dd><dd>
				<a href="/index.php?m=Product&a=show&proid=5416" target="_blank"><img src="http://361img.361sport.com.cn/product/2016/02/20/b_56c7dd590c1d8.jpg" height="200" width="200"/></a>
			<div class="prl_info">
				<div class="prl_color">3色</div>
				<b>
					<a href="/index.php?m=Product&a=show&proid=5416" target="_blank">板鞋</a>
				</b>
				<div class="prl_des">
					￥199.00<span>吊牌价<font>￥369.00</font></span>
				</div>
			</div>
			</dd>					
	</dl>
</div>	</div>
	<div class="xq_right">
		<div class="dh3">
			<ul>
				<li class="check">商品详情</li>
				<li>商品评论(<span>0</span>)</li>
				<li>尺码说明</li>
			</ul>
		</div>
		<div class="spxq splm">
			<div  class="spxq_c1 yahei">
				<div class="title"></div>
				<div class="content clearfix">
					<ul>
						<li><span>品牌：</span>361°童装</li>
						<li><span>货号：</span>K6641104</li>
						<li><span>上市时间：</span>2016年秋季</li>
						<li><span>性别：</span>男</li>
					</ul>
				</div>
				<div class="content2"><span>商品描述：</span></div>
			</div>
			<div class="bottom"></div>
			<div class="piccontent">
								<img src="http://361img.361sport.com.cn/uploads/image/20160903/57cad604c97b8.jpg" alt="" /><br />
<br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc13a60f1.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc1445082.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc14edabb.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc15a3f5e.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc15d9163.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc160e12b.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc171f103.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc177c6ee.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc188629e.jpg" alt="" /><br />
<img src="http://361img.361sport.com.cn/uploads/image/20160901/57c7cc1b37783.jpg" alt="" /><br />			</div>		</div>
		<div class="sppl splm"  id="sppl1" style="display:none;">
			<div class="sppl_a">
				<div class="sppl_aleft f_l">
					<div class="rand rand5"><span>0</span> 条评论</div>
					<div class="average yahei">平均  <span class="Arial">0</span> 星</div>
				</div>
				<div class="sppl_amid f_l">
					<ul>
						<LI><font class="color">5星</font><span><span style="width:0%"></span></span>0</LI>
						<LI><font class="color">4星</font><span><span style="width:0%"></span></span>0</LI>
						<LI>3星<span><span style="width:0%"></span></span>0</LI>
						<LI>2星<span><span style="width:0%"></span></span>0</LI>
						<LI>1星<span><span style="width:0%"></span></span>0</LI>
					</ul>
				</div>
				<!--<div class="sppl_aright f_l yahei"><a class="pointer" onclick="comment_open()"></a></div>-->
			</div>
			<div class="sppl_bdh">
				<ul>
					<!--<li>热门商品评价(<span></span>)</li>-->
					<li class="check">当前产品评价(<span>0</span>)</li>
				</ul>
			</div>
			<!--<div class="sppl_bc1 pllm">
				<ul>
										<li class="page"></li>
				</ul>
			</div>-->
			<div class="sppl_bc2 pllm">
				<style type="text/css">
				.sppl_bc2 .size{ height: 20px; width: 700px; }
				</style>
				<ul>
										<li class="page" style="background:none;"></li>
				</ul>
			</div>		</div>
		<div class="spxq splm" style="display:none;">
			<div class="sizetable">
				<div class="title"></div>
				<div class="sizecon"><img src="http://361img.361sport.com.cn/shop/images/index/cmsm_07.jpg"/></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<div id="sppl2">
	<div class="sppl">
	<div class="sppl_a">
				<div class="sppl_aleft f_l">
					<div class="rand rand5"><span>0</span> 条评论</div>
					<div class="average yahei">平均  <span class="Arial">0</span> 星</div>
				</div>
				<div class="sppl_amid f_l">
					<ul>
						<LI><font class="color">5星</font><span><span style="width:0%"></span></span>0</LI>
						<LI><font class="color">4星</font><span><span style="width:0%"></span></span>0</LI>
						<LI>3星<span><span style="width:0%"></span></span>0</LI>
						<LI>2星<span><span style="width:0%"></span></span>0</LI>
						<LI>1星<span><span style="width:0%"></span></span>0</LI>
					</ul>
				</div>
				<!--<div class="sppl_aright f_l yahei"><a class="pointer" onclick="comment_open()"></a></div>-->
			</div>
			<div class="sppl_bdh">
				<ul>
					<!--<li>热门商品评价(<span></span>)</li>-->
					<li class="check">当前产品评价(<span>0</span>)</li>
				</ul>
			</div>
			<!--<div class="sppl_bc1 pllm">
				<ul>
										<li class="page"></li>
				</ul>
			</div>-->
			<div class="sppl_bc2 pllm">
				<style type="text/css">
				.sppl_bc2 .size{ height: 20px; width: 700px; }
				</style>
				<ul>
										<li class="page" style="background:none;"></li>
				</ul>
			</div>	</div>
	</div>
</div>
<div class="clear"></div>
<!--comment End-->
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<div id="bottom">
	<!--商标-->
    <div class="trademark">
    	<div class="trademark-content" style="width:1180px;">
            <div class="trademark-tip">
            	<img src="http://361img.361sport.com.cn/shop/images/newindex2016/images/foot2016.png" />

     		</div>
      		<div class="promis">
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
        	<dl>
            	<dt>关于361°</dt>
                <dd><a href="http://ir.361sport.com/s/index.php" target="_blank">投资者关系</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=10">集团简介</a></dd>
                <dd><a href="http://cn.361sport.com/shop.asp" target="_blank">店铺查询</a></dd>
                <dd><a href="http://361bift.361sport.com" target="_blank">361°BIFT</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=14">联系我们</a></dd>
            </dl>
            <dl>
            	<dt>如何购物</dt>
                <dd><a href="/index.php?m=Info&a=show&id=1&cate_id=7">购物流程</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=2&cate_id=7">订单查询</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=15&cate_id=7">会员及积分体系</a></dd>
                <!--<dd><a href="#">常见问题</a></dd>
                <dd><a href="#">帮助中心</a></dd>-->
            </dl>
            <dl>
            	<dt>支付方式</dt>
                <dd><a href="/index.php?m=Info&a=show&id=3&cate_id=7">支付方式</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=4&cate_id=7">发票说明</a></dd>
            </dl>
            <dl>
            	<dt>物流配送</dt>
                <dd><a href="/index.php?m=Info&a=show&id=5&cate_id=7">配送时间和范围</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=6&cate_id=7">配送费用</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=7&cate_id=7">商品验收</a></dd>
            </dl>
            <dl style="width:95px;">
            	<dt>售后服务</dt>
                <dd><a href="/index.php?m=Info&a=show&id=9&cate_id=7">退换货流程</a></dd>
                <dd><a href="/index.php?m=Info&a=show&id=8&cate_id=7">售后服务政策</a></dd>
            </dl>
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
      <div class="Certificate">中国 闽ICP备05003868号 ©2013 三六一度(中国)有限公司 All Rights Reserved</div>
    </div>
</div>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/jquery.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/common.js"></script>
<script type="text/javascript">
var signUrl = "/index.php?m=User&a=signIn";
</script>
<!--双十一领优惠券-->
<script type="text/javascript">
$(document).ready(function(){
	$("map#Mapjtr").find("area").live("click",function(){
		var type = $(this).attr("data-type");
		var linkurl = "/index.php?m=Pages&a=getcoupon3";
		$.post(linkurl,{type:type},function( result ){
			if( result.status == '1' ){
				artDialog.login("账户登陆"); return false;
			} else if( result.status == '2' ){
				artDialog.tips(result.msg,2,"error"); return false;
			} else {
				artDialog.tips(result.msg,2,"succeed"); return true;
			}
		},"json")
	});
	$("map#Mapschl").find("area").live("click",function(){
		var type = $(this).attr("data-type");
		var linkurl = "/index.php?m=Pages&a=getcoupon3";
		$.post(linkurl,{type:type},function( result ){
			if( result.status == '1' ){
				artDialog.login("账户登陆"); return false;
			} else if( result.status == '2' ){
				artDialog.tips(result.msg,2,"error"); return false;
			} else {
				artDialog.tips(result.msg,2,"succeed"); return true;
			}
		},"json")
	});
});
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?30e32478a250ebe4ba15f477df282ae7";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">
var  loginUrl="/index.php?m=Member&a=checkLogin";
$(document).ready(function() {
	$(".variousv").fancybox({
		'padding'			: 0,
		'autoScale'			: false,
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'width'    : 860,
		'height'   : 600,
		'overlayColor' : '#000'
	});
		// 中秋博饼兑换窗口开始 2015/9/19 @txx
	$("a.btn_exchange").live("click",function(){
		$(".autumn").fadeIn("fast");
	});
	$("a.iframeclose").live("click",function(){
		$(".autumn").hide("fast");
	});
	//中秋博饼兑换窗口结束  2015/9/19 @txx
});
</script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/jquery.imagezoom.min.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/marquee.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/detaile.js"></script>
<!-- <script src="{{ asset('js/jquery.darktooltip.js')}}"></script>
<script src="{{ asset('js/examples.js')}}"></script>
<script type="text/javascript" src="{{ asset('home/js/jquery-1.8.0.min.js')}}"></script> -->
<script type="text/javascript">
var collectUrl = "/index.php?m=Product&a=collect";
var cartAjax = "/index.php?m=Product&a=cart";
var tcAjax = "/index.php?m=Product&a=cartpackage";
//var ajaxurl = "/index.php?m=Product&a=ajaxchange";
var buyUrl = "/index.php?m=Product&a=buyone";
var hotsellUrl = "/index.php?m=Product&a=hotselllist";
var skulist = '[{"pro_color":"\u767d","pic1":"\/2016\/09\/01\/57c7cc76250b4.jpg","colorsize":[{"pro_sizes":"110","pro_count":"3"},{"pro_sizes":"120","pro_count":"10"},{"pro_sizes":"130","pro_count":"15"},{"pro_sizes":"140","pro_count":"23"},{"pro_sizes":"150","pro_count":"11"},{"pro_sizes":"160","pro_count":"6"},{"pro_sizes":"170","pro_count":"0"}],"number":7},{"pro_color":"\u7ea2","pic1":"\/2016\/09\/01\/57c7cc775698f.jpg","colorsize":[{"pro_sizes":"110","pro_count":"3"},{"pro_sizes":"120","pro_count":"6"},{"pro_sizes":"130","pro_count":"8"},{"pro_sizes":"140","pro_count":"9"},{"pro_sizes":"150","pro_count":"8"},{"pro_sizes":"160","pro_count":"3"},{"pro_sizes":"170","pro_count":"0"}],"number":7},{"pro_color":"\u6df1\u84dd","pic1":"\/2016\/09\/01\/57c7cc7887982.jpg","colorsize":[{"pro_sizes":"110","pro_count":"0"},{"pro_sizes":"120","pro_count":"0"},{"pro_sizes":"130","pro_count":"4"},{"pro_sizes":"140","pro_count":"3"},{"pro_sizes":"150","pro_count":"3"},{"pro_sizes":"160","pro_count":"1"},{"pro_sizes":"170","pro_count":"0"}],"number":7}]';
var piclist = '[{"pro_color":"\u767d","pic1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc76250b4.jpg","pic2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc766ffb2.jpg","pic3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc76b67b8.jpg","pic4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc770ba11.jpg","mig1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc76250b4.jpg","sig1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc76250b4.jpg","mig2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc766ffb2.jpg","sig2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc766ffb2.jpg","mig3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc76b67b8.jpg","sig3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc76b67b8.jpg","mig4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc770ba11.jpg","sig4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc770ba11.jpg"},{"pro_color":"\u7ea2","pic1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc775698f.jpg","pic2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc779e52f.jpg","pic3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc77e4b1f.jpg","pic4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc7839e81.jpg","mig1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc775698f.jpg","sig1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc775698f.jpg","mig2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc779e52f.jpg","sig2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc779e52f.jpg","mig3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc77e4b1f.jpg","sig3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc77e4b1f.jpg","mig4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc7839e81.jpg","sig4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc7839e81.jpg"},{"pro_color":"\u6df1\u84dd","pic1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc7887982.jpg","pic2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc78cf2b4.jpg","pic3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc79318fe.jpg","pic4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc797c59d.jpg","mig1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc7887982.jpg","sig1":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc7887982.jpg","mig2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc78cf2b4.jpg","sig2":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc78cf2b4.jpg","mig3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc79318fe.jpg","sig3":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc79318fe.jpg","mig4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/57c7cc797c59d.jpg","sig4":"http:\/\/361img.361sport.com.cn\/product\/2016\/09\/01\/m_57c7cc797c59d.jpg"}]';
var loginUrl = "/index.php?m=Member&a=checkLogin";
$("img").click(function(){
   $('img').removeClass('cc');
	$(this).toggleClass('cc');
})
</script>
</body>
</html>
