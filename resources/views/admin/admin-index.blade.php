@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">داشبورد</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary  mb-1"> تعداد آگهی </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
                    </div>
                    <div class="col-auto"> 
                      <i class="far fa-newspaper fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success mb-1"> تعداد آگهی های تایید شده</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_confim}}</div>
                    </div>
                    <div class="col-auto">  
                      <i class="fas fa-certificate fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger mb-1"> تعداد آگهی های تایید نشده </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_no_confim}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-times-circle fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning mb-1"> تعداد کامنت ها </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count_comment}}</div>
                    </div>
                    <div class="col-auto"> 
                      <i class="far fa-comments fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->

          <div class="row justify-content-center">
            <!-- DataTales Example -->
          
             @if (Session::has('message'))
                <div class="alert alert-success">
                {{ Session::get('message') }}
                </div>
            @endif
          
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">کامنت ها</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>نام فرستنده</th>
                      <th>تاریخ </th>
                      <th>ایمیل</th>
                      <th>متن کامنت </th>
                      <th>وضعیت</th>
                      <th>عملیات</th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr>
                      <th>نام فرستنده</th>
                      <th>تاریخ </th>
                      <th>ایمیل</th>
                      <th>متن کامنات </th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                    @foreach ($comments as $comment)
                        <tr>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->jalali}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->description}}</td>
                            <td>
                            @if($comment->confirm == 0) 
                              تایید نشده
                            @elseif($comment->confirm == 1)
                              تایید شده
                            @endif
                          </td>
                          <td>
                          <span style="display: inline;float: right;">
                            @if($comment->confirm == 0)
                              <form action="/confirmcmt/{{$comment->id}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button  onclick="return confirm('آیا مطمئن به تایید این کامنت هستید؟')"  type="submit" href="#" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                              </form>
                            @endif
                          </span>
                          <span style="display: inline;float: right;">
                              <form action="/cmtdel/{{$comment->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button onclick="return confirm('آیا مطمئن به حذف  این کامنت هستید؟')" type="submit" href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                          </td>
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
      
@endsection