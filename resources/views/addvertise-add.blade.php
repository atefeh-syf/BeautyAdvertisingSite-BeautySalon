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
  <!-- Tiny MCE-->
  <script src="https://cdn.tiny.cloud/1/m4e73qfmbf6mj7k75so6if3rk59fz1jj3o97nmkdgwhat5ke/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
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
            <h1 class="h3 mb-0 text-gray-800">افزودن آگهی</h1>
          </div>
          <!-- Content Row -->
          <form action="/add" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="نام آگهی" name="name">
                <input type="email" class="form-control" placeholder="ایمیل مالک" name="email">
                <input type="text" class="form-control" placeholder="شماره تلفن" name="phone">
                <input type="text" class="form-control" placeholder="نام مالک" name="CustomerName">
                <input type="text" class="form-control" placeholder="عنوان آگهی" name="title">
                <textarea class="txt-area" name="description" placeholder="متن آگهی"></textarea><br>
                <textarea class="txt-area" name="address" placeholder="آدرس"></textarea>
              </div>
              <div class="col-md-4">
                <div class="card mb-4">
                  <div class="card-header">عملیات</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-flag"></i>
                          </span>
                          <span class="text">دخیره پیش نویس</span>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <button type="submit" href="#" class="btn btn-success btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                          </span>
                          <span class="text">انتشار</span>
                        </button>
                      </div>
                      <div class="col-md-8">
                        <a href="#" class="btn btn-secondary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                          <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">نمایش آگهی</span>
                        </a>
                      </div>

                      
                    </div>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-header">شهر و دسته</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                      <select class="form-control" id="cat" class="cat" name="cat">
                              <option value="1">  سالن های زیبایی  </option>
                              <option value="2">  آموزشگاه های زیبایی  </option>
                              <option value="3">  خدمات زیبایی  </option>
                              <option value="4">  لوازم آرایشی و بهداشتی  </option>
                          </select>
                      </div>
                    <br>
                      <div class="col-12 col-md-4">
                          <select class="form-control" id="ostan" class="ostan" name="ostan">
                              <option selected disabled>استان</option>
                              <option value="آذربایجان شرقی"> آذربایجان شرقی </option>
                              <option value="آذربایجان غربی"> آذربایجان غربی </option>
                              <option value="اردبیل"> اردبیل </option>
                              <option value="اصفهان"> اصفهان </option>
                              <option value="البرز"> البرز </option>
                              <option value="ایلام"> ایلام </option>
                              <option value="بوشهر"> بوشهر </option>
                              <option value="تهران"> تهران </option>
                              <option value="چهارمحال و بختیاری"> چهارمحال و بختیاری </option>
                              <option value="خراسان جنوبی"> خراسان جنوبی </option>
                              <option value="خراسان رضوی "> خراسان رضوی </option>
                              <option value="خراسان شمالی"> خراسان شمالی </option>
                              <option value="خوزستان"> خوزستان </option>
                              <option value="زنجان"> زنجان </option>
                              <option value="سمنان"> سمنان </option>
                              <option value="سیستان و بلوچستان"> سیستان و بلوچستان </option>
                              <option value="فارس"> فارس </option>
                              <option value="قزوین"> قزوین </option>
                              <option value="قم"> قم </option>
                              <option value="کردستان"> کردستان </option>
                              <option value="کرمان"> کرمان </option>
                              <option value="کرمانشاه"> کرمانشاه </option>
                              <option value="کهگیلویه و بویراحمد"> کهگیلویه و بویراحمد </option>
                              <option value="گلستان"> گلستان </option>
                              <option value="گیلان"> گیلان </option>
                              <option value="لرستان"> لرستان </option>
                              <option value="مازندران"> مازندران </option>
                              <option value="مرکزی"> مرکزی </option>
                              <option value="هرمزگان"> هرمزگان </option>
                              <option value="همدان"> همدان </option>
                              <option value="یزد"> یزد </option>
                          </select>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-header">عکس شاخص</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                      
                      <input type="file" id="img" name="image" accept="image/*">
                      </div>

                    </div>
                  </div>
                </div>
              </div>
          </form>
            
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
