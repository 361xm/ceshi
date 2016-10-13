@extends('home.base.base')
@section('content')
<link href="../../home/css/product.css" rel="stylesheet" type="text/css" />
<link href="../../home/css/about.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../home/css/style.css" />
<style type="text/css">
.showpdl{padding-left:20px;}
.p_left .pl_c .pclass ul li.showcurrent{background:#f79300; width:130px;}
.p_left .pl_c .pclass ul li.showcurrent a{ color:#FFFFFF;}
</style>
<!--内容-->
<div class="mcontop">
	<div class="mcon clearfix">
    	<div class="m_left f_l"><b><a href="/index.php?m=Index&a=index" style="color:#000">首页</a></b> > 
集团简介 > 2016年品牌新闻
        </div>
    </div>
</div>
<div class="pcon clearfix" style="margin-top:10px;">
	<div class="p_left">
    	<div class="pl_top"></div>
        <div class="pl_c">
        	<div class="plnum"><span>实时新闻</span></div>
            <div class="selection">
				<div>
                	   <div class="pclass" style='display:block'>
                    	<ul style="padding:6px 0px 22px 24px">
                        	<li><a href="{{ URL('/info') }}">品牌新闻</a></li>
                        </ul>
                    </div>
				</div>        	
			</div>
        </div>
        <div class="pl_bottom2"></div>
    </div>
    
    <div class="pa_right">
    	<h1>2016年品牌新闻</h1>
   	@foreach($list as $wen)
        <div class="content">
				<div class="pp_news" style="margin-top:50px;">
				<h1>{{ $wen->smallhead}}</h1>
				<div class="pp_news_about clearfix">
					<div class="pp-pic left"><img  style="width:350px;height:200px;" src="http://local153.com/admins/upload/{{ $wen->img }}" /></div>
					<div class="pp-info left">
						<div class="pp-info-desc">{{ $wen->describe }}</div>
						<div class="pp-date">{{ $wen->time }}</div>
						<a class="pp-more" href="">{{ $wen->bithead }}</a>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div				
		</div>
    </div>
    @endforeach
</div>
<div class="clear"></div>
@endsection