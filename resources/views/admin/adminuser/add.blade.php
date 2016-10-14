@extends("admin.base.base")

@section("content")
          <section class="content">
          <div class="row">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title glyphicon glyphicon-plus">添加用户信息</h3>&nbsp;&nbsp;<a href="{{ URL('/adminUser')}}"<button class="glyphicon glyphicon-arrow-left">用户列表</button></a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/doAdminAdd" method="post">
                  <input type="hidden" name="_token()" value="{{ csrf_token() }}">
                 <div class="row form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">用户名:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name" name="adminname">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">密　码:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name1" name="password">
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

