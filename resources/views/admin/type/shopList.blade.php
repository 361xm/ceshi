@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">商品列表</h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/typelist') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="name" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">  
                    <tr>
                        <th>编号</th>
                        <th>商品名称</th>
                        <th>商品类别</th>
                        <th>商品价格</th>
                        <th>商品详情</th>
                        <th>操作</th>
                    </tr>
                    @foreach($list as $good)
                      <tr>
                        <th>{{ ($list->currentPage()-1)*10+($num) }}</th>
                        <input type="hidden" value="{{ $num++ }}">
                        <td>{{ $good->goodsname }}</td>
                        <td>{{ $good->tid }}</td>
                        <td>{{ $good->goodsprice }}</td>
                        <td>123</td>
                        <td>{{ $good->goodsdescript }}</td>
                        <td><button class="btn btn-xs btn-danger">删除</button>|<button class="btn btn-xs btn-info">修改</button></td>
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