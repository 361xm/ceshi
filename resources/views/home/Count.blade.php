@extends('home.base.base')
@section('content')
<link href="http://361img.361sport.com.cn/shop/css/order.css" rel="stylesheet" type="text/css" />
<div class="ordercon clearfix">
    <div class="order_l_right order_l_r2 f_r"></div>
    <div class="clear"></div>
    <div class="backcart"><a href="/index.php?m=Cart&a=cart">返回修改购物车</a></div>
</div>
<div class="clear"></div>
<div class="ordercon">
	<div class="order2_listdh">订单(361°官方商城配送)</div>
	<div class="order_list border-right" style="width:998px;">
	  <div class="order2_tb1 mauto">
		<div class="title">收货相关信息</div>
		<table width="100%" border="0" cellpadding="10" cellspacing="0">
				<tr>
					<td style="padding-left:8px;"><strong>·</strong>&nbsp;收货地址：<input  type="hidden" name="addressid" id="addressid" value="" /><span id="add_default"></span>&nbsp;&nbsp;&nbsp;<a class="addaddress pointer">新增收货地址</a>&nbsp;&nbsp;&nbsp;<a class="addaddress pointer" href="/index.php?m=User&a=address" target="_blank">管理收货地址</a>
						<div  style="margin-top:10px;" id="addresslist">
																				<div class="newadd">使用新地址</div>
						<div class="order_formlist">
							<dl>
								<dt>收 货  人</dt>
								<dd><span><input type="text" name="consignee" id="consignee" style="width:110px;" /></span> <font color="#FF0000">*</font></dd>
								<dt>联系电话</dt>
								<dd><span><input type="text" name="tel" id="tel" style="width:110px;" /></span> <font color="#FF0000">*</font>&nbsp;&nbsp;</dd>
							</dl>
							<dl>
								<dt>收货区域</dt>
								<dd id="shqy"><select class="prov"></select>&nbsp;<select class="city"></select>&nbsp; <select class="dist"></select><font color="#FF0000">*</font></dd>
							</dl>
							<dl>
								<dt>街道地址</dt>
								<dd><span><input type="text" name="address" id="address"  style="width:366px;"/></span> <font color="#FF0000">*</font></dd>
							</dl>
							<dl>
								<dt>邮政编码</dt>
								<dd><span><input type="text" name="zipcode" id="zipcode"/></span></dd>
							</dl>
							<dl>
							  <dt></dt>
							  <dd>
								<div style="float:left; margin-top:7px; margin-right:5px;"><input type="checkbox" name="is_default"  value="1"/></div>
								 <div style="float:left;">设为默认地址</div>
								 <div style="clear:both;"></div>
							  </dd>
							</dl>
							<dl>
								<dt></dt>
								<dd><input type="hidden" name="uptid" value=""/><a class="redinput pointer" style="width:126px; height:27px;"></a></dd>
							</dl>
						</div>
						<script type="text/javascript">
						province = "北京";  city = "北京"; distrist = "东城区";
						</script>						</div>
											</td>
				</tr>
		</table>
		<div class="title">送货方式</div>
		<table cellpadding="10" cellspacing="0" width="100%">
			<tr>
				<td style="padding-left:8px;"><strong>·</strong>&nbsp;普通快递</td>
				<td style="text-align:right; color:#999;">（尊敬的顾客，我司电商发货采用分仓模式，您购买的商品可能会分拆成多个包裹配送，给您带来的不便还请谅解。）&nbsp;&nbsp;</td>
			</tr>
		</table>
		<!--<div class="title">支付方式</div>
		-->
		<div class="title">优惠方式</div>
				<table cellpadding="10" id="paymethod" cellspacing="0" width="100%">
			<tr class="allbank">
				<td>
					<div class="privilege">
						<div style="position:relative;">
							<div style="float:left;"><input name="lesspricetype" type="radio" value="0" checked>&nbsp;&nbsp;选择优惠方式：<span class="privilege-select">不使用优惠</span></div>
							<ul id="privilege-list">
								<li data-type="0"><a href="javascript:void(0);">不使用优惠</a></li>
								<li><a href="javascript:void(0);" data-type="coupon" data-value="1">注册会员送20优惠券</a></li>																</div>
							</ul>
							<div style="clear:both;"></div>
						</div>
					</div>
				</td>
			</tr>
			<tr class="allbank">
				<td>
					<div class="privilege">
						<div style="float:left;"><input name="lesspricetype" type="radio" value="1">&nbsp;&nbsp;使用优惠码</div>
						<div style="float:left;" id="input-code"><input type="name" class="input-code" value="" placeholder="请输入您的优惠码"/>&nbsp;<span style="color:#999999">（请输入您的优惠码）<span></div>
						<div style="clear:both;"></div>
					</div>
				</td>
			</tr>
		</table>
		<div class="title">商品信息</div>
				<table width="100%" border="0" cellpadding="10" cellspacing="0" class="tb2">
		  <tr>
			<td class="padding10">商品名称</td>
			<td class="padding10"  width="15%">价格</td>
			<td class="padding10" width="11%">促销价</td>
			<td class="padding10" width="13%">数量</td>
			<td class="padding10" width="10%" align="center">会员价</td>
			<td class="padding10" width="14%">小计</td>
		  </tr>		  <tr>
			<td colspan="6" style="border-bottom:none;">
				<table cellpadding="0" id="sontable" cellspacing="0" border="0" style="width:100%;">
					<tr>
						<td >
							<div class="sontable1"><a href="/index.php?m=Product&a=show&proid=6413" target="_blank" alt="梭织外套" title="梭织外套"><img src="http://361img.361sport.com.cn/product/2016/09/01/m_57c78afb02881.jpg" width="50" height="50" title="梭织外套"/></a>
							</div>
							<div  class="sontable2">
								<p><a href="/index.php?m=Product&a=show&proid=6413" target="_blank" alt="梭织外套" title="梭织外套">梭织外套</a></p>
								<p>颜色：红&nbsp;&nbsp;尺码：110</p>
							</div>
							<div style="clear:both;"></div>
						</td>
						<td width="15%" align="center">￥239.00</td>
						<td width="11%" align="center"> ￥239.00</td>
						<td width="13%" align="center">
							<div>1</div>
													</td>
						<td width="10%" align="center">￥239.00</td>
						<td width="14%" align="center">￥239.00</td>
					</tr>				</table>
			</td>
		  </tr>		</table>
		<div class="clearfix order2_tb2">
			<div class="obi_right f_r">
				<table id="order2" cellpadding="0" cellspacing="0">
					<tr>
						<th align="right" style="width:170px;"><span style="font-size:16px;">1</span>&nbsp;件商品金额总计：</th><td align="left"><span class="font14"> ￥239.00</span></td>
					</tr>
					<tr>
						<th>运费：</th><td>￥<span class="font14" id="express">0.00</span></td>
					</tr>
					<tr>
						<th>优惠价格：</th><td><span class="font14"> -￥<span class="couponprice">0.00</span></span></td>
					</tr>
					<tr>
						<th>应付总额：</th>
						<td><span class="price">￥239.00</span></td>
					</tr>
				</table>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="order_buyinfo clearfix" style="height:137px;">
		<div class="order_fapiao f_l" style="display:none">
		<strong>是否需要发票? </strong>
		<input type="radio" name="is_separate" id="is_separate1" value="1" />是　　 
		<input name="is_separate" type="radio" id="is_separate2" value="0" checked="checked" />否
		<br />
		<div id="fpnr" style="display:none">
			发票抬头：　 <input type="radio" name="inv_type" id="inv_type" value="公司名称" />公司     
			<input name="inv_type" type="radio" id="inv_type" value="个人" checked="checked" />个人     
			<input name="inv_type" type="radio" id="inv_type" value="自用" />自用  
			<input type="text" name="inv_payee" id="inv_payee" value="名称" class="input" onfocus="if(value =='名称'){value =''}" onblur="if(value ==''){value='名称'}"/><br />
			发票内容：　 
			<select name="inv_content" id="inv_content">
				<option value="鞋子">鞋子</option>
				<option value="衣服">衣服</option>
			</select>
		</div>
		<span>若发生退换货，发票必须随退换货商品寄回。</span>
	</div>
	<div class="f_r tjcart">请核对以上信息，确认无误后点击"提交订单"<input type="hidden" name="uselectaddress" id="uselectaddress" value="" /><input type="hidden" name="ctype" id="ctype" value="" /><input type="hidden" name="cid" value="" id="cid" /><input type="hidden" name="cprice" id="cprice" value="" />
		  <input type="submit" class="pointer" name="button" id="submitbutton" value="提交"/>
	</div></div>
<!--内容-->
<div class="clear"></div>
</div>
</div>
<!--底部-->
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
@endsection