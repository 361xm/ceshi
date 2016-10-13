@extends('home.base.base')
@section('content')
<body style="background-color:#EEE">
<link rel="stylesheet" type="text/css" href="../../home/css/simple-calendar.css">
<!--图片轮播-->

	<div class="banana">
		<div class="innterwrap">
			<ul class="focusList">
				<ul class="slides">		
					<li> <a href="#" target="_blank" ><img src="../../home/images/gc160902_01.jpg"/></a> </li>			
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp160913.jpg"/></a> </li>
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp160826.jpg"/></a> </li>
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp20160726.jpg"/></a> </li>
					<li> <a href="#" target="_blank" ><img src="../../home/images/hdp160617.jpg"/></a> </li>
				</ul>
			</ul>
			<ol class="btnlist">			
				<li class="btn">敢超自己——敢超10K</li>
				<li>漫游全球——国庆出游季</li>
				<li>运动焕新——秋装上市</li>	
				<li>热爱是金——铸就光芒</li>
				<li>耀夜而出——幻彩跑鞋</li>
			</ol>
		</div>
	</div>
	<div id="container">
		<div class="center-pic">
			<ul>
				<li style="width:385px;"><a href="{{ URL('/newlink') }}" target="_blank" ><img  src="../../home/images/109.jpg"/></a></li>
				<li style="width:383px;"><a href="{{ URL('/link') }}" target="_blank" ><img  src="../../home/images/home01.jpg"/></a></li>
				<li style="margin-right:0px;width:394px;"> 
					<a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6160"  target="_blank"  class="pico"><img  src="../../home/images/homeg_11.jpg"/></a>
					<a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6159" target="_blank" class="pico"><img  src="../../home/images/homeg_14.jpg"/></a>
				</li>
			</ul>
		</div>
			<div class="center-du" style="padding-bottom:30px;">
				<div id="content-wrapper">
	  				<div class="inner clearfix">
	      				<div id = 'calendar' style="width:100%;">

	      				</div>
	    			</div>
			<!-- <div class="f_l" style="width:511px;"><img  src="../../home/images/homeg_18.jpg"/></div> -->
			<!-- <div class="f_l" style="width:404px;margin-left:13px;"><img  src="../../home/images/homeg_20.jpg" usemap="#Maphylxzsqy"/>
				<map name="Maphylxzsqy" id="Maphylxzsqy">
					<area shape="rect" coords="37,63,121,155" href="/index.php?m=Info&a=show&id=1" target="_blank"/>
					<area shape="rect" coords="159,61,241,154" href="/index.php?m=Info&a=show&id=15" target="_blank"/>
					<area shape="rect" coords="275,64,366,161" href="/index.php?m=Info&a=show&id=21" target="_blank"/>
				</map>
			</div> -->
			<!-- <div class="right_u"> <a href="{{ URL('/login') }}" target="_blank" class="cd_reg">注册</a><br />
				<a href="{{ URL('/login') }}" target="_blank" class="cd_login">登录</a> </div> -->
			</div>
		<div class="hkjd">
			<div class="piclist" style="margin-top:60px;">
				<ul>
					<li><a href="{{ URL('/lk1')}}" target="_blank"><img  src="../../home/images/homeg_28.jpg"/><span>跑步系列</span></a></li>
					<li><a href="{{ URL('/lk2')}}" target="_blank"><img  src="../../home/images/homeg_32.jpg"/><span>综训系列</span></a></li>
					<li><a href="{{ URL('/lk3')}}" target="_blank"><img  src="../../home/images/homeg_30.jpg"/><span>休闲系列</span></a></li>
					<li><a href="{{ URL('/lk4')}}" target="_blank"><img  src="../../home/images/homeg_34.jpg"/><span>篮球系列</span></a></li>
					<li><a href="{{ URL('/lk5')}}" target="_blank"><img  src="../../home/images/homeg_38.jpg"/><span>足球系列</span></a></li>
					<li style="margin-right:0px;"><a href="{{ URL('/lk6')}}" target="_blank"><img  src="../../home/images/homeg_36.jpg"/><span>户外系列</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="hprolist_c">
		<!--1F   遍历这一块-->

		<div class="hprolist">
			<div class="hptitle" style="background-image:url(cssimg/homeg_123.jpg)">
				<strong><span style="color:#ddd;font-size:20px;float:left;padding-top:10px;padding-left:10px;" >1F-男鞋</span></strong>
				<a class="on" data-has="1" data-id="10" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=12&pclass=4" target="_blank">跑步</a>
				<a 	data-has="" data-id="11" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=20&pclass=4" target="_blank">综训</a>
				<a 	data-has="" data-id="12" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=16&pclass=4" target="_blank">户外</a>
				<a 	data-has="" data-id="13" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=17&pclass=4" target="_blank">休闲</a>

			</div>

			<div class="clearfix">
				<div class="hpleft">
					<dl class="clearfix">
						<dt>男鞋</dt>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5444" target="_blank"><img  src="../../home/images/homeg_93.jpg"></a></dd>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5408" target="_blank"><img  src="../../home/images/homeg_95.jpg"></a></dd>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5509" target="_blank"><img  src="../../home/images/homeg_100.jpg"></a></dd>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5511" target="_blank"><img  src="../../home/images/homeg_113.jpg"></a></dd>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5510" target="_blank"><img  src="../../home/images/homeg_111.jpg"></a></dd>
							<dd></dd>
						</dl>
						<dl class="clearfix">
						<dt>明星系列</dt>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5447" target="_blank"><img  src="../../home/images/homeg0415_26.jpg"></a></dd>
							<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5512" target="_blank"><img  src="../../home/images/homeg0415_28.jpg"></a></dd>
					</dl>
				</div>
			</div>
		</div>
		<!--1F   遍历这一块-->
		@foreach($list as $type)
			<div class="hprolist" style="margin-top:40px;padding-bottom:20px;">
				<div class="hptitle" style="background-image:url(cssimg/homeg_123.jpg);">
					<strong><span style="color:#ddd;font-size:20px;float:left;padding-top:10px;padding-left:10px;" >{{ $type->classname }}</span></strong>
					<a class="on" data-has="1" data-id="10" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=12&pclass=4" target="_blank">跑步</a>
					<a 	data-has="" data-id="11" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=20&pclass=4" target="_blank">综训</a>
					<a 	data-has="" data-id="12" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=16&pclass=4" target="_blank">户外</a>
					<a 	data-has="" data-id="13" href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=17&pclass=4" target="_blank">休闲</a></div>
				<div class="clearfix">
					<div class="hpleft">
						<dl class="clearfix">
							<dt>{{ $type->decipt }}</dt>
								<dd><a href="#"><img  src="../../home/images/homeg_93.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_95.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_100.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_113.jpg"></a></dd>
								<dd><a href="#"><img  src="../../home/images/homeg_111.jpg"></a></dd>
								<dd></dd>
							</dl>
							<dl class="clearfix">
							<dt>精品系列</dt>
								<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5447" target="_blank"><img  src="../../home/images/homeg0415_26.jpg"></a></dd>
								<dd><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=5512" target="_blank"><img  src="../../home/images/homeg0415_28.jpg"></a></dd>
						</dl>
					</div>				
					<div class="hpright">
						<dl style="display:block">
							<dt>
							<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=12&pclass=4" target="_blank"><img src="admins/upload/{{ $type->classimage }}" width="285" height="470" /></a>
							</dt>
							<dd><a href="/index.php?m=Product&a=show&proid=5749" target="_blank"><img src="../../home/images/m_574c0739f2abf.jpg" width="174" height="174"/><span>常规跑鞋<br /><strong>RMB139.00</strong></span></a></dd><dd><a href="/index.php?m=Product&a=show&proid=5747" target="_blank"><img src="../../home/images/m_574c062d3a2b6.jpg" width="174" height="174"/><span>常规跑鞋<br /><strong>RMB189.00</strong></span></a></dd><dd><a href="/index.php?m=Product&a=show&proid=5707" target="_blank"><img src="../../home/images/m_573ad9cc17268.jpg" width="174" height="174"/><span>常规跑鞋<br /><strong>RMB189.00</strong></span></a></dd><dd><a href="/index.php?m=Product&a=show&proid=5511" target="_blank"><img src="../../home/images/m_56f238f568e90.jpg" width="174" height="174"/><span>常规跑鞋<br /><strong>RMB169.00</strong></span></a></dd><dd><a href="/index.php?m=Product&a=show&proid=4866" target="_blank"><img src="../../home/images/m_56284130a3848.jpg" width="174" height="174"/><span>跑步文化鞋（N）<br /><strong>RMB169.00</strong></span></a></dd><dd><a href="/index.php?m=Product&a=show&proid=4069" target="_blank"><img src="../../home/images/m_5599e2a987229.jpg" width="174" height="174"/><span>复古跑鞋(N)<br /><strong>RMB159.00</strong></span></a></dd>						</dl><dl >
							<dt>
							<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=20&pclass=4" target="_blank"><img src="../../home/images/571458b9a52d7.jpg" width="285" height="470" /></a>
							</dt>
													</dl><dl >
							<dt>
							<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=16&pclass=4" target="_blank"><img src="../../home/images/571458c806fb0.jpg" width="285" height="470" /></a>
							</dt>
													</dl><dl >
							<dt>
							<a href="http://www.361sport.com/index.php?m=Product&a=index&sex=0&sports=17&pclass=4" target="_blank"><img src="../../home/images/571458d190630.jpg" width="285" height="470" /></a>
							</dt>
													</dl>				</div>
				</div>
			</div>

			<script type="text/javascript" src="../../home/js/simple-calendar.js"></script>
	    	<script>
	    		 var myCalendar = new SimpleCalendar('#calendar');
	    	</script>
			@endforeach
</body>
@endsection
