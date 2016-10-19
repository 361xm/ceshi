@extends("admin.base.base")

@section("content")
          <section class="content">
          <div class="row">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="">添加链接</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/qj" method="post">
                  <input type="hidden" name="_token()" value="{{ csrf_token() }}">
                 <div class="row form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">大标题:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name" name="fu">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">小标题:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name1" name="zi">
                      </div>
                    </div>
                   <div class="form-group">
                      <label class="col-sm-2 control-label form-label">链接地址:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name1" name="info">
                      </div>
                    </div> 
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">添加</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection

