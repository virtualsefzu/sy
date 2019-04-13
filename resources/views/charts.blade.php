<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>福州大学虚拟仿真实验室</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">基于Unity3D的列管换热器传热虚拟仿真实验 <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>实验介绍</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('charts')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>开始实验</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>



            <div class="topbar-divider d-none d-sm-block"></div>




            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">实验狂人阿福仔</span>
                <img class="img-profile rounded-circle" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1554218184214&di=75e91da3af9afeabf04c5cfd9937a2d5&imgtype=0&src=http%3A%2F%2Fimg17.3lian.com%2Fd%2Ffile%2F201701%2F19%2Fdb0216ce907fdc50e21178873286eff5.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  退出
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">文件下载</h6>
          </div>
<p><p class="mb-0"> &nbsp&nbsp&nbsp&nbsp计算机硬件配置要求
  <br/>
<p class="mb-0"> &nbsp&nbsp&nbsp&nbsp处理器：1GHz 32位或64位处理器
    <br/>
<p class="mb-0"> &nbsp&nbsp&nbsp&nbsp内存：1 GB 及以上
    <br/>
<p class="mb-0"> &nbsp&nbsp&nbsp&nbsp显卡：支持DirectX 9 128M 以上
    <br/>
<p class="mb-0"> &nbsp&nbsp&nbsp&nbsp硬盘空间：16G 以上
    <br/>
<p class="mb-0"> &nbsp&nbsp&nbsp&nbsp显示器：要求分辨率在1024*768像素及以上
</p>
                <br/>
  <form class="user" method="get" action="{{route('download')}}" >
                    {{ csrf_field() }}
                    <button href="{{route('download')}}" name='download'   hspace="50"   style="width: 180px;height: 40px" class="btn btn-primary btn-user btn-block">
                      点击下载实验文件
                    </button>
                      <br/>

</form>

        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">数据输入</h6>
          </div>
        <br/>

      <table border="3" align="center">
        <class="m-0 font-weight-bold text-primary">
        <tr>
          <td>  &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp 序号 &nbsp&nbsp&nbsp&nbsp  </p> &nbsp&nbsp&nbsp&nbsp  </td>
          <td>  &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  空气流量
            V(m³/h)FIC101  &nbsp&nbsp&nbsp&nbsp </p>  &nbsp&nbsp&nbsp&nbsp  </td>
          <td>  &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  空气进口温度
            t1(°C)TI101 &nbsp&nbsp&nbsp&nbsp   </p> &nbsp&nbsp&nbsp&nbsp  </td>
          <td>  &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp 空气出口温度
            t2(°C)TI103 &nbsp&nbsp&nbsp&nbsp  </p>  &nbsp&nbsp&nbsp&nbsp  </td>
          <td>  &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  蒸汽温度
              T(°C)TI102  &nbsp&nbsp&nbsp&nbsp </p> &nbsp&nbsp&nbsp&nbsp  </td>

        </tr>

      <tr>
        <td>      &nbsp&nbsp&nbsp&nbsp    <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  1  &nbsp&nbsp&nbsp&nbsp   </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>         <input type="text" style="width:230px; height:45px;" />
</td>

      </tr>

      <tr>
        <td>       &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  2 &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>      <input type="text" style="width:230px; height:45px;" />
<td>      <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
      </tr>
      <tr>
        <td>       &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  3 &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>      <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
      </tr>
      <tr>
        <td>       &nbsp&nbsp&nbsp&nbsp      <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  4   &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>      <input type="text" style="width:230px; height:45px;" />
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>

      </tr>
      <tr>
        <td>       &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  5  &nbsp&nbsp&nbsp&nbsp   </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>

      </tr>
      <tr>
        <td>      &nbsp&nbsp&nbsp&nbsp      <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  6   &nbsp&nbsp&nbsp&nbsp </p>
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
      </tr>
      <tr>
  </table>
    <br/>
      <br/>
        <br/>
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">数据处理</h6>
          </div>
        <br/>

      </table>
      <table border="3" align ="center">


      <tr>
        <td>    &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp E =  &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>     <input type="text" style="width:230px; height:45px;" />
</td>



        <td>      &nbsp&nbsp&nbsp&nbsp    <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  ρ =    &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />


        <td>      &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp  Cp =   &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>

      </tr>
      <tr>
        <td>     &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " > &nbsp&nbsp&nbsp&nbsp  μ =   &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />



        <td>   &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp  λ =   &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>      <input type="text" style="width:230px; height:45px;" />

    <td>    &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp u =  &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>      <input type="text" style="width:230px; height:45px;" />
</td>
</tr>

<tr>
  <td>    &nbsp&nbsp&nbsp&nbsp    <p class="m-0 font-weight-bold text-primary " >   &nbsp&nbsp&nbsp&nbsp ms =  &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>      <input type="text" style="width:230px; height:45px;" />
</td>
  <td>    &nbsp&nbsp&nbsp&nbsp    <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp Q =  &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>

  <td>    &nbsp&nbsp&nbsp&nbsp   <p class="m-0 font-weight-bold text-primary " >   &nbsp&nbsp&nbsp&nbsp A =    &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>
</tr>

<tr>
  <td>    &nbsp&nbsp&nbsp&nbsp     <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp Δtm = &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>

  <td>    &nbsp&nbsp&nbsp&nbsp    <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp k =  &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>

  <td>    &nbsp&nbsp&nbsp&nbsp  <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp α1 =   &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>
</tr>

<td>    &nbsp&nbsp&nbsp&nbsp  <p class="m-0 font-weight-bold text-primary " >   &nbsp&nbsp&nbsp&nbsp Pr =   &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>        <input type="text" style="width:230px; height:45px;" />
</td>

<td>     &nbsp&nbsp&nbsp&nbsp  <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp Nu =  &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>     <input type="text" style="width:230px; height:45px;" />
</td>

        <td>   &nbsp&nbsp&nbsp&nbsp  <p class="m-0 font-weight-bold text-primary " >  &nbsp&nbsp&nbsp&nbsp Re =    &nbsp&nbsp&nbsp&nbsp  </p>
</td>
<td>       <input type="text" style="width:230px; height:45px;" />
</td>

      </tr>
      <tr>


      </table>


      <br/>
      <br/>
      <div class="modal-footer">
      <form name="input" action="html_form_action.php" method="get"    >
<input type="submit" a class="btn btn-primary"value="提交" style="margin-right:600px;">




</form>

</div>
  <br/>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">参考数据和公式</h6>
    </div>

        <div class="card-body">
        <img  src="img/111.png" width="600" height="600"alt="">
        <p class="mb-0">  <img  src="img/112.png"width="600" height="400" alt="">
            <p class="mb-0">  <img  src="img/113.png"width="600" height="360" alt="">

      </p>
    </div>
  </div>

      </table>

    </tr>
    </table>



    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>版权所有 &copy; 福州大学</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">确认退出吗？</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">确认实验结束后点击“退出”按钮</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">取消</button>
          <a class="btn btn-primary" href="login.html">退出</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>



</body>

</html>
