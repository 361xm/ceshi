<link href="http://361img.361sport.com.cn/shop/css/order.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('home/gouwche/css/lanrenzhijia.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('home/gouwche/js/jquery.1.4.2-min.js')}}"></script>
<script src="{{ asset('home/gouwche/js/Calculation.js')}}"></script>
<script src="{{ asset('home/gouwche/jquery.spinner.min.js')}}"></script>
<script src="{{ asset('home/gouwche/bootstrap-spinner.css')}}"></script>
<style type="text/css">
.divA{ width:320px; margin-left:500px; padding-top:4px;	height:200px;}
.divA a{padding: 13px 50px;margin-left:55px; display:inline-block;}
.tishi1{width:350px;margin-bottom: 10px;float:right;color:#000;background:#F79646;height:15px;padding:3px 5px;letter-spacing:1px;}
.order_l_r1 { margin-bottom: 30px; }
.gw_num{border: 1px solid #dbdbdb;width: 110px;line-height: 26px;overflow: hidden;}
.gw_num em{display: block;height: 26px;width: 26px;float: left;color: #7A7979;border-right: 1px solid #dbdbdb;text-align: center;cursor: pointer;}
.gw_num .num{display: block;float: left;text-align: center;width: 52px;font-style: normal;font-size: 14px;line-height: 24px;border: 0;}
.gw_num em.add{float: right;border-right: 0;border-left: 1px solid #dbdbdb;}
</style>
<div id="dingdan">

  <div class="ordercon clearfix">
      <div class="order_l_right order_l_r2 f_r"></div>
      <div class="clear"></div>
      <div class="backcart"><a href="{{ URL('/ShopList')}}">返回修改购物车</a></div>
  </div>
  <div class="clear"></div>
  <div class="ordercon">
    <div class="order2_listdh">订单(敢死队保镖配送)</div>
    <div class="order_list border-right" style="width: 998px;">
      <div class="order2_tb1 mauto">
      <div class="title">收货相关信息</div>
      <?php
          if(isset($data)){
      ?> 

      <table border="0" cellpadding="10" cellspacing="0" width="100%">
          <tbody><tr>
            <td style="padding-left: 8px;"><strong>·</strong>&nbsp;收货地址：<input name="addressid" id="addressid" value="32446" type="hidden">
              <div style="margin-top: 10px;" id="addresslist">
                <ul>
                  <li id="address-32446" style="height: 30px; line-height: 30px;">
                    <div style="float: left; margin-top: 8px; padding-right: 5px;"><input name="address_id" checked="checked" id="address_id" value="32446" type="radio"></div>
                    <span class="addxx"><strong style="font-weight: 100;">{{ $data->area}}[收]</strong> &nbsp;&nbsp;<em style="color: rgb(249, 147, 2);">[默认地址]</em>&nbsp;&nbsp;<a id="addressedit" href="{{ URL('/doCenter')}}" class="pointer">编辑</a></span>
                  </li>             </ul>
                            </div>
              <div id="addressedit">
              </div>          </td>
          </tr>
      </tbody></table>
      <div class="title">送货方式</div>
      <table cellpadding="10" cellspacing="0" width="100%">
        <tbody><tr>
          <td style="padding-left: 8px;"><strong>·</strong>&nbsp;普通快递</td>
          <td style="text-align: right; color: rgb(153, 153, 153);">（尊敬的顾客，我司电商发货采用分仓模式，您购买的商品可能会分拆成多个包裹配送，给您带来的不便还请谅解。）&nbsp;&nbsp;</td>
        </tr>
      </tbody></table>    
      <div class="title">商品信息</div>
          <table class="tb2" border="0" cellpadding="10" cellspacing="0" width="100%">
        <tbody><tr>
        <td class="padding10">商品名称</td>
        <td class="padding10" width="15%">价格</td>
        <td class="padding10" width="11%">促销价</td>
        <td class="padding10" width="13%">数量</td>
        <td class="padding10" align="center" width="10%">会员价</td>
        <td class="padding10" width="14%">小计</td>
        </tr>     <tr>
        <td colspan="6" style="border-bottom: medium none;">
          <table id="sontable" style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
              <td>
                <div class="sontable1"><a href="http://www.361sport.com/index.php?m=Product&amp;a=show&amp;proid=6390" target="_top" alt="立领长T恤" title="立领长T恤"><img src='{{ asset("admins/upload/".$list->goodsimg) }}' title="立领长T恤" height="50" width="50"></a>
                </div>
                <div class="sontable2">
                  <p><a href="http://www.361sport.com/index.php?m=Product&amp;a=show&amp;proid=6390" target="_top" alt="立领长T恤" title="立领长T恤">{{ $list->goodname }}</a></p>
                  <p>颜色：{{ $list->color}}&nbsp;&nbsp;尺码：{{$list->sizes}}</p>
                </div>
                <div style="clear: both;"></div>
              </td>
              <td align="center" width="15%" id="priced">{{ $list->goodsprice}}</td>
              <td align="center" width="11%"> {{ $list->goodsprice-100}}</td>
              <td align="center" width="13%">
                <div><input type="text" style="width:50px;border:2px solid red;" id="txe" onblur="chufa()"></div>
                            </td>
                            <!-- 这是为了商品价格相城 -->
                            <script type="text/javascript">
                            function chufa(){
                                // 商品的个数
                                var txe = document.getElementById('txe');
                                // 商品的价格
                                var priced = document.getElementById('priced');
                                // 商品的小鸡
                                var xiaoji = document.getElementById('xiaoji');
                                // 商品的应付总额
                                var zonge = document.getElementById('zonge');
                                // 传值到数据库
                                var countd = document.getElementById('countd');
                                  // 传用户总输入
                                var newprice = document.getElementById('newprice');

                               var newmyform = document.newmyform;
                               // newmyform.action="/zhifu/"+zhi+"/"+geshu;
                                var bianl = priced.innerHTML*txe.value;

                                xiaoji.innerHTML=bianl;

                                zonge.innerHTML = bianl; 
                              }

                            </script>
              <td align="center" width="10%">{{ $list->goodsprice-100}}</td>
              <td align="center" width="14%" id="xiaoji"></td>
            </tr>       </tbody></table>
        </td>
        </tr>   </tbody></table>
      <div class="clearfix order2_tb2">
        <div class="obi_right f_r">
          <table id="order2" cellpadding="0" cellspacing="0">
            <tbody><tr>
              <th style="width: 170px;" align="right"><span style="font-size: 16px;">{{ $list->count}}</span>&nbsp;件商品总计：</th><td align="left"><span class="font14">{{$list->count*$list->goodsprice}}</span><span>元</span></td>
            </tr>
            <tr>
              <th>运费：</th><td><span class="font14" id="express">0.00元</span></td>
            </tr>
            <tr>
              <th>优惠价格：</th><td><span class="font14"><span class="couponprice">0.00元</span></span></td>
            </tr>
            <tr>
              <th>应付总额：</th>
              <td><span class="price" id="zonge"></span><span>元</span></td>
            </tr>
          </tbody></table>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <?php
      }else{
          echo "";
      }
      ?>
    <div class="order_buyinfo clearfix" style="height: 137px;">
    <div class="f_r tjcart">请核对以上信息，确认无误后点击"提交订单"<input name="uselectaddress" id="uselectaddress" value="32446" type="hidden"><input name="ctype" id="ctype" value="" type="hidden"><input name="cid" value="" id="cid" type="hidden"><input name="cprice" id="cprice" value="" type="hidden">
        <a href="{{URL('/zhifu').'/'.$list->id}}"><input class="pointer" name="button" id="submitbutton" value="提交" type="submit"></a>
    </div></div>
  </div>
  <script type="text/javascript">
  </script>
  </div>
</div>

<!--内容-->
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/artDialog/artDialog.js"></script>
<script type="text/javascript" src="http://361img.361sport.com.cn/shop/js/cart.js"></script>
<script type="text/javascript">
var delCart = "/index.php?m=Cart&a=delcart";
var lessCart = "/index.php?m=Cart&a=changecart";
var chUrl = "/index.php?m=Cart&a=changeprice";
var ajaxCart = "/index.php?m=Cart&a=ajaxcart";
var delCartAll = "/index.php?m=Cart&a=deleall";
var balanceCart = "/index.php?m=Cart&a=balance";
var addCart = "/index.php?m=Cart&a=addcart";
var collectUrl = "/index.php?m=Product&a=collect";
var cartDelete = "/index.php?m=Cart&a=getCartDelete";
var cartAllCart = "/index.php?m=Cart&a=delAllCart";
var loginUrl = "/index.php?m=Member&a=checkLogin";
</script>
<link rel='stylesheet' type='text/css' property='stylesheet' href='http://lamp153.com/_debugbar/assets/stylesheets?v=1476149102'><script type='text/javascript' src='http://lamp153.com/_debugbar/assets/javascript?v=1476149103'></script><script type="text/javascript">jQuery.noConflict(true);</script>
<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Queries", "widget": new PhpDebugBar.Widgets.SQLQueriesWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.setDataMap({
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar);
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/lamp153.com\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"0304e3a643cd2b301dba7f945da16713","datetime":"2016-10-16 08:17:13","utime":1476605833.7637,"method":"GET","uri":"\/Shoping","ip":"192.168.153.24"},"php":{"version":"5.6.8","interface":"apache2handler"},"messages":{"count":0,"messages":[]},"time":{"start":1476605833.495,"end":1476605833.7637,"duration":0.26869821548462,"duration_str":"268.7ms","measures":[{"label":"Booting","start":1476605833.495,"relative_start":0,"end":1476605833.6927,"relative_end":1476605833.6927,"duration":0.19769406318665,"duration_str":"197.69ms","params":[],"collector":null},{"label":"Application","start":1476605833.6307,"relative_start":0.13569116592407,"end":1476605833.7637,"relative_end":0,"duration":0.13300704956055,"duration_str":"133.01ms","params":[],"collector":null}]},"memory":{"peak_usage":8650752,"peak_usage_str":"8.25MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":1,"templates":[{"name":"home.Shoping (\\resources\\views\\home\\Shoping.blade.php)","param_count":0,"params":[],"type":"blade"}]},"route":{"uri":"GET Shoping","middleware":"web","controller":"App\\Http\\Controllers\\NewlinkController@Shoping","namespace":"App\\Http\\Controllers","prefix":null,"where":[],"file":"\\app\\Http\\Controllers\\NewlinkController.php:40-43"},"queries":{"nb_statements":0,"nb_failed_statements":0,"accumulated_duration":0,"accumulated_duration_str":"0\u03bcs","statements":[]},"swiftmailer_mails":{"count":0,"mails":[]},"session":{"_token":"54ZOhWEvPk4jT084Mw9RTNf7538qq0bkxxbJh61z","_previous":"array:1 [\n  \"url\" => \"http:\/\/lamp153.com\/Shoping\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","adminuser":"{#335\n  +\"id\": 24\n  +\"adminname\": \"wangjie\"\n  +\"password\": \"123\"\n  +\"status\": \"1\"\n  +\"repassword\": \"123\"\n}","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"format":"html","content_type":"text\/html; charset=UTF-8","status_text":"OK","status_code":"200","request_query":"[]","request_request":"[]","request_headers":"array:10 [\n  \"host\" => array:1 [\n    0 => \"lamp153.com\"\n  ]\n  \"connection\" => array:1 [\n    0 => \"keep-alive\"\n  ]\n  \"cache-control\" => array:1 [\n    0 => \"max-age=0\"\n  ]\n  \"accept\" => array:1 [\n    0 => \"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/webp,*\/*;q=0.8\"\n  ]\n  \"upgrade-insecure-requests\" => array:1 [\n    0 => \"1\"\n  ]\n  \"user-agent\" => array:1 [\n    0 => \"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/44.0.2403.130 Safari\/537.36\"\n  ]\n  \"referer\" => array:1 [\n    0 => \"http:\/\/lamp153.com\/\"\n  ]\n  \"accept-encoding\" => array:1 [\n    0 => \"gzip, deflate, sdch\"\n  ]\n  \"accept-language\" => array:1 [\n    0 => \"zh-CN,zh;q=0.8\"\n  ]\n  \"cookie\" => array:1 [\n    0 => \"laravel_session=eyJpdiI6InRSYmdGTWZ3OFNSUXZcLzQxM1o4MEV3PT0iLCJ2YWx1ZSI6IlJYR0xqSXQrZUM5cVBcL2hsN3Yram1vREZHYkRmcU9NdEEwNE9QT3NKMHo3Y3hsU09zV2lyYlV3VGxTQXBnXC9BQXVtcjg5cTdcLzYreDd2NDA2YVJGUGJnPT0iLCJtYWMiOiIyNmQ5MDFmMWU1MTVkOWU3NGJhZjNiNmQ5NjhiOTAwOTE1MWVhYjViMjQ3YTA0MTFkNjBmODg0ZDlkZjVmZDVmIn0%3D; Hm_lvt_30e32478a250ebe4ba15f477df282ae7=1476597933,1476599054,1476601693,1476604724; Hm_lpvt_30e32478a250ebe4ba15f477df282ae7=1476605793\"\n  ]\n]","request_server":"array:51 [\n  \"REDIRECT_MIBDIRS\" => \"C:\/xampp\/php\/extras\/mibs\"\n  \"REDIRECT_MYSQL_HOME\" => \"\\xampp\\mysql\\bin\"\n  \"REDIRECT_OPENSSL_CONF\" => \"C:\/xampp\/apache\/bin\/openssl.cnf\"\n  \"REDIRECT_PHP_PEAR_SYSCONF_DIR\" => \"\\xampp\\php\"\n  \"REDIRECT_PHPRC\" => \"\\xampp\\php\"\n  \"REDIRECT_TMP\" => \"\\xampp\\tmp\"\n  \"REDIRECT_STATUS\" => \"200\"\n  \"MIBDIRS\" => \"C:\/xampp\/php\/extras\/mibs\"\n  \"MYSQL_HOME\" => \"\\xampp\\mysql\\bin\"\n  \"OPENSSL_CONF\" => \"C:\/xampp\/apache\/bin\/openssl.cnf\"\n  \"PHP_PEAR_SYSCONF_DIR\" => \"\\xampp\\php\"\n  \"PHPRC\" => \"\\xampp\\php\"\n  \"TMP\" => \"\\xampp\\tmp\"\n  \"HTTP_HOST\" => \"lamp153.com\"\n  \"HTTP_CONNECTION\" => \"keep-alive\"\n  \"HTTP_CACHE_CONTROL\" => \"max-age=0\"\n  \"HTTP_ACCEPT\" => \"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/webp,*\/*;q=0.8\"\n  \"HTTP_UPGRADE_INSECURE_REQUESTS\" => \"1\"\n  \"HTTP_USER_AGENT\" => \"Mozilla\/5.0 (Windows NT 6.1) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/44.0.2403.130 Safari\/537.36\"\n  \"HTTP_REFERER\" => \"http:\/\/lamp153.com\/\"\n  \"HTTP_ACCEPT_ENCODING\" => \"gzip, deflate, sdch\"\n  \"HTTP_ACCEPT_LANGUAGE\" => \"zh-CN,zh;q=0.8\"\n  \"HTTP_COOKIE\" => \"laravel_session=eyJpdiI6InRSYmdGTWZ3OFNSUXZcLzQxM1o4MEV3PT0iLCJ2YWx1ZSI6IlJYR0xqSXQrZUM5cVBcL2hsN3Yram1vREZHYkRmcU9NdEEwNE9QT3NKMHo3Y3hsU09zV2lyYlV3VGxTQXBnXC9BQXVtcjg5cTdcLzYreDd2NDA2YVJGUGJnPT0iLCJtYWMiOiIyNmQ5MDFmMWU1MTVkOWU3NGJhZjNiNmQ5NjhiOTAwOTE1MWVhYjViMjQ3YTA0MTFkNjBmODg0ZDlkZjVmZDVmIn0%3D; Hm_lvt_30e32478a250ebe4ba15f477df282ae7=1476597933,1476599054,1476601693,1476604724; Hm_lpvt_30e32478a250ebe4ba15f477df282ae7=1476605793\"\n  \"PATH\" => \"C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;C:\\xampp\\mysql\\bin\\;C:\\xampp\\php;C:\\Program Files\\TortoiseGit\\bin\"\n  \"SystemRoot\" => \"C:\\Windows\"\n  \"COMSPEC\" => \"C:\\Windows\\system32\\cmd.exe\"\n  \"PATHEXT\" => \".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\"\n  \"WINDIR\" => \"C:\\Windows\"\n  \"SERVER_SIGNATURE\" => \"<address>Apache\/2.4.12 (Win32) OpenSSL\/1.0.1l PHP\/5.6.8 Server at lamp153.com Port 80<\/address>\\n\"\n  \"SERVER_SOFTWARE\" => \"Apache\/2.4.12 (Win32) OpenSSL\/1.0.1l PHP\/5.6.8\"\n  \"SERVER_NAME\" => \"lamp153.com\"\n  \"SERVER_ADDR\" => \"192.168.153.24\"\n  \"SERVER_PORT\" => \"80\"\n  \"REMOTE_ADDR\" => \"192.168.153.24\"\n  \"DOCUMENT_ROOT\" => \"C:\/xampp\/htdocs\/laravelxm\/public\"\n  \"REQUEST_SCHEME\" => \"http\"\n  \"CONTEXT_PREFIX\" => \"\"\n  \"CONTEXT_DOCUMENT_ROOT\" => \"C:\/xampp\/htdocs\/laravelxm\/public\"\n  \"SERVER_ADMIN\" => \"webmaster@dummy-host2.example.com\"\n  \"SCRIPT_FILENAME\" => \"C:\/xampp\/htdocs\/laravelxm\/public\/index.php\"\n  \"REMOTE_PORT\" => \"51373\"\n  \"REDIRECT_URL\" => \"\/Shoping\"\n  \"GATEWAY_INTERFACE\" => \"CGI\/1.1\"\n  \"SERVER_PROTOCOL\" => \"HTTP\/1.1\"\n  \"REQUEST_METHOD\" => \"GET\"\n  \"QUERY_STRING\" => \"\"\n  \"REQUEST_URI\" => \"\/Shoping\"\n  \"SCRIPT_NAME\" => \"\/index.php\"\n  \"PHP_SELF\" => \"\/index.php\"\n  \"REQUEST_TIME_FLOAT\" => 1476605833.495\n  \"REQUEST_TIME\" => 1476605833\n]","request_cookies":"array:3 [\n  \"laravel_session\" => \"9mwF3uoU1I39mGbAmUkwVNZYyD41OBhqkS1LPrTl\"\n  \"Hm_lvt_30e32478a250ebe4ba15f477df282ae7\" => null\n  \"Hm_lpvt_30e32478a250ebe4ba15f477df282ae7\" => null\n]","response_headers":"array:3 [\n  \"cache-control\" => array:1 [\n    0 => \"no-cache\"\n  ]\n  \"content-type\" => array:1 [\n    0 => \"text\/html; charset=UTF-8\"\n  ]\n  \"Set-Cookie\" => array:1 [\n    0 => \"laravel_session=eyJpdiI6InQ4OXZLQlFRYzNtTUJuRkdyQUZORmc9PSIsInZhbHVlIjoiZFwvVXlpZUhNWnVqTGl2ZVBwdDJOMkY5eSt6dStMelZwRlJYZzR2c3BoQWI2T1hPcnlUOGEzdVhOVk90ZmlmSXJzWFwvbGIyZ0tObmNhc0ZtRkd1ZldSdz09IiwibWFjIjoiMTIxZTIxYjIzZmUyODE3YTE3NTQ5MTc3NzVkNzc4MDRlYjE5YTk0NGVmOTVlYTlkY2IwYmYyOGY3NTFiMzFkMiJ9; expires=Sun, 16-Oct-2016 10:17:13 GMT; path=\/; httponly\"\n  ]\n]","path_info":"\/Shoping","session_attributes":"array:5 [\n  \"_token\" => \"54ZOhWEvPk4jT084Mw9RTNf7538qq0bkxxbJh61z\"\n  \"_previous\" => array:1 [\n    \"url\" => \"http:\/\/lamp153.com\/Shoping\"\n  ]\n  \"_flash\" => array:2 [\n    \"old\" => []\n    \"new\" => []\n  ]\n  \"adminuser\" => {#335\n    +\"id\": 24\n    +\"adminname\": \"wangjie\"\n    +\"password\": \"123\"\n    +\"status\": \"1\"\n    +\"repassword\": \"123\"\n  }\n  \"PHPDEBUGBAR_STACK_DATA\" => []\n]"}}, "0304e3a643cd2b301dba7f945da16713");
</script>
<script>
	$(function () {
		var t = $("#text_box1");
		$("#add1").click(function () {
			t.val(parseInt(t.val()) + 1)
			setTotal(); GetCount();
		})
		$("#min1").click(function () {
			t.val(parseInt(t.val()) - 1)
			setTotal(); GetCount();
		})
		function setTotal() {

			$("#total1").html((parseInt(t.val()) * 9).toFixed(2));
			$("#newslist-1").val(parseInt(t.val()) * 9);
		}
		setTotal();
	})
	</script>
	<script>
$(document).ready(function () {

	//jquery特效制作复选框全选反选取消(无插件)
	// 全选        
	$(".allselect").click(function () {
		$(".gwc_tb2 input[name=newslist]").each(function () {
			$(this).attr("checked", true);
			// $(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
		});
		GetCount();
	});

	//反选
	$("#invert").click(function () {
		$(".gwc_tb2 input[name=newslist]").each(function () {
			if ($(this).attr("checked")) {
				$(this).attr("checked", false);
				//$(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
			} else {
				$(this).attr("checked", true);
				//$(this).next().css({ "background-color": "#3366cc", "color": "#000000" });
			} 
		});
		GetCount();
	});

	//取消
	$("#cancel").click(function () {
		$(".gwc_tb2 input[name=newslist]").each(function () {
			$(this).attr("checked", false);
			// $(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
		});
		GetCount();
	});

	// 所有复选(:checkbox)框点击事件
	$(".gwc_tb2 input[name=newslist]").click(function () {
		if ($(this).attr("checked")) {
			//$(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
		} else {
			// $(this).next().css({ "background-color": "#ffffff", "color": "#000000" });
		}
	});

	// 输出
	$(".gwc_tb2 input[name=newslist]").click(function () {
		// $("#total2").html() = GetCount($(this));
		GetCount();
		//alert(conts);
	});
});
//******************
function GetCount() {
	var conts = 0;
	var aa = 0;
	$(".gwc_tb2 input[name=newslist]").each(function () {
		if ($(this).attr("checked")) {
			for (var i = 0; i < $(this).length; i++) {
				conts += parseInt($(this).val());
				aa += 1;
			}
		}
	});
	$("#shuliang").text(aa);
	$("#zong1").html((conts).toFixed(2));
	$("#jz1").css("display", "none");
	$("#jz2").css("display", "block");
}
</script>
<script>
	$(function () {
		var t = $("#text_box2");
		$("#add2").click(function () {
			t.val(parseInt(t.val()) + 1)
			setTotal(); GetCount();
		})
		$("#min2").click(function () {
			t.val(parseInt(t.val()) - 1)
			setTotal(); GetCount();
		})
		function setTotal() {

			$("#total2").html((parseInt(t.val()) * 8).toFixed(2));
			$("#newslist-2").val(parseInt(t.val()) * 8);
		}
		setTotal();
	})
	</script>
  <!---总数---->
  <script>
	$(function () {
		$(".quanxun").click(function () {
			setTotal();
			//alert($(lens[0]).text());
		});
		function setTotal() {
			var len = $(".tot");
			var num = 0;
			for (var i = 0; i < len.length; i++) {
				num = parseInt(num) + parseInt($(len[i]).text());

			}
			//alert(len.length);
			$("#zong1").text(parseInt(num).toFixed(2));
			$("#shuliang").text(len.length);
		}
		//setTotal();
	})
	</script>
