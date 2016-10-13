@extends("admin.base.base")

@section("content")
                  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">修改商品类别</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action='{{ URL("/file/$id")}}' method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="put">
                  <input type="hidden" name="gid" value="0">
                  @foreach($list as $goodsList)
                  <div class="box-body">
                    <div class="form-group"> 
                      <label for="exampleInputEmail1">修改类别</label>
                      <input type="text" name="classname" class="form-control" id="exampleInputEmail1" placeholder="{{ $goodsList->classname}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">描述</label>
                      <input type="text" name="decipt" class="form-control" id="exampleInputPassword1" placeholder="{{ $goodsList->decipt}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">图片</label>
                      <input type="file" name="classimage" id="exampleInputFile">
                      <p class="help-block">更换图片.....</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> 确认
                      </label>
                    </div>
                  </div><!-- /.box-body -->
                  <div>  
                    @endforeach
                   <?php
                      if(empty($look)){
                        echo "";
                      }else{
                    ?>
                    {{ $look }}
                    <?php
                      }
                    ?>
                    
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">修改</button>
                  </div>
                </form>
              </div><!-- /.box -->
@endsection