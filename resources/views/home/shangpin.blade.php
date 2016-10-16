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
<link rel="stylesheet" href="{{ asset('admins/bootstrap/css/bootstrap1.css') }}">
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
				<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=1"><li>男子</li></a>
				<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0"><li>女子</li></a>
			</ul>
		</div>
		<div class="smenu-list border-top">
			<h4 class="open clearfix">产品类别<span>&nbsp;</span></h4>
			<ul class="smenulist clearfix" >
				<a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=4"><li>鞋</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=7"><li>上装</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=8"><li>下装</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=10"><li>泳镜</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=44"><li>泳帽</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=45"><li>泳衣</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=55"><li>配件</li></a><a href="http://www.361sport.com/index.php?m=Product&a=index&pclass=78"><li>新品上市</li></a>			</ul>
		</div>
	</div>
	<div class="search-list">
				<div class="search-choose clearfix">
			<div class="youchoose"><b>您的选择：</b></div>
			<div class="chooseleft">
							</div>
			<div class="chooseright"><a href="/index.php?m=Product&a=index">全部撤销</a><span>共<em>2377</em>件产品</span></div>
		</div>
		<div class="sr-chooseCon">
			<div id="other-search">
				<div class="chooseCon01">
					<table  cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td class="choosetitle">尺&nbsp;&nbsp;&nbsp;码</td>
							<td  id="chimasize">
								<ul class="clearfix">
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=XS">XS</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=S">S</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=M">M</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=L">L</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=XL">XL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=XXL">XXL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=XXXL">XXXL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=4XL">4XL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=5XL">5XL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=6XL">6XL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=7XL">7XL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=8XL">8XL</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=25">25</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=26">26</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=27">27</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=28">28</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=29">29</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=30">30</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=31">31</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=32">32</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=33">33</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=34">34</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=35">35</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=36">36</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=37">37</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=38">38</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=39">39</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=40">40</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=41">41</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=42">42</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=43">43</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=44">44</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&size=45">45</a></li>								</ul>
							</td>
							<td id="more"><a href="javascript:void(0);">更多>></a></td>
						</tr>
					</table>
				</div>
				<div class="chooseCon01">
					<table cellpadding="0" cellspacing="0">
						<tr  valign="top">
							<td  class="choosetitle">颜&nbsp;&nbsp;&nbsp;色</td>
							<td>
								<ul class="clearfix">
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%99%BD">白</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%BA%A2">红</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E9%BB%84">黄</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E6%A9%99">橙</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%BB%BF">绿</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%B4%AB">紫</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E8%93%9D">蓝</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E7%81%B0">灰</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E9%BB%91">黑</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&color=%E6%A3%95">棕</a></li>								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class="chooseCon01">
					<table  cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td class="choosetitle">上市时间</td>
							<td id="chimasize">
								<ul class="clearfix">
									<li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=%E5%BE%80%E5%B9%B4xx%E5%AD%A3">往年xx季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E6%98%A5%E5%AD%A3">2016春季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E7%BA%AF%E5%AD%A3">2016年纯季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E7%A7%8B%E5%AD%A3">2016年秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E6%98%A5%E5%AD%A3">2016年春季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E6%98%A5%E5%A4%8F%E5%AD%A3">2016年春夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E5%A4%8F%E5%AD%A3">2016年夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%B9%B4%E5%86%AC%E5%AD%A3">2016年冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016%E5%A4%8F%E5%AD%A3">2016夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2016-06-15">2016-06-15</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E7%A7%8B%E5%AD%A3">2015秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E6%98%A5%E5%AD%A3">2015春季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E6%98%A5%E5%A4%8F%E5%AD%A3">2015春夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E5%B9%B4%E7%A7%8B%E5%AD%A3">2015年秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E5%B9%B4%E6%98%A5%E5%AD%A3">2015年春季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E5%B9%B4%E6%98%A5%E5%A4%8F%E5%AD%A3">2015年春夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E5%B9%B4%E5%A4%8F%E5%AD%A3">2015年夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E5%B9%B4%E5%86%AC%E5%AD%A3">2015年冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2015%E5%86%AC%E5%AD%A3">2015冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E7%A7%8B%E5%AD%A3">2014秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E7%A7%8B%E5%AD%A3">2014年秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E7%A7%8B%E5%86%AC%E5%AD%A3">2014年秋冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E6%98%A5%E5%AD%A3">2014年春季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E6%98%A5%E5%A4%8F%E5%AD%A3">2014年春夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E6%98%A5">2014年春</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E5%A4%8F%E5%AD%A3">2014年夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%B9%B4%E5%86%AC%E5%AD%A3">2014年冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2014%E5%86%AC%E5%AD%A3">2014冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E7%A7%8B%E5%AD%A3">2013秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%B9%B4%E7%A7%8B%E5%AD%A3">2013年秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%B9%B4%E6%98%A5%E5%AD%A3">2013年春季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%B9%B4%E6%98%A5%E5%A4%8F%E5%AD%A3">2013年春夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%B9%B4%E6%98%A5%E5%A4%8F">2013年春夏</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%B9%B4%E5%A4%8F%E5%AD%A3">2013年夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%B9%B4%E5%86%AC%E5%AD%A3">2013年冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%86%AC%E5%AD%A3%E5%AD%A3">2013冬季季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2013%E5%86%AC%E5%AD%A3">2013冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2012%E5%B9%B4%E7%A7%8B%E5%AD%A3">2012年秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2012%E5%B9%B4%E6%98%A5%E5%A4%8F%E5%AD%A3">2012年春夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=2012%E5%B9%B4%E5%86%AC%E5%AD%A3">2012年冬季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=+2016%E5%B9%B4%E5%A4%8F%E5%AD%A3"> 2016年夏季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=+2015%E7%A7%8B%E5%AD%A3"> 2015秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=+2015%E5%B9%B4%E7%A7%8B%E5%AD%A3"> 2015年秋季</a></li><li><a  href="http://www.361sport.com/index.php?m=Product&a=index&time=+2015%E5%86%AC%E5%AD%A3"> 2015冬季</a></li>								</ul>
							</td>
							<td id="more"><a href="javascript:void(0);">更多>></a></td>
						</tr>
					<table>
				</div>
				<div class="chooseCon01 chooselast">
					<table cellpadding="0" cellspacing="0">
						<tr  valign="top">
							<td class="choosetitle">价&nbsp;&nbsp;&nbsp;格</td>
							<td>
								<ul class="clearfix">
									<li class="choosetitle">价&nbsp;&nbsp;&nbsp;格</li>
									<li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=1">0-100</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=2">100-200</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=3">200-300</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=4">300-1000</a></li><li><a href="http://www.361sport.com/index.php?m=Product&a=index&price=5">1000以上</a></li>									<li><input type="text" name="minprice" value="¥" />&nbsp;-&nbsp;<input type="text" name="maxprice" value="¥" /><input type="submit" name="submit" class="submit" value="确定" /></li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<a href="javascript:void(0);" class="openicon"><span>收起</span></a>
		</div>
		<div class="search-order">
            <span class="pxfs">排序方式：</span><a class=" order-time" href="http://www.361sport.com/index.php?m=Product&a=index&groupby=1&sort=ASC"><span >按上市时间排序</span></a><a href="http://www.361sport.com/index.php?m=Product&a=index&groupby=2&sort=ASC"><span  >按价格排序</span></a><a href="http://www.361sport.com/index.php?m=Product&a=index&groupby=3&sort=ASC"><span >按销量排序</span></a>
        </div>
		<div class="p_right">
			<ul class="clearfix"  id="container">
				@foreach($list as $p)
				<li>
	            	<div class="prli">
	                	<div class="prl_top"></div>
	                    	<div class="prl_c">
		                    	<div class="prl_pic" style="position:relative;">
		                        	<a href='{{ URL("/ShopList/$p->id") }}'><img src="admins/upload/{{ $p->goodsImage }}" style="width:190px;height:200px"></a>
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
</body>
</html>