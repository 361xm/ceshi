@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a class="glyphicon glyphicon-th"></a> 用户信息</h3>&nbsp;&nbsp;<a href="{{ URL('/user')}}"<button class="glyphicon glyphicon-arrow-left">返回</button></a>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/user')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="name" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                        <form action="" method="post" name="myform">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-bordered table-hover">
                    <tr>
                      <th>ID</th>
                      <th>用户名</th>
                      <th>手机号</th>
                      <th>操作</th>
                    </tr>
                    @foreach($list as $stu)      
                      <tr>
                      <th><b class="glyphicon glyphicon-flag">-{{($list->currentPage()-1)*10+($num)}}</b></th>
                      <input type="hidden"value="{{ $num++ }}">
                      <th>{{ $stu->username }}</th>
                      <th>{{ $stu->phone }}</th>
                      <td><a href="javascript:doDel({{ $stu->id}})" class="glyphicon glyphicon-trash"></a> | <a href="{{ URL('type/order')}}" class="glyphicon glyphicon-eye-open"></a></td>
                    </tr>
                    @endforeach
                    
                  </table>  
                </div><!-- /.box-body -->
              </div>
              <center style="float:right;">
              {!! $list->appends($where)->render() !!}
              </center>
              <!-- /.box -->
            </div>
          </div>
    </section>
     
  @endsection
