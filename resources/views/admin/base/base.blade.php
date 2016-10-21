<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>361°后台管理首页</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('admins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/skins/_all-skins.min.css') }}">
    <style type="text/css">
    .table th, .table td { 
        text-align: center; 
        height:38px;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      function doDel(id){
        if(confirm('确定删除吗？')){
//                1.获得form表单节点对象
            var myform = document.myform;
//                2 设置提交方式
            myform.action = "/stu/"+id;
            myform.submit();
        }
      }
      function doDelt(id){
        if(confirm('确定删除吗？')){
//                1.获得form表单节点对象
            var myform = document.myform;
//                2 设置提交方式
            myform.action = "/file/"+id;
            myform.submit();
        }
      }
      function del(id){
        if(confirm('确定删除吗？')){
          $.ajax({
            type:'get',
            url:'{{ URL("/del")}}',
            data:{tid:id},
            datatype:'json',
            success:function(data){
              $('#types').remove();
              alert(data);
            },
            error:function(data){
              alert('错误');
            }
          });
        }
      }
    </script>

    <script type="text/javascript">
    // 删除
       function head(id){
        if(confirm('确定删除吗？')){
//                1.获得form表单节点对象
            var myform = document.myform;
//                2 设置提交方式
            myform.action = "/Del/"+id;
            myform.submit();
        }
      }
      // 添加商品
      function add(tid){
            var myform = document.getElementById('form');
            myform.action="/addgds/"+tid;

      }
      // 修改商品
      function update(id){
        var myform = document.getElementById('newform');
        myform.action = "/update/"+id;
      }
    </script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- 头部开始 31-279 -->
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ URL('/admin') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>敢</b>死队</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>网站管理</b>首页</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ session('adminuser')->adminname }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    <p>
                      {{ session('adminuser')->adminname }} - 网站开发工程师
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">个人中心</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ URL('/admin/login') }}" class="btn btn-default btn-flat">退出</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- 左侧边栏开始 281-443 -->
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('admins/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ session('adminuser')->adminname }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
          </div>
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主导航</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>用户信息管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/user') }}"><i class="fa fa-circle-o"></i> 用户详情信息表</a></li>
                <li><a href="{{ URL('/stu/create') }}"><i class="fa fa-circle-o"></i> 添加用户</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>商品管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/type') }}"><i class="fa fa-circle-o"></i>商品类别分类详情表</a></li>
                <li><a href="{{ URL('/types') }}"><i class="fa fa-circle-o"></i>商品列表</a></li>
                <li><a href="{{ URL('/addType') }}"><i class="fa fa-circle-o"></i>添加商品类别</a></li>
                <!-- <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li> -->
              </ul>
            </li>
            <!-- <li class="treeview"> -->
         <!--      <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>评论管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/comment') }}"><i class="fa fa-circle-o"></i>管理中心</a></li>
                <!-- <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
              <!-- </ul> -->
            <!-- </li> -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>订单管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('type/order') }}"><i class="fa fa-circle-o"></i>待发货列表</a></li>
                <li><a href="{{ URL('type/ordera') }}"><i class="fa fa-circle-o"></i>发货单列表</a></li>
                <li><a href="{{ URL('type/orderb') }}"><i class="fa fa-circle-o"></i>退货单列表</a></li>
<!--                 <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li> -->
              </ul>
            </li>
           
             <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>管理员信息</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/adminUser') }}"><i class="fa fa-circle-o"></i> 管理员信息表</a></li>
                <li><a href="{{ URL('/adminAdd') }}"><i class="fa fa-circle-o"></i> 添加管理员</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>新闻管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('xinwen/press') }}"><i class="fa fa-circle-o"></i> 新闻详情表</a></li>
                <li><a href="{{ URL('xinwen/addWen') }}"><i class="fa fa-circle-o"></i> 添加新闻</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>站点管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/config') }}"><i class="fa fa-circle-o"></i>网站配置</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>友情链接</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('/interlinkage') }}"><i class="fa fa-circle-o"></i>友情链接表</a></li>
                <li><a href="{{ URL('/addinter') }}"><i class="fa fa-circle-o"></i>添加链接</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- 左侧边栏结束 -->
          <!-- 主体内容开始 447-536 -->
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">      
            @yield("content")
          </div><!-- /.content-wrapper -->
      <!-- 主体内容结束 -->
      <!-- 页脚开始 538-544 -->
      <!-- 页脚结束 -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
               </script>
            </div><!-- /.modal-content -->
      </div><!-- /.modal -->
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('admins/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('admins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('admins/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admins/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admins/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admins/dist/js/demo.js') }}"></script>
    <!-- <link href="{{asset('admins/bootstrap/css/bootstrap.min.css') }}"rel="stylesheet"> -->
    <!--<script src="{{ asset('admins/bootstrap/js/bootstrap.min.js') }}  "></script>-->
    @section('myscript')
    @show
  </body>
</html>
