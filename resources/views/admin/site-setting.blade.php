
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
                        
                  <label data-error="wrong" data-success="right"> آدرس </label>
                  <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $option_news['address'] }}" required autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                   <label data-error="wrong" data-success="right"> شماره تماس 1 </label>
                  <input name="phon1" type="text" class="form-control @error('phon1') is-invalid @enderror" name="phon1" value="{{ old('phon1') ?? $option_news['phon1'] }}" required autocomplete="phon1" autofocus>
                        @error('phon1')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                   <label data-error="wrong" data-success="right"> شماره تماس 2 </label>
                  <input name="phon2" type="text" class="form-control @error('phon2') is-invalid @enderror" name="phon2" value="{{ old('phon2') ?? $option_news['phon2'] }}" required autocomplete="phon2" autofocus>
                        @error('phon2')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        
                   <label data-error="wrong" data-success="right"> تلگرام </label>
                  <input name="tel" type="text" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') ?? $option_news['tel'] }}" required autocomplete="tel" autofocus>
                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        
                   <label data-error="wrong" data-success="right"> اینستاگرام </label>
                  <input name="insta" type="text" class="form-control @error('insta') is-invalid @enderror" name="insta" value="{{ old('insta') ?? $option_news['insta'] }}" required autocomplete="insta" autofocus>
                        @error('insta')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        
                   <label data-error="wrong" data-success="right"> لینکدین </label>
                  <input name="linkdin" type="text" class="form-control @error('linkdin') is-invalid @enderror" name="linkdin" value="{{ old('linkdin') ?? $option_news['linkdin'] }}" required autocomplete="linkdinfacebook" autofocus>
                        @error('linkdin')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        
                   <label data-error="wrong" data-success="right"> فیسبوک </label>
                  <input name="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') ?? $option_news['facebook'] }}" required autocomplete="facebook" autofocus>
                        @error('facebook')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        
                   <label data-error="wrong" data-success="right"> youtube </label>
                  <input name="youtube" type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ old('youtube') ?? $option_news['youtube'] }}" required autocomplete="youtube" autofocus>
                        @error('youtube')
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