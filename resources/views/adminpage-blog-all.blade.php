@extends('layouts.admin')
@section('content')
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
        <a class="nav-link" href="/admin">
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
    
      </li>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{-- {{$user_info->name}} --}}</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  پروفایل
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  تنظیمات
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                  </i>
                          
                          {{ __('خروج از حساب کاربری') }}
                  
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>

                  
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
            <h1 class="h3 mb-0 text-gray-800">داشبورد</h1>
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
                        <td>{{$addvertise->CustomerName}}</td>
                        <td>
                            <span> <a href="#" class="opration"> تایید </a> </span>
                            <span> <a href="#" class="opration"> ویرایش </a> </span>
                            <span> <a href="#" class="opration"> حذف </a> </span>
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

@endsection