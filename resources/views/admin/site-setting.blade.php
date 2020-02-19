
@extends('layouts.admin')
@section('content')   
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">تنظیمات</h1>
          </div>

          <!-- Content Row -->


          <div class="row">
            <div class="col-md-4">
              
              <form action="/setting/update" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')
                    <label data-error="wrong" data-success="right">عنوان سایت </label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $option_news['title'] }}" required autocomplete="title" autofocus>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                  <label data-error="wrong" data-success="right">معرفی کوتاه </label>
                  <input name="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') ?? $option_news['desc'] }}" required autocomplete="desc" autofocus>
                        @error('desc')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                  <label data-error="wrong" data-success="right"> نشانی سایت </label>
                  <input name="site" type="text" class="form-control @error('site') is-invalid @enderror" name="site" value="{{ old('site') ?? $option_news['site'] }}" required autocomplete="site" autofocus>
                        @error('site')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                  <label data-error="wrong" data-success="right"> ایمیل مدیریت </label>
                  <input name="email_admin" type="email" class="form-control @error('email_admin') is-invalid @enderror" name="email_admin" value="{{ old('email_admin') ?? $option_news['email_admin'] }}" required autocomplete="email_admin" autofocus>
                        @error('email_admin')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  

                  <button type="submit" href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">ذخیره تغییرات</span>
                  </a>

              </form>
              
            </div>
          </div>
        </div>
@endsection