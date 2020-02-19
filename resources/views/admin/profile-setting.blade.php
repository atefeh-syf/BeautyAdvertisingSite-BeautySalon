@extends('layouts.admin')
@section('content')   
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">پروفایل</h1>
          </div>

          <!-- Content Row -->

          <div class="row">
            <div class="col-md-4">
              <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <label data-error="wrong" data-success="right">نام </label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('title') ?? $user->name }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              <label data-error="wrong" data-success="right"> نام کاربری </label>
              <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? $user->username }}"  autocomplete="username" autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
              

              <label data-error="wrong" data-success="right"> ایمیل </label>
               <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror

              <label data-error="wrong" data-success="right"> شماره تلفن </label>
              <input name="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $user->phone }}"  autocomplete="phone" autofocus>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror


              <label data-error="wrong" data-success="right">آواتار</label>
              @if($user->image!='')
                <img src="/storage/{{$user->image}}" alt="" style="Width:70px;">
              @endif
              <input type="file" id="img" name="image" accept="image/*">
              
                  <br>
              <button type="submit" href="#" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-check"></i>
                </span>
                <span class="text">ذخیره تغییرات</span>
              </button>

            </form>
              
            </div>
          </div>
        </div>
@endsection