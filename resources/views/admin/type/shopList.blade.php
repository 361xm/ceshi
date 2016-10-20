@extends("admin.base.base")
  @section('content')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"><a class="glyphicon glyphicon-th"></a>商品列表</h3><a href="{{URL('/type')}}" class="glyphicon glyphicon-arrow-left">返回</a>
                  <div class="box-tools">
                    <div class="" style="width: 150px;">
                      <form action="{{ URL('/typelist') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="text" name="name" size="15" class="form-inline">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                    </form>
                    <form action="" method="post" name="myform">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    </form>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-bordered table-hover">  
                    <tr>
                        <th>编号</th>
                        <th>商品名称</th>
                        <th>商品类别</th>
                        <th>商品价格</th>
                        <th>库存</th>
                        <th>商品详情</th>
                        <th>操作</th>
                    </tr>
                    @foreach($list as $good)
                      <tr id="types">
                        <th><b class="glyphicon glyphicon-home"></b>-{{ ($list->currentPage()-1)*10+($num) }}</th>
                        <input type="hidden" value="{{ $num++ }}">
                        <td>{{ $good->goodsname }}</td>
                        <td>{{ $good->tid }}</td>
                        <td>{{ $good->goodsprice }}$</td>
                        <td>{{ $good->stock}}</td>
                        <td>{{ $good->goodsdescript }}</td>
                        <td><a onclick="del({{ $good->id }})" class="glyphicon glyphicon-trash"></a> | <a onclick="update({{ $good->id}})" data-goodsname="{{ $good->goodsname }}" data-goodsprice="{{ $good->goodsprice }}" data-goodstock="{{ $good->stock }}" data-goodsdescript="{{ $good->goodsdescript }}" class="glyphicon glyphicon-wrench" data-toggle="modal" data-target="#myModal" id="values"></a></td>
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
         
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                      <button type="button" class="close"
                         data-dismiss="modal" aria-hidden="true">
                            &times;
                      </button>
                      <h4 class="modal-title" id="myModalLabel">
                         修改商品
                      </h4>
                   </div>
                   <div class="modal-body ">
                     <!-- 此处应该有东西 --> 
                    <form role="form" method="post" action='' id="newform" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="post">                
                      <div class="form-group"> 
                      <label for="name">商品名称</label>  
                      <input type="text" class="form-control" id="names" name="goodsname" placeholder="请输入要修改的。。">
                      </div>
                      <div class="form-group">
                      <label for="name">商品价格</label>
                      <input type="text" class="form-control" id="goodsprices" name="goodsprice" placeholder="请输入要修改的。。">
                      </div>
                      <div class="form-group">
                      <label for="name">库存</label>
                      <input type="text" class="form-control" id="stocks" name="stock" placeholder="请输入要修改的。。">
                      </div>
                      <div class="form-group">
                      <label for="name">商品详情</label>
                      <input type="text" class="form-control" id="goodsdescripts" name="goodsdescript" placeholder="请输入要修改的。。">
                      </div>
                      <div class="form-group">
                      <label for="inputfile">上传图片</label>
                      <input type="file" id="inputfile" name="goodsImage">
                      <p class="help-block">请修改图片</p>
                      </div> 
                   </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-default"
                         data-dismiss="modal">取消修改
                      </button>
                      <button type="submit" class="btn btn-primary">
                         修改商品
                      </button>
                   </div>
                 </form>
                
               </div>
             </div>
           </div>
         </div>
    </section>
  @endsection