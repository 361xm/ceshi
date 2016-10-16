@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">管理员信息表</h3>
                  <div class="box-tools">
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="adminname" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <form action="" method="post" name="myform">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="delete">
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
                            <a href="javascript:deDel({{ $user->id}})" class="glyphicon glyphicon-trash"></a>
                            <a onclick="doupdate({{ $user->id}})" data-toggle="modal" data-target="#myModall" class="glyphicon glyphicon-wrench"></a>
                            <a data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus"></a>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </form>
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
         <div class="modal-body" >
           <form role="form" id="updates" name="update" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="put">
              <div class="form-group">
              <label for="name" >AdminUser</label>
              <input type="text" class="form-control" id="name" placeholder="AdminUser" name="adminname">
              </div>
              <div class="form-group">
              <label for="name" >password</label>
              <input type="password" class="form-control" id="name" placeholder="password" name="password">
              </div>
              <div class="form-group">
              <label for="name" >repassword</label>
              <input type="password" class="form-control" id="name" placeholder="repassword" name="repassword">
              </div>
              <div class="checkbox">
              </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default"
               data-dismiss="modal">取消修改
            </button>
            <button type="submit" class="btn btn-primary">
               修改管理员
            </button>
          </form>
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

    <!-- 信息删除确认 -->  
    <div class="modal fade" id="delcfmModel">  
      <div class="modal-dialog">  
        <div class="modal-content message_align">  
          <div class="modal-header">  
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>  
            <h4 class="modal-title">提示信息</h4>  
          </div>  
          <div class="modal-body">  
            <p>您确认要删除吗？</p>  
          </div>  
          <div class="modal-footer">  
             <input type="hidden" id="url"/>  
             <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>  
             <a  onclick="urlSubmit()" class="btn btn-success" data-dismiss="modal">确定</a>  
          </div>  
        </div><!-- /.modal-content -->  
      </div><!-- /.modal-dialog -->  
    </div><!-- /.modal -->
    <script type="text/javascript">
      function deDel(id) {  
                if(confirm('确定删除吗？')){
//                1.获得form表单节点对象
            var myform = document.myform;
//                2 设置提交方式
            myform.action = "/Admin/"+id;
            myform.submit();
        }
      }
        function doupdate(id) {  
            var updates = document.getElementById('updates');
//                2 设置提交方式
            updates.action="/update/"+id;
        }
    </script>
  @endsection
