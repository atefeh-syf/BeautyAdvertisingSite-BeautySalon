@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">همه نوشته ها</h1>
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
              <h6 class="m-0 font-weight-bold text-primary">نوشته ها</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>شماره</th>
                      <th>عنوان </th>
                      <th>نویسنده</th>
                      <th>عملیات</th>
                      <th>تاریخ ثبت</th>
                    </tr>
                  </thead>{{-- 
                  <tfoot>
                    <tr>
                      <th>شماره</th>
                      <th>عنوان </th>
                      <th>نویسنده</th>
                      <th>عملیات</th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                      @foreach ($articles as $atr)
                          <tr>
                          <td>{{$atr->id}}</td>
                          <td>{{$atr->title}}</td>
                          <td>مدیر سایت</td>
                          <td>
                            
                            <span>
                                <a href="/blog/{{$atr->id}}/edit" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                            </span>

                            <form action="/blog/{{$atr->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button  onclick="return confirm('آیا مطمئن به حذف این نوشته هستید؟')"    type="submit" href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <span>
                                
                            </span>
                          </td>
                          <td>{{$atr->jalali}}</td>
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
@endsection