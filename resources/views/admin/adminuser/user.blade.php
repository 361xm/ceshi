@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">管理员信息表</h3>
                  <div class="box-tools">
                    <form action="{{ URL('/adminUser')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="adminname" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>AdminUser</th>
                      <th>Status</th>
                      <th>操作</th>
                    </tr>
                    @foreach($list as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->adminname }}</td>
                      <td><span class="label label-success">{{ $user->status }}</span></td>
                      <td>
                        <a class="glyphicon glyphicon-trash"></a> 
                        <a data-toggle="modal" data-target="#myModall" class="glyphicon glyphicon-wrench"></a>
                        <a data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus"></a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
                  </div>
                    <center style="float:right;">
                    {!! $list->appends($where)->render() !!}
                    </center>
                    <!-- /.box -->
                  </div>

    </section>

          <div class="modal fade" id="myModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               修改管理员
            </h4>
         </div>
         <div class="modal-body ">
           <form role="form">
              <div class="form-group">
              <label for="name">AdminUser</label>
              <input type="text" class="form-control" id="name" placeholder="AdminUser">
              </div>
              <div class="form-group">
              <label for="name">password</label>
              <input type="password" class="form-control" id="name" placeholder="password">
              </div>
              <div class="form-group">
              <label for="name">repassword</label>
              <input type="password" class="form-control" id="name" placeholder="repassword">
              </div>
              <div class="checkbox">
              </div>
              </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default"
               data-dismiss="modal">取消修改
            </button>
            <button type="button" class="btn btn-primary">
               修改管理员
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               添加管理员
            </h4>
         </div>
         <div class="modal-body ">
           <form role="form">
              <div class="form-group">
              <label for="name">名称</label>
              <input type="text" class="form-control" id="name" placeholder="请输入名称">
              </div>
              <div class="form-group">
              <label for="name">密码</label>
              <input type="text" class="form-control" id="name" placeholder="请输入密码">
              </div>
              <div class="form-group">
              <label for="name">确认密码</label>
              <input type="text" class="form-control" id="name" placeholder="请确认名称">
              </div>
              <div class="checkbox">
              </div>
              </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default"
               data-dismiss="modal">取消添加
            </button>
            <button type="button" class="btn btn-primary">
               添加管理员
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
  @endsection
