@extends("admin.base.base")

@section("content")
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">退货订单详情表</h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('type/orderb') }}" method="post" enctype="multipart/form-data">
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
                        <th>商品ID</th>
                        <th>收货人</th>
                        <th>商品</th>                                             
                        <th>收货地址</th>
                        <th>总金额</th>
                        <th>下单时间</th>
                        <th>订单状态</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    @foreach($status as $order)
                    <tbody>
                      <tr id="did">
                        <td>{{$order->id}}</td>
                        <td>{{$order->gid}}</td>
                        <td>{{$order->username}}</td>
                        <td>{{$order->gdname }}</td>
                        <td>{{$order->area }}</td>
                        <td>{{$order->price }}</td>
                        <td>{{$order->time }}</td>
                        <td>{{$order->status}}</td>
                        <td><a href="javascript:shouji({{ $order->id }})" class="glyphicon glyphicon-trash"></a><a href="/order/huojj/{{ $order->id }}"><button class="btn btn-xs btn-info">发货</button></a>
                        </td>
                      </tr>
                    </tbody>
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
    <script type="text/javascript">
      function shouji(id) {  
         if(confirm('确定删除吗？')){
            var myform = document.myform;

            myform.action = "/shanb/"+id;
            myform.submit();
        }
      }
    </script>
@endsection
