@extends("admin.base.base")

@section('content')
<div class="box box-warning">
                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">网站配置</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ URL('/doConfig')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="post">
                  <input type="hidden" name="pid" value="0">
                  <input type="hidden" name="path" value="0">
                  <input type="hidden" name="goodsname" value="0">
                  <input type="hidden" name="goodsprice" value="0">
                  <input type="hidden" name="goodsdescript" value="0">
                  <input type="hidden" name="goodsimage" value="0">
                  <input type="hidden" name="stock" value="0">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">标题</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="请输入...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">网站关键字</label>
                      <input type="text" name="key" class="form-control" id="exampleInputPassword1" placeholder="请输入...">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">网站logo</label>
                      <input type="file" name="wzimage" id="exampleInputFile">
                      <p class="help-block">请选择图片上传.....</p>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">网站开关</label>
                      <input type="radio"  id="exampleInputFile" name="open" value="0" checked="checked">
                      <input type="radio" id="exampleInputFile" name="open" value="1">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">修改</button>
                  </div>
                </form>
              </div><!-- /.box -->
@endsection