@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a class="glyphicon glyphicon-th">商品类别表</a> <a href="{{URL('/type')}}" class="glyphicon glyphicon-arrow-left">返回</a></h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/type') }}" method="post">
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
                      <th>商品编号</th>
                      <th>描述</th>
                      <th>类别名称</th>
                      <th>图片</th>
                      <th>操作</th>
                    </tr>
                    @foreach($list as $ob)
                      <tr>
                      <th><b class="glyphicon glyphicon-home">-{{ ($list->currentPage()-1)*10+($num) }}</b></th>
                      <th>{{ $ob->id }}</th>
                      <input type="hidden" value="{{ $num++ }}">
                      <th>{{ $ob->decipt }}</th>
                      <th>{{ $ob->classname }}</th>
                      <th><img src="admins/upload/{{ $ob->classimage }}" width="50px" height="50"></th>
                      <td><a href="javascript:doDelt({{ $ob->id}})" class="glyphicon glyphicon-trash"></a> | <a href='{{ URL("/file/$ob->id/edit") }}' class="glyphicon glyphicon-wrench"></a> | <a href='{{ URL("/typelist/$ob->id") }}' class="glyphicon glyphicon-eye-open"></a> | <a href='{{ URL("/types/$ob->id") }}' class="glyphicon glyphicon-plus"></a></td>
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
