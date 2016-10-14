@extends("admin.base.base")

@section("content")
                  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">修改新闻</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @foreach($list as $xin) 
                <form role="form" action='{{URL('/Del')}}/{{ $xin->id }}' method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="put">
                  <input type="hidden" name="gid" value="0">
              
                  <div class="box-body">
                    <div class="form-group"> 
                      <label for="exampleInputEmail1">修改大标题</label>
                      <input type="text" name="bithead" class="form-control" id="exampleInputEmail1" value="{{ $xin->bithead}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">修改小标题</label>
                      <input type="text" name="smallhead" class="form-control" id="exampleInputPassword1" value="{{ $xin->smallhead }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">修改描述</label>
                      <input type="text" name="describe" class="form-control" id="exampleInputPassword1" value="{{ $xin->describe}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">图片</label>
                      <input type="file" name="img" id="exampleInputFile">
                      <p class="help-block">更换图片.....</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> 确认
                      </label>
                    </div>
                  </div><!-- /.box-body -->
                  <div>  
               
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">修改</button>
                  </div>
                </form>
                  @endforeach
              </div><!-- /.box -->
@endsection