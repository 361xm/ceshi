@extends("admin.base.base")

@section("content")
          <section class="content">
          <div class="row">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">添加用户信息</h3>&nbsp;&nbsp;<a href="{{ URL('/user')}}"<button class="glyphicon glyphicon-arrow-left">用户列表</button></a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/stu" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputUserName3" class="col-sm-2 control-label">用户名</label>
                      <div class="col-sm-3">
                        <input type="username" class="form-control" id="inputEmail3" placeholder="userName" name="username">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <input type="hidden" name="_method" value="post">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">手机号</label>
                      <div class="col-sm-3">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="phone" name="phone" onkeyup="this.value=this.value.replace(/^1[3|5]{1}\d{9}$/)">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                      <div class="col-sm-3">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                      </div>
                    </div>
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
                    <button type="submit" class="btn btn-info pull-right">添加</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection

