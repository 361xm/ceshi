@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">商品类别表</h3>
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
                  <table class="table table-hover">  
                    <tr>
                      <th style=" text-align:center;">ID</th>
                      <th style=" text-align:center;">描述</th>
                      <th style=" text-align:center;">类别名称</th>
                      <th style=" text-align:center;">图片</th>
                      <th style=" text-align:center;">操作</th>
                    </tr>
                    @foreach($list as $ob)
                      <tr>
                      <th style=" text-align:center;">{{ ($list->currentPage()-1)*10+($num) }}</th>
                      <input type="hidden" value="{{ $num++ }}">
                      <th style=" text-align:center;">{{ $ob->decipt }}</th>
                      <th style=" text-align:center;">{{ $ob->classname }}</th>
                      <th style=" text-align:center;"><img src="admins/upload/{{ $ob->classimage }}" width="50px" height="50"></th>
                      <td style=" text-align:center;"><a href="javascript:doDelt({{ $ob->id}})"><button class="btn btn-xs btn-danger">删除</button></a> | <a href='{{ URL("/file/$ob->id/edit") }}'><button class="btn btn-xs btn-info" >修改</button></a> | <a href='{{ URL("/types/$ob->id") }}'><button class="btn btn-xs btn-info" >查看{{ $ob->classname }}商品</button></a> | <a href='{{ URL("/types/$ob->id") }}'><button class="btn btn-xs btn-success" >添加{{ $ob->classname }}商品</button></a></td>
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
