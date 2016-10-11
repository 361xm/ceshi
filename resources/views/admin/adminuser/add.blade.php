@extends("admin.base.base")

@section("content")
          <section class="content">
          <div class="row">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">添加管理员</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ URL('admin.login') }}" method="post">
                  <input type='hidden' name="_method" value="{{ csrf_token() }}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputUserName3" class="col-sm-2 control-label">username</label>
                      <div class="col-sm-10">
                        <input type="username" class="form-control" id="inputEmail3" placeholder="userName">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="form-group">   
                    <label for="editor1" class="col-sm-2 control-label">留言</label>
                    <div class="col-sm-10">
                      <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                This is my textarea to be replaced with CKEditor.
                      </textarea>  
                     </div>         
                  </div>                  
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">添加</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

@endsection

@section('myscript')
  <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //1 创建一个对象
        var config = new Object();
        //2 对象使用文件上传的方式
        config.filebrowserImageUploadUrl = "/uplode";
        // config.filebrowserImageUploadUrl = './upload.php?type=img';
        //3 添加config对象到CKeidtor中
        CKEDITOR.replace('editor1',config);
      });
    </script>
@endsection