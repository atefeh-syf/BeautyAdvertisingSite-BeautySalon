@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">افزودن نوشته</h1>
          </div>

          <!-- Content Row -->
          <form action="/blog-add" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
              <div class="col-md-8">
                <input type="text" name="title" class="form-control" placeholder="عنوان نوشته">
                <input type="text" name="description"  class="form-control" placeholder="توضیح">
                <textarea class="txt-area"  name="text" placeholder="متن نوشته"></textarea>
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
                        <span class="text">نمایش نوشته</span>
                        </a>
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
              
            </div>
          </form>

          
        </div>
        <!-- /.container-fluid -->
@endsection