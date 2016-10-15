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
                      <form action="/type" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
                         <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button><input type="text" name="name" size="15"  class="margin-right:80px;">
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
                      <th><img src="/admins/upload/{{ $ob->classimage }}" width="50px" height="50"></th>
                      <td><a href="javascript:doDelt({{ $ob->id}})" class="glyphicon glyphicon-trash"></a> | <a href='{{ URL("/file/$ob->id/edit") }}' class="glyphicon glyphicon-wrench"></a> | <a href='{{ URL("/typelist/$ob->id") }}' class="glyphicon glyphicon-eye-open"></a> | <a  onclick="add({{ $ob->id }})" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon-plus" ></a></td>
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
                         添加商品
                      </h4>
                   </div>
                   <div class="modal-body ">
                     <!-- 此处应该有东西 -->
                    <form role="form" method="post" action='' id="form" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="post">
                      <div class="form-group">
                      <label for="name">商品名称</label>
                      <input type="text" class="form-control" id="name" name="goodsname" placeholder="请输入名称">
                      </div>
                      <div class="form-group">
                      <label for="name">商品价格</label>
                      <input type="text" class="form-control" id="goodsprice" name="goodsprice" placeholder="请输入价格">
                      </div>
                      <div class="form-group">
                      <label for="name">库存</label>
                      <input type="text" class="form-control" id="stock" name="stock" placeholder="库存选择">
                      </div>
                      <div class="form-group">
                      <label for="name">商品详情</label>
                      <input type="text" class="form-control" id="goodsdescript" name="goodsdescript" placeholder="商品详情">
                      </div>
                      <div class="form-group">
                      <label for="inputfile">上传图片</label>
                      <input type="file" id="inputfile" name="goodsImage">
                      <p class="help-block">请添加图片</p>
                      </div>
                      <div class="checkbox">
                      </div>
                   </div>
                   <div class="modal-footer">
                      <button type="button" class="btn btn-default"
                         data-dismiss="modal">取消添加
                      </button>
                      <button type="submit" class="btn btn-primary">
                         添加商品
                      </button>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
    </section>
  @endsection
