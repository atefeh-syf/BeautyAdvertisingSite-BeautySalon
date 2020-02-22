@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">دسته بندی ها</h1>
          </div>

          <!-- Content Row -->

          <div class="row justify-content-center">
             <form action="/add-addCat" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-md-4">
                  <label data-error="wrong" data-success="right">نام دسته</label>
                  <input type="text" id="title" name="title" class="form-control">

                  <label data-error="wrong" data-success="right">عنوان</label>
                  <textarea id="name" name="name" class="form-control" cols="30" rows="10"></textarea>

                  <button type="submit" id="add" value="add" href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">افزودن</span>
                  </button>
                </div>
              </form>
              
            <div class="col-md-8">
               @if (Session::has('message'))
                <div class="alert alert-success" style="text-align: center;">
                {{ Session::get('message') }}
                </div>
              @endif
              <!-- DataTales Example -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">دسته ها</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="cat" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  
                    <tr>
                      <th>نام</th>
                      <th>عنوان </th>
                      <th>عملیات</th>
                    </tr>
                  </thead>
                  {{-- <tfoot>
                    <tr>
                      <th>نام</th>
                      <th>عنوان </th>
                      <th>تعداد</th>
                    </tr>
                  </tfoot> --}}
                  <tbody>
                    @foreach ($category as $cat)
                      <tr>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->title}}</td>
                        <td>
                          <span>
                              <form action="/catdel/{{$cat->id}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button onclick="return confirm('آیا مطمئن به حذف  این کامنت هستید؟')" type="submit" href="#" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                              </form>
                          </span>
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
        </div>
@endsection