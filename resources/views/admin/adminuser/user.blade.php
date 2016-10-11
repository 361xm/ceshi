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
                      <td><button class="btn btn-xs btn-danger">删除</button>|<button class="btn btn-xs btn-info">修改</button></td>
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
  @endsection
