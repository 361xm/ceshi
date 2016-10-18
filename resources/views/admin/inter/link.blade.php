@extends("admin.base.base")
@section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">链接详情表</h3>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/interlinkage') }}" method="post" enctype="multipart/form-data">
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
                      <th style=" text-align:center;">小标题链接</th>
                      <th style=" text-align:center;">链接地址</th>
                      <th style=" text-align:center;">操作</th>
                    </tr>
                    @foreach($list as $new)
                      <tr>
                      <th style=" text-align:center;">{{ ($list->currentPage()-1)*3+($num)+1 }}</th>
                      <input type="hidden" value="{{ $num++ }}">
                      <th style=" text-align:center;">{{ $new->fu }}</th>
                      <th style=" text-align:center;">{{ $new->zi }}</th>
                      <th style=" text-align:center;">{{ $new->info }}</th>
                     <td><a href="javascript:adc({{ $new->id }})" class="glyphicon glyphicon-trash"></a> | <a onclick="update({{ $new->id }})" class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal" id="values"></a></td>
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
    <script type="text/javascript">
      function adc(id){
        if(confirm('确定删除吗？')){
//                1.获得form表单节点对象
            var myform = document.myform;
//                2 设置提交方式
            myform.action = "/adcDel/"+id;
            myform.submit();
        }
      }
    </script>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               修改链接
            </h4>
         </div>
         <div class="modal-body" >
           <form role="form" id="updates" name="update" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="put">
              <div class="form-group">
              <label for="name" >大标题</label>
              <input type="text" class="form-control" id="name" placeholder="请输入..." name="fu">
              </div>
              <div class="form-group">
              <label for="name" >小标题</label>
              <input type="text" class="form-control" id="name" placeholder="请输入..." name="zi">
              </div>
              <div class="form-group">
              <label for="name" >链接地址</label>
              <input type="text" class="form-control" id="name" placeholder="请输入..." name="info">
              </div>
              <div class="checkbox">
              </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default"
               data-dismiss="modal">取消
            </button>
            <button type="submit" class="btn btn-primary">
               修改
            </button>
          </form>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <script type="text/javascript">
      function update(id){
        var myform = document.getElementById('updates');
        myform.action = "/shui/"+id;
      }
    </script>
  @endsection
