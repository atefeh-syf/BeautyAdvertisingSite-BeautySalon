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
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  
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
                {{-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> --}}
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
            <h1 class="h3 mb-0 text-gray-800">ویرایش آگهی</h1>
          </div>
          <!-- Content Row -->

          <form action="/add/{{$addvertise->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
              <div class="col-md-8">
                <input type="text" placeholder="نام آگهی" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $addvertise->name }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="email" placeholder="ایمیل مالک" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $addvertise->email }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="شماره تلفن" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $addvertise->phone }}" required autocomplete="phone" autofocus>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="نام مالک" class="form-control @error('CustomerName') is-invalid @enderror" name="CustomerName" value="{{ old('CustomerName') ?? $addvertise->CustomerName }}" required autocomplete="CustomerName" autofocus>
                    @error('CustomerName')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="عنوان آگهی" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $addvertise->title }}" required autocomplete="title" autofocus>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  <textarea class="txt-area" name="description" placeholder="متن آگهی">{{$addvertise->description}}</textarea><br>
                <textarea class="txt-area" name="address" placeholder="آدرس">{{$addvertise->address}}</textarea>
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
                      <select class="form-control" id="cat" class="cat" name="cat" selected="{{$addvertise->cat}}">
                              <option value="1" {{ $addvertise->cat == 1 ? 'selected' : '' }}>  سالن های زیبایی  </option>
                              <option value="2" {{ $addvertise->cat == 2 ? 'selected' : '' }}>  آموزشگاه های زیبایی  </option>
                              <option value="3" {{ $addvertise->cat == 3 ? 'selected' : '' }}>  خدمات زیبایی  </option>
                              <option value="4" {{ $addvertise->cat == 4 ? 'selected' : '' }}>  لوازم آرایشی و بهداشتی  </option>
                          </select>
                      </div>
                    <br>
                      <div class="col-12 col-md-4">
                          <select class="form-control" id="ostan" class="ostan" name="ostan">
                              <option selected disabled>استان</option>
                              <option value="آذربایجان شرقی" {{ $addvertise->ostan == 'آذربایجان شرقی'  ? 'selected' : '' }}> آذربایجان شرقی </option>
                              <option value="آذربایجان غربی" {{ $addvertise->ostan == 'آذربایجان غربی' ? 'selected' : '' }}> آذربایجان غربی </option>
                              <option value="اردبیل" {{ $addvertise->ostan == 'اردبیل' ? 'selected' : '' }}> اردبیل </option>
                              <option value="اصفهان" {{ $addvertise->ostan == 'اصفهان' ? 'selected' : '' }}> اصفهان </option>
                              <option value="البرز" {{ $addvertise->ostan == 'البرز' ? 'selected' : '' }}> البرز </option>
                              <option value="ایلام" {{ $addvertise->ostan == 'ایلام' ? 'selected' : '' }}> ایلام </option>
                              <option value="بوشهر" {{ $addvertise->ostan == 'بوشهر' ? 'selected' : '' }}> بوشهر </option>
                              <option value="تهران" {{ $addvertise->ostan == 'تهران' ? 'selected' : '' }}> تهران </option>
                              <option value="چهارمحال و بختیاری" {{ $addvertise->ostan == 'چهارمحال و بختیاری' ? 'selected' : '' }}> چهارمحال و بختیاری </option>
                              <option value="خراسان جنوبی" {{ $addvertise->ostan == 'خراسان جنوبی' ? 'selected' : '' }}> خراسان جنوبی </option>
                              <option value="خراسان رضوی " {{ $addvertise->ostan == 'خراسان رضوی' ? 'selected' : '' }}> خراسان رضوی </option>
                              <option value="خراسان شمالی" {{ $addvertise->ostan == 'خراسان شمالی' ? 'selected' : '' }}> خراسان شمالی </option>
                              <option value="خوزستان" {{ $addvertise->ostan == 'خوزستان' ? 'selected' : '' }}> خوزستان </option>
                              <option value="زنجان" {{ $addvertise->ostan == 'زنجان' ? 'selected' : '' }}> زنجان </option>
                              <option value="سمنان" {{ $addvertise->ostan == 'سمنان' ? 'selected' : '' }}> سمنان </option>
                              <option value="سیستان و بلوچستان" {{ $addvertise->ostan == 'سیستان و بلوچستان' ? 'selected' : '' }}> سیستان و بلوچستان </option>
                              <option value="فارس" {{ $addvertise->ostan == 'فارس' ? 'selected' : '' }}> فارس </option>
                              <option value="قزوین" {{ $addvertise->ostan == 'قزوین' ? 'selected' : '' }}> قزوین </option>
                              <option value="قم" {{ $addvertise->ostan == 'قم' ? 'selected' : '' }}> قم </option>
                              <option value="کردستان" {{ $addvertise->ostan == 'کردستان' ? 'selected' : '' }}> کردستان </option>
                              <option value="کرمان" {{ $addvertise->ostan == 'کرمان'  ? 'selected' : '' }}> کرمان </option>
                              <option value="کرمانشاه" {{ $addvertise->ostan == 'کرمانشاه' ? 'selected' : '' }}> کرمانشاه </option>
                              <option value="کهگیلویه و بویراحمد" {{ $addvertise->ostan == 'کهگیلویه و بویراحمد' ? 'selected' : '' }}> کهگیلویه و بویراحمد </option>
                              <option value="گلستان" {{ $addvertise->ostan == 'گلستان' ? 'selected' : '' }}> گلستان </option>
                              <option value="گیلان" {{ $addvertise->ostan == 'گیلان' ? 'selected' : '' }}> گیلان </option>
                              <option value="لرستان" {{ $addvertise->ostan == 'لرستان' ? 'selected' : '' }}> لرستان </option>
                              <option value="مازندران" {{ $addvertise->ostan == 'مازندران' ? 'selected' : '' }}> مازندران </option>
                              <option value="مرکزی" {{ $addvertise->ostan == 'مرکزی' ? 'selected' : '' }}> مرکزی </option>
                              <option value="هرمزگان" {{ $addvertise->ostan == 'هرمزگان' ? 'selected' : '' }}> هرمزگان </option>
                              <option value="همدان" {{ $addvertise->ostan == 'همدان' ? 'selected' : '' }}> همدان </option>
                              <option value="یزد" {{ $addvertise->ostan == 'یزد' ? 'selected' : '' }}> یزد </option>
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
                      
                      <input type="file" id="img" src="storage/{{$addvertise->image}}" name="image" accept="image/*">
                       @if($addvertise->image!='')
                          <img src="/storage/{{$addvertise->image}}" alt="" style="Width:50px;">
                       @endif
                      
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
  <script src="{{ URL::asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  {{-- <script src="{{ URL::asset('vendor/chart.js/Chart.min.js')}}"></script> --}}
  <script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>

  <!-- Page level custom scripts -->
  {{-- <script src="{{ URL::asset('js/demo/chart-area-demo.js')}}"></script> --}}
  <script src="{{ URL::asset('js/demo/datatables-demo.js')}}"></script>

  
</body>

</html>
