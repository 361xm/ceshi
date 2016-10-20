/**
 * confirm order js 2015/5/8 @Ljp
 */
$(function(){
	//add new address
	$("a.addaddress").live("click",function(){
		$.post(address,{},function( result ){
			if( result.status == '0' ){ $("div#addressedit").html( result.msg ); getEditAdr(); return true; }
		},"json")
	});
	//default address
	$("div#addresslist>ul").find("a#addressdefault").live("click",function(){
		var adrid = $(this).parent().siblings("div").find("input#address_id").val();
		//selected id
		var nowid = $("div#addresslist").find('input:radio:checked').val();
		$.post(addrdef,{adrid:adrid,nowid:nowid},function( result ){
			if( result.status == '0' ){
				$("div#addresslist").html( result.msg ); changeAdr(); return true;
			} else {
				artDialog.tips( result.msg,2,"error" ); return false;
			}
		},"json");
	});
	//change address
	changeAdr();
	$("input[name=address_id]").live("click",function(){
		changeAdr(); 
	});
	//js for add address
	$("a.redinput").live("click",function(){
		var adrUname = $("input[name=consignee]").val();
		if( !adrUname ){ artDialog.tips( "请输入收货人姓名",2,"error" ); return false; }
		var adrUtel = $("input[name=tel]").val();
		if( !adrUtel ){ 
			artDialog.tips( "请输入收货人联系电话",2,"error" ); return false; 
		} else { //正则格式
			var reg = /^1[3|4|5|8]\d{9}$/;
			if( !reg.test(adrUtel) ){ artDialog.tips( "请输入正确的手机号码",2,"error" ); return false;   }
		}
		var adrUprov = $(".prov").val();
		if( !adrUprov ){ artDialog.tips( "请输入收货区域省份",2,"error" ); return false; }
		var adrUcity = $(".city").val();
		if( !adrUcity ){ artDialog.tips( "请输入收货区域城市",2,"error" ); return false; }
		var adrUdist = $(".dist").val();
		if( !adrUdist ){ artDialog.tips( "请输入收货区域县镇",2,"error" ); return false; }
		var adrAddr = $("input[name=address]").val();
		if( !adrAddr ){ artDialog.tips( "请输入详细的街道地址",2,"error" ); return false; }
		else {
			var reg = /^[\u4e00-\u9fa5]$/;
			var xR = adrAddr.replace(/([\u4e00-\u9fa5])/g,'**');
			if( Math.round(xR.length/2) < '6'){
				artDialog.tips( "街道地址不得少于12个字符",2,"error" ); return false;
			}
		}
		var adrUcode = $("input[name=zipcode]").val();
		var isdefault = $("input[type='checkbox']").is(':checked');
		var uptid = $("input[name=uptid]").val();
		//selected id
		var nowid = $("div#addresslist").find('input:radio:checked').val();
		$.post(addrAdd,{consignee:adrUname,tel:adrUtel,province:adrUprov,city:adrUcity,district:adrUdist,address:adrAddr,zipcode:adrUcode,is_default:isdefault,address_id:uptid,nowid:nowid},function( result ){
			if( result.status == '0' ){
				$("div#addresslist").html( result.msg ); $("div#addressedit").html(""); changeAdr(); return true;
			} else {
				artDialog.tips( result.msg,2,"error" ); return false; 
			}
		},"json");
	});
	getEditAdr();
	//edit address
	$("a#addressedit").live("click",function(){
		var adrid = $(this).parent().siblings("div").find("input#address_id").val();
		$.post(addrEdit,{adrid:adrid},function( result ){
			if( result.status == '0' ){
				$("div#addressedit").html( result.msg ); getEditAdr(); return true;
			} else {
				artDialog.tips( result.msg,2,"error" ); return false;
			}
		},"json");
	});
	//youhuihuodong 
	$("ul#privilege-list").find("li:not(#morecoupon)").live("click",function(){
		var opVal = $(this).find("a").attr("data-value");
		var opType = $(this).find("a").attr("data-type");
		var opStr = $(this).find("a").html();
		var nowid = $("div#addresslist").find('input:radio:checked').val();
		$.post(activeUrl,{oval:opVal,otype:opType,nowid:nowid},function( result ){
			if( result.status == '0' ){
				$("span.couponprice").html( result.msg.lessprice );
				$("span.price").html("¥"+result.msg.totalprice);
				$("span.privilege-select").html(opStr);
				$("ul#privilege-list").slideToggle("fast");
				return true;
			} else {
				artDialog.tips( result.msg,2,"error" ); return false;
			}
		},"json");
	});
	//couponcode
	$("input.input-code").live("keyup",function(){
		var radio = $("div.privilege").find('input:radio:checked').val();
		var code = $(this).val();
		if( code && radio=='1'){
			if( code.length  == '12' ){
				$.post(codeUrl,{code:code},function( result ){
					if( result.status == '0' ){
						$("span.couponprice").html(result.msg.ac_price);
						$("span.price").html("¥"+result.msg.allprice);
						return true;
					} else {
						artDialog.tips(result.msg,"2","error"); return false;
					}
				},"json");
			}
		}
	});
	//morecoupon
	$("li#morecoupon").live("click",function(){
		$("div#mcoulist").css({"display":"block"});
		$(this).css({"display":"none"});
	});
	//
	$("span.privilege-select").live("click",function(){
		$("ul#privilege-list").slideToggle("fast");
	});
	// use code
	var readyType = $("div.privilege").find('input:radio:checked').val();
	$("div.privilege").live("click",function( result ){
		var valtype = $("div.privilege").find('input:radio:checked').val();
		if( valtype == readyType ){ return false; }else{ 
			readyType = valtype;
			if( valtype == '1' )	$("span.privilege-select").html("不使用优惠券");
			else	$("div#input-code").find("input.input-code").val("");
		}
		$.post(yhfsUrl,{valtype:valtype},function( result ){
			if( result.status == '0' ){
				$("span.couponprice").html(result.msg.ac_price);
				$("span.price").html("¥"+result.msg.allprice);
				return true;
			}
		},"json");
	});
	//submit
	$("input#submitbutton").live("click",function(){
		var addressid = $("div#addresslist").find('input:radio:checked').val();
		var inputcode = $("input.input-code").val();
		if( !addressid ){ artDialog.tips("请选择您的收货地址","2","error"); return false; }
		$.post(ckorder,{addressid:addressid,inputcode:inputcode},function( result ){
			if( result.status=='0' ){
				window.location.href=result.msg; return true;
			} else {
				artDialog.tips(result.msg,"2","error"); return false;
			}
		},"json");
	});
});
// set default address  2015/6/4 @Ljp
function getDefaultAdr(){
	var selectStr = $("div#addresslist").find('input:radio:checked').parent().siblings("span.addxx").find("strong").html();
	var nowid = $("div#addresslist").find("input:radio:checked").val();
	$("span#add_default").html(selectStr);
}
//change address 2015/6/14 @Ljp
function changeAdr(){
	var selectStr = $("div#addresslist").find('input:radio:checked').parent().siblings("span.addxx").find("strong").html();
	var nowid = $("div#addresslist").find("input:radio:checked").val();
	$("span#add_default").html(selectStr);
	$("input[name=uselectaddress]").val(nowid);
	$.post(feeUrl,{nowid:nowid},function( result ){
		if( result.status == '0' ){
			$("span#express").html( result.msg.postfee );
			$("span.price").html("¥"+result.msg.allprice);
			$("span.couponprice").html(result.msg.ac_price);
			return true;
		} else {
			 return false;
		}
	},"json");
}

function getEditAdr(){
	$("dd#shqy").citySelect({prov:province,city:city,dist:distrist,nodata:"none",required:true});
}