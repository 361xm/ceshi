@extends("admin.base.base")

@section("content")
                  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">添加订单</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">收货人</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">图片</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> 确认
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
@endsection