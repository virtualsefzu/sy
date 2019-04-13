<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>福州大学虚拟仿真实验室</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->


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
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>实验介绍</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->




      <!-- Nav Item - Charts -->
      <li class="nav-item">
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
        <!-- End of Topbar -->






          <!-- Content Row -->



            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">实验名称</h6>
              </div>
              <div class="card-body">
                <p>基于Unity3D的列管换热器传热实验的虚拟仿真平台设计</p>
              </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">实验目的</h6>
              </div>
              <div class="card-body">
                <p>  <p class="mb-0">（1）了解传热设备的主要结构和传热装置流程，掌握传热设备的操作方法。
<p class="mb-0">（2）掌握传热系数K、圆管内对流给热系数α1的测定方法，加深其概念和影响因素的理解。
<p class="mb-0">（3）掌握通过作图法或最小二乘法确定经验关联式Nu=ARe^mPr^n中常数普朗特数Pr的方法。
<p class="mb-0">（4）通过对普通套管换热器和强化套管换热器的比较，了解工程上强化传热的措施。</p>
                </p>
              </div>

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">实验原理</h6>
  <div class="card-body">
  <img  src="img/yuanli1.png" width="800" height="800"alt="">
  <p class="mb-0">  <img  src="img/yuanli2.png"width="800" height="800" alt="">


              </div>

              </div>
            </div>






              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">实验仪器设备（装置或软件等）</h6>
                </div>
                <div class="card-body">
                  <p>数据服务器、个人客户端</p>
                </div>
              </div>



                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">实验材料（或预设参数等）</h6>
                  </div>
                  <div class="card-body">
                    <p>预设参数：d外（管外径）=0.021m、d内（管内径）=0.019m、l(管长)=0.96m</p>
                  </div>
                </div>


                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">实验教学方法（举例说明采用的教学方法的使用目的、实施过程与实施效果）</h6>
                    </div>
                    <div class="card-body">
                      <p><p class="mb-0"><b>使用目的</b>： <p class="mb-0">通过引入虚拟设计的传热实验装置，搭建理论教学与实际训练中的过渡桥梁，能够有效解决两者难以融合的问题，提升相关工程实验知识与实训操作的效率和结果，优化教师上课质量以及学生学习体验。该实验装置聚合了教、学、练、评的教学功能，学生通过该实验装置进行虚拟仿真的实验操作，了解传热设备的主要结构和传热装置流程，掌握传热设备的操作方法，加深对传热系数、对流给热系数等重要概念及影响因素的理解，最终实现教学过程的“闭环控制”和教学效果的“形成性评价”，使教学过程更生动丰富，效果评估更高效精准，充分体现教育信息化、智能化的时代潮流。

<p class="mb-0"><b>实施过程</b>：
<p class="mb-0">（1）教师首先应进行虚拟仿真传热实验相关理论教学，学生掌握了实验相关实验理论后，进入之后的实验环节。
<p class="mb-0">（2）学生通过云平台启动虚拟仿真的实验装置，即进入虚拟传热实验。学生可以选择新手上路一步步进行实验操作等。虚拟仿真传热实验装置能够以真实的实验环境、实验流程、实验任务，让学生以第一视角体验与交互模式对传热实验装置的按钮、阀门、显示屏等了解传热实验具体实施流程并观察实时数据。与此同时，该实验系统将对学生的操作痕迹（例如是否按照实验步骤操作、是否符合操作规范）等进行科学准确的形成性评价。
<p class="mb-0">（3）云平台将自动记录学生虚拟仿真实验的过程和结果。教师可以通过云平台对学生输出的实验结果进行审阅和批改。若评价合格，学生或将有机会进行实物实训演练。

<p class="mb-0"><b>实施结果</b>： <p class="mb-0">通过“理论、虚拟、现实”三位一体化的教学方式，不仅大幅提高理论与实验教学效果，提高学生对虚拟仿真传热实验的认识；而且能保证学生的实验操作正确、规范，适时提醒，提高实验的准确性和可实施性，并在最后进行客观的学习成果评价，弥补实验在教资源、设备、流程方面的不足。</p>
                    </div>

                  </div>
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">实验方法与步骤要求</h6>
                    </div>
                    <div class="card-body">
                        <img  src="img/buzhou.png" width="800" height="800"alt="">
                      <p><p class="mb-0">1）实验开始，通过鼠标点击打开水蒸气发生器电源开关开始加热
<p class="mb-0">2）打开开关加热的同时，鼠标点击微微打开蒸汽控制阀15
<p class="mb-0">3）打开空气进口阀
<p class="mb-0">4）打开控制台上的风机电源开关（置于全开档），启动风机。
<p class="mb-0">5）打开换热器冷凝水出口阀24，实验过程中可间断性地开启阀24排放冷凝水。
<p class="mb-0">6）调节蒸汽进口阀的开度，逐渐加热换热器，使换热器由“冷态”转变为“热态”。
<p class="mb-0">7）用蒸汽进口阀（可用冷凝水出口阀辅助调节）将蒸汽压力调节至0.01MPa左右（温度略高于100℃）。
<p class="mb-0">8）鼠标点击调节空气旁路调节阀（阀2），改变空气流量。
<p class="mb-0">9）热交换过程稳定后方可记录实验数值。
<p class="mb-0">10）记录7组实验数据，完成实验。
<p class="mb-0">11）关闭蒸汽发生器。
<p class="mb-0">  12）关闭风机电源与换热器空气进口阀。
<p class="mb-0">  13）排放系统冷凝水。
<p class="mb-0">14)关闭仪表电源和设备总电源。</p>
                    </div>
                  </div>
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">实验结果与结论要求</h6>
                    </div>
                    <div class="card-body">
                      <p>学生在云平台上完成相应的注册和登陆，下载实验系统压缩包到本地，自主完成实验的学习及操作，记录实验数据、给出结果并撰写个性化的实验分析报告，从而达到熟练掌握列管换热器传热实验，为后续的学习打下良好的基础。</p>
                    </div>
                  </div>

                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">考核要求</h6>
                    </div>
                    <div class="card-body">
                      <p>要求能够熟练进行实验操作，完成实验步骤，准确记录实验数据，数据处理的过程正确，能够利用实验的基本理论对实验结果进行分析，撰写实验报告。
考核方式：学生登入云平台，进行注册和登陆，下载实验系统压缩包到本地，进行实验操作。实验完成后，系统将进行评分，学生撰写实验报告后上传至云平台，教师综合实验操作分数和实验报告分数进行实验总分的评定。（总分=实验操作分数*70%+实验报告分数*30%）</p>
                    </div>
                  </div>



                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">面向学生要求</h6>
                    </div>
                    <div class="card-body">
                      <p><p class="mb-0">（1）专业与年级要求
<p class="mb-0">本项目适用于化学类各专业、各年级的和学生，同时也使用于各层次化学研究人员。
<p class="mb-0">（2）基本知识和能力要求等
<p class="mb-0">本项目研究成果适用于各种知识和水平的学生，也适用于各层次化学研究人员，可针对不同层次进行学习资源分配。</p>
                    </div>
                  </div>

                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">实验团队</h6>
                    </div>
                    <div class="card-body">
                      <p><p class="mb-0">成员介绍
                        <p class="mb-0"><b>胡展瑞</b>：	数学与计算机科学学院 &nbsp&nbsp&nbsp&nbsp计算机科学与技术
                        <p class="mb-0">  <b>陈超颖</b>：	数学与计算机科学学院	&nbsp&nbsp&nbsp&nbsp计算机科学与技术
<p class="mb-0"><b>张&nbsp&nbsp&nbsp&nbsp峰</b>：	数学与计算机科学学院	&nbsp&nbsp&nbsp&nbsp计算机科学与技术
<p class="mb-0"><b>张建娴</b>：	数学与计算机科学学院&nbsp&nbsp&nbsp&nbsp	计算机科学与技术
<p class="mb-0"><b>赖&nbsp&nbsp&nbsp&nbsp楠</b>	：石油与化工学院	&nbsp&nbsp&nbsp&nbsp化学工程与工艺
  <p class="mb-0">指导老师
    <p class="mb-0"><b>张&nbsp&nbsp&nbsp&nbsp栋</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>朱丹红</b>
                        </p>
                    </div>
                  </div>





              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">实验操作视频演示</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>


                </div>
              </div>


              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>版权所有 &copy; 福州大学</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
