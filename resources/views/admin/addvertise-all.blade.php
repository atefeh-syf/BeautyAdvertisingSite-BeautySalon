@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">همه آگهی ها</h1>
          </div>

          <!-- Content Row -->

          <div class="row justify-content-center">
            @if (Session::has('message'))
                <div class="alert alert-success">
                {{ Session::get('message') }}
                </div>
            @endif
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
                      <th>شماره آگهی</th>
                      <th>عنوان </th>
                      <th>استان</th>
                      <th>نام ثبت کننده آگهی</th>
                      <th> نام مالک</th>
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
                              {{$addvertise->CustomerName}}
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
                                <button  onclick="return confirm('آیا مطمئن به تایید این آگهی هستید؟')"   type="submit" href="#" class="btn btn-success btn-circle btn-sm">
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
                                <button onclick="return confirm('آیا مطمئن به حذف این آگهی هستید؟')"  type="submit" href="#" class="btn btn-danger btn-circle btn-sm">
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
      
@endsection
  
