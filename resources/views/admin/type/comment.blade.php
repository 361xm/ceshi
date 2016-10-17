@extends("admin.base.base")
@section("content")
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">评论管理中心</h3>
                   <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/comment') }}" method="post" >
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="name" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                </div><!-- /.box-header -->
                <form action="" method="post" id="deDel">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <input type="hidden" name="_method" value="delete">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>用户名</th>
                        <th>评论对象</th>
                        <th>尺码</th>
                        <th>颜色</th>
                        <th>内容</th>
                        <th>时间</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($list as $order)
                      <tr>
                        <td>{{ ($list->currentPage()-1)*3+($num)+1 }}</td>
                        <input type="hidden" value="{{ $num++ }}">
                        <td>{{ $order->gid }}</td>
                        <td>{{ $order->uname }}</td>
                        <td>{{ $order->size }}</td>
                        <td>{{ $order->color }}</td>
                        <td>{{ $order->content }}</td>
                        <td>{{ $order->time }}</td>
                        <td><a href="javascript:deDel({{ $order->id }})" class="glyphicon glyphicon-trash" ></a>|<button class="btn btn-xs btn-info">查看详情</button></td>
                      </tr>
                     @endforeach 
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </form>
              </div><!-- /.box -->
              <center style="float:right;">
                  {!! $list->appends($where)->render() !!}
              </center>
             </div>
          </div>
    </section>
       <script type="text/javascript">
        function deDel(id) {  
          if(confirm('确定删除吗？')){
            var deDel = document.getElementById('deDel');
            deDel.action = "/ment/"+id;
            deDel.submit();
        }
      }
    </script>
@endsection