@extends("admin.base.base")

@section("content")
          <section class="content">
          <div class="row">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title glyphicon glyphicon-plus">添加用户信息</h3>&nbsp;&nbsp;<a href="{{ URL('/user')}}"<button class="glyphicon glyphicon-arrow-left">用户列表</button></a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/stu" method="post">
                 <div class="row form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">手机号:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name1" name="phone">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">用户名:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name2" name="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label form-label">密　码:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="card_name3" name="password">
                      </div>
                    </div>
                    <script type="text/javascript">
                      function toValidate(){
                          var val = new validate({
                            /*rules里面是检验规则，
                            *key为需要检验的input的id,
                            *value为此input对应的检验规则
                            */
                            rules:{
                              card_name:"notEmpty",   
                              card_name1:"mobile",
                              card_name2:"notEmpty",
                              card_name3:"password"
                            },
                            /*submitFun里面为检验成功后要执行的方法*/
                            submitFun:function(){
                              toSubmit();
                            }
                          })
                        }
                        // 验证
                          function toSubmit(){
                            alert("验证通过，提交啦 ！！！")
                          }
                    </script>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                           <?php
                            if(empty($look)){
                                echo "";
                            }else{
           
                           ?>
                            {{ $look }}
                            <?php
                            }
                            ?>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" onclick="toValidate()">添加</button>
                  </div><!-- /.box-footer -->
                  </div> 
                </form>
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection

