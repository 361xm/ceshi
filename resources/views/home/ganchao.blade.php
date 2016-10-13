@extends('home.base.base')
@section('content')
<style type="text/css">
body{margin:0px; padding:0px;background:#CCC;}
.container{min-width:1200px; max-width:1920px; position:relative; margin:auto; overflow:hidden; width:100%; height:4480px;background:#CCC;}
.container .container2{width:1920px; left:50%; text-align:center; margin-left:-960px; position:absolute;background:#ccc;}
</style>
<div class="container">
	<div class="container2">
	    <div class="mBan2 ">
		<div id="slideBox" class="slideBox">
			<div class="hd"><ul><li></li><li style="margin-left:16px;"></li></ul></div>
			<div class="bd">
				<ul>
					<li><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6428"><img src="../../home/images/gc160902_01.jpg" /></a></li>
					<li><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6430"><img src="../../home/images/gc160902_01_02.jpg" /></a></li>
				</ul>
			</div>
		</div>
	    </div>
	    <div><img src="../../home/images/gc160902_02.jpg" /></div>
	    <div class="video" style="height:760px;">
	    	<div class="mBan2" style="width:1180px; margin:0px auto; border:none; height:626px;overflow:hidden; padding-top:51px;">
			<div id="slideBox" class="slideBox">
				<div class="hd" style="display:none;"><ul><li></li><li></li><li></li></ul></div>
				<div class="bd  ttt">
					<ul>
						<li data-tid="1"><img src="../../home/images/video_1.jpg" /></li>
						<li data-tid="2"><img src="../../home/images/video_2.jpg" /></li>
						<li data-tid="3"><img src="../../home/images/video_3.jpg" /></li>
					</ul>
				</div>
				<div class="pnBtn prev"><a class="arrow1" href="javascript:void(0)"></a> </div>
				<div class="pnBtn next"><a class="arrow1" href="javascript:void(0)"></a> </div>
			</div>
		    </div>
	    </div>
	    <div style="height:0px; width:100%;"></div>
	    <div class="shoes" style="height:1158px;">
		    <div class="mBan2" style="width:1180px; margin:0px auto; border:none; height:1158px;overflow:hidden;">
			<div id="slideBox" class="slideBox">
				<div class="hd" style="display:none;"><ul><li></li><li style="margin-left:16px;"></li></ul></div>
				<div class="bd">
					<ul>
						<li><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6428"><img src="../../home/images/shoes_man.png" /></a></li>
						<li><a href="http://www.361sport.com/index.php?m=Product&a=show&proid=6430"><img src="../../home/images/shoes_woman.png" /></a></li>
					</ul>
				</div>
				<div class="pnBtn prev"><a class="arrow" href="javascript:void(0)"></a> </div>
				<div class="pnBtn next"><a class="arrow" href="javascript:void(0)"></a> </div>
			</div>
		    </div>
	    </div>
	    <div><img src="../../home/images/gc160902_05.jpg" /></div>
	    <div><img src="../../home/images/gc160902_06.jpg" /></div>
	    <div><img src="../../home/images/gc160902_07.jpg" border="0" usemap="#Map" />
          <map name="Map" id="Map">
            <area shape="rect" coords="372,52,761,217" href="http://www.361sport.com/index.php?m=Pages&amp;a=gcinfo160914" target="_blank" />
            <area shape="rect" coords="767,54,1150,215" href="http://www.361sport.com/index.php?m=Pages&amp;a=gcinfo160923" target="_blank" />
            <area shape="rect" coords="1164,53,1547,217" href="http://www.361sport.com/index.php?m=Pages&amp;a=gcinfo160927" target="_blank" />
            <area shape="rect" coords="371,224,758,388" href="http://www.361sport.com/index.php?m=Pages&amp;a=gcinfo1609272" target="_blank" />
            <area shape="rect" coords="768,225,1147,392" href="###" />
            <area shape="rect" coords="1167,227,1544,385" href="###" />
            <area shape="rect" coords="374,395,760,561" href="###" />
            <area shape="rect" coords="772,399,1149,559" href="###" />
            <area shape="rect" coords="1162,395,1546,556" href="###" />
          </map>
      </div>
	    <div><img src="../../home/images/gc160902_08.jpg" /></div>
	</div>
</div>
<div id="iframetab" style="display:none;">
	<div class="iframebg"></div>
	<div class="iframetab">
		<div class="iframe-viedo">
			<a class="close" href="javascript:void(0);">&nbsp;</a>
			<div class="viedo01" id="fl1"><embed src="../../home/Flash/flvplayer.swf" autostart="false" loop="false" height="523" width="940"></embed></div>
			<div class="viedo01" id="fl2"><embed src="../../home/Flash/flvplayer.swf" autostart="false" loop="false" height="523" width="940"></embed></div>
			<div class="viedo01" id="fl3"><embed src="../../home/Flash/flvplayer.swf" autostart="false" loop="false" height="523" width="940"></embed></div>
		</div>
	</div>
</div>
<script src="../../home/js/wb.js" type="text/javascript" charset="utf-8"></script>
@endsection