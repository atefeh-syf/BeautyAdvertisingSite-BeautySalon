
@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ویرایش نوشته</h1>
          </div>

          <!-- Content Row -->
          <form action="/blog/{{$blog->id}}" enctype="multipart/form-data" method="post">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="col-md-8">
                  <input type="text" placeholder="عنوان نوشته" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $blog->title }}" required autocomplete="title" autofocus>
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <input type="text" placeholder="توضیح" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $blog->description }}" required autocomplete="description" autofocus>
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  <textarea class="txt-area-tiny"  name="text" placeholder="متن نوشته">{{$blog->text}}</textarea>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4">
                    <div class="card-header">عملیات</div>
                    <div class="card-body">
                      <div class="row">
                        {{-- <div class="col-md-8">
                          <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                              <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">دخیره پیش نویس</span>
                          </a>
                        </div> --}}
                        <div class="col-md-4">
                          <button type="submit" href="#" class="btn btn-success btn-icon-split btn-sm">
                            <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                            </span>
                            <span class="text">انتشار</span>
                          </button>
                        </div>
                        <div class="col-md-8">
                          <a href="/blog/{{$blog->id}}" class="btn btn-secondary btn-icon-split btn-sm">
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
                        @if($blog->image!='')
                            <img src="/storage/{{$blog->image}}" alt="" style="Width:70px;">
                        @endif
                        
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </form>  
            </div>
        
        </div>
@endsection
  