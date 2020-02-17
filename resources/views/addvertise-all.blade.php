<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> خوش آمدید </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>داشبورد </span></a>
      <!-- Nav Item - Blog Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-newspaper"></i>
          <span>آگهی ها</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="blog-all.html">همه آگهی ها</a>
            <a class="collapse-item" href="blog-add.html">افزودن آگهی</a>
            <a class="collapse-item" href="blog-categories.html">دسته ها</a>
          </div>
        </div>
        <!-- Nav Item - Blog Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-pen"></i>
          <span>نوشته ها</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/show-blog">همه نوشته ها</a>
            <a class="collapse-item" href="/add-blog">افزودن نوشته</a>
          </div>
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="جستجو..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav mr-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="جستجو..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Susan Ahmadi</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="admin-profile.html">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  پروفایل
                </a>
                <a class="dropdown-item" href="admin-profile-setting.html">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  تنظیمات
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  خروج از حساب کاربری
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">همه آگهی ها</h1>
          </div>

          <!-- Content Row -->

          <div class="row justify-content-center">

            <!-- DataTales Example -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">آگهی ها</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>شماره</th>
                      <th>عنوان </th>
                      <th>استان</th>
                      <th>ثبت کننده</th>
                      <th>وضعیت</th>
                      <th>عملیات</th>
                      <th>بازدید ها</th>
                      <th>تاریخ ثبت</th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr>
                      <th>شماره</th>
                      <th>عنوان </th>
                      <th>استان</th>
                      <th>ثبت کننده</th>
                      <th>عملیات</th>
                      <th>بازدید ها</th>
                      <th>تاریخ ثبت</th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                    @foreach ($addvertises as $addvertise)
                    <tr>
                          <td>{{$addvertise->id}}</td>
                          <td>
                              @if($addvertise->cat=='1')
                                  سالن زیبایی
                              @elseif($addvertise->cat == '2')
                                  آموزشگاه زیبایی
                              @elseif($addvertise->cat== '3')
                                  کلینیک زیبایی 
                              @elseif($addvertise->cat == '4')
                                  فروشگاه لوازم آرایشی بهداشتی
                              @endif
                              {{$addvertise->name}}
                          </td>
                          <td>{{$addvertise->ostan}}</td>
                          <td>
                            @if($addvertise->is_admin == 0) 
                              {{$addvertise->CustomerName}}
                            @elseif($addvertise->is_admin == 1)
                              مدیر سایت
                            @endif
                          </td>
                          <td>
                            @if($addvertise->confirm == 0) 
                              تایید نشده
                            @elseif($addvertise->confirm == 1)
                              تایید شده
                            @endif
                          </td>
                          <td>
                          <span>
                            @if($addvertise->confirm == 0)
                              <form action="/confirm/{{$addvertise->id}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" href="#" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                              </form>
                            @endif
                          </span>
                          <span>
                            
                              <a href="/add/{{$addvertise->id}}/edit" class="btn btn-info btn-circle btn-sm">
                                  <i class="fas fa-info-circle"></i>
                              </a>
                          </span>
                          <span>
                              <form action="/add/{{$addvertise->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                          </td>
                          <td>1212</td>
                          <td>{{$addvertise->jalali}}</td>
                      </tr>
                    @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
              </div>
            </div>
            

          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
