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
            <div class="col-md-4">
              <label data-error="wrong" data-success="right">نام دسته</label>
              <input type="text" id="title" name="title" class="form-control">

              <label data-error="wrong" data-success="right">عنوان</label>
              <textarea id="name" name="name" class="form-control" cols="30" rows="10"></textarea>

              <button id="add" value="add" href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
                </span>
                <span class="text">افزودن</span>
              </a>
            </div>
            
            <div class="col-md-8">
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