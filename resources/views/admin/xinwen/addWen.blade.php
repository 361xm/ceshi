@extends("admin.base.base")
@section("content")
                <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">添加新闻</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ URL('/addhead')}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="post">
                  <input type="hidden" name="time" value=<?php echo date("Y-m-d",time());?>>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">大标题</label>
                      <input type="text" name="bithead" class="form-control" id="exampleInputEmail1" placeholder="header">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">小标题</label>
                      <input type="text" name="smallhead" class="form-control" id="exampleInputPassword1" placeholder="head">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">图片</label>
                      <input type="file" name="img" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">描述</label>
                        <input type="text" name="describe" class="form-control" id="exampleInputEmail1" placeholder="header">
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox"> 确认
                        </label>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">添加</button>
                  </div>
                </div>
                </form>
              </div><!-- /.box -->
@endsection