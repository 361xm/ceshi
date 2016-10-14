@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">新闻详情表</h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('xinwen/press') }}" method="post" enctype="multipart/form-data">
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
                      <th style=" text-align:center;">大标题</th>
                      <th style=" text-align:center;">小标题</th>
                      <th style=" text-align:center;">图片</th>
                      <th style=" text-align:center;">描述</th>
                      <th style=" text-align:center;">时间</th>
                      <th style=" text-align:center;">操作</th>
                    </tr>
                    @foreach($list as $new)
                      <tr>
                      <th style=" text-align:center;">{{ ($list->currentPage()-1)*3+($num)+1 }}</th>
                      <input type="hidden" value="{{ $num++ }}">
                      <th style=" text-align:center;">{{ $new->bithead }}</th>
                      <th style=" text-align:center;">{{ $new->smallhead }}</th>
                      <th style=" text-align:center;"><img src="/admins/upload/{{ $new->img }}" width="50px" height="50px"></th>
                      <th style=" text-align:center;">{{ $new->describe }}</th>
                      <th style=" text-align:center;">{{ $new->time }}</th>
                      <td><a href="javascript:head({{ $new->id}} )" class="glyphicon glyphicon-trash" ></a></td><td><a href='{{ URL("/Del/$new->id/edit") }}' class="glyphicon glyphicon-wrench"></a></td>
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
