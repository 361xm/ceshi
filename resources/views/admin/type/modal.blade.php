<form role="form" id="form" method="post" action="" onsubmit="return false">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach($list as $ob)
<input type="hidden" name="_token" value="{{$ob->id}}">
@endforeach
<div class="form-group">
<label for="name">商品名称</label>
<input type="text" class="form-control" id="name" name="goodsname"placeholder="请输入名称">
</div>
<div class="form-group">
<label for="name">商品价格</label>
<input type="text" class="form-control" id="goodsprice" placeholder="请输入价格">
</div>
<div class="form-group">
<label for="name">库存</label>
<input type="text" class="form-control" id="stock" placeholder="库存选择">
</div>
<div class="form-group">
<label for="name">商品详情</label>
<input type="text" class="form-control" id="goodsdescript" placeholder="商品详情">
</div>
<div class="form-group">
<label for="inputfile">上传图片</label>
<input type="file" id="inputfile">
<p class="help-block">请添加图片</p>
</div>
<div class="checkbox">
</div> 
</form>