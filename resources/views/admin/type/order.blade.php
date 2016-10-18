@extends("admin.base.base")

@section("content")
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">订单详情表</h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('type/order') }}" method="post" enctype="multipart/form-data">
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
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>订单号</th>
                        <th>收货人</th>
                        <th>商品</th>                                             
                        <th>收货地址</th>
                        <th>总金额</th>
                        <th>下单时间</th>
                        <th>订单状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($list as $order)
                      <tr>
                        <th style=" text-align:center;">{{ ($list->currentPage()-1)*3+($num)+1 }}</th>
                        <input type="hidden" value="{{ $num++ }}">
                        <td>{{ $order->gid }}</td>
                        <td>{{ $order->uid}}</td>
                        <td>{{ $order->location }}</td>
                        <td>{{ $order->goodsMoney}}</td>
                        <td>{{ $order->goodstime}}</td>
                        <td>{{ $order->status}}</td>
                        <td><button class="btn btn-xs btn-info">查看详情</button></td>
                      </tr>
                      @endforeach
                    </tfoot>
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
