@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ویرایش آگهی</h1>
          </div>
          <!-- Content Row -->

          <form action="/add/{{$addvertise->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
              <div class="col-md-8">
                <input type="text" placeholder="نام آگهی" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $addvertise->name }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="email" placeholder="ایمیل مالک" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $addvertise->email }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="شماره تلفن" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?? $addvertise->phone }}" required autocomplete="phone" autofocus>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="نام مالک" class="form-control @error('CustomerName') is-invalid @enderror" name="CustomerName" value="{{ old('CustomerName') ?? $addvertise->CustomerName }}" required autocomplete="CustomerName" autofocus>
                    @error('CustomerName')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                <input type="text" placeholder="عنوان آگهی" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $addvertise->title }}" required autocomplete="title" autofocus>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  <textarea class="txt-area" name="description" placeholder="متن آگهی">{{$addvertise->description}}</textarea><br>
                <textarea class="txt-area" name="address" placeholder="آدرس">{{$addvertise->address}}</textarea>
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
                        <span class="text">نمایش آگهی</span>
                        </a>
                      </div>

                      
                    </div>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-header">شهر و دسته</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                      <select class="form-control" id="cat" class="cat" name="cat" selected="{{$addvertise->cat}}">
                              <option value="1" {{ $addvertise->cat == 1 ? 'selected' : '' }}>  سالن های زیبایی  </option>
                              <option value="2" {{ $addvertise->cat == 2 ? 'selected' : '' }}>  آموزشگاه های زیبایی  </option>
                              <option value="3" {{ $addvertise->cat == 3 ? 'selected' : '' }}>  خدمات زیبایی  </option>
                              <option value="4" {{ $addvertise->cat == 4 ? 'selected' : '' }}>  لوازم آرایشی و بهداشتی  </option>
                          </select>
                      </div>
                    <br>
                      <div class="col-12 col-md-4">
                          <select class="form-control" id="ostan" class="ostan" name="ostan">
                              <option selected disabled>استان</option>
                              <option value="آذربایجان شرقی" {{ $addvertise->ostan == 'آذربایجان شرقی'  ? 'selected' : '' }}> آذربایجان شرقی </option>
                              <option value="آذربایجان غربی" {{ $addvertise->ostan == 'آذربایجان غربی' ? 'selected' : '' }}> آذربایجان غربی </option>
                              <option value="اردبیل" {{ $addvertise->ostan == 'اردبیل' ? 'selected' : '' }}> اردبیل </option>
                              <option value="اصفهان" {{ $addvertise->ostan == 'اصفهان' ? 'selected' : '' }}> اصفهان </option>
                              <option value="البرز" {{ $addvertise->ostan == 'البرز' ? 'selected' : '' }}> البرز </option>
                              <option value="ایلام" {{ $addvertise->ostan == 'ایلام' ? 'selected' : '' }}> ایلام </option>
                              <option value="بوشهر" {{ $addvertise->ostan == 'بوشهر' ? 'selected' : '' }}> بوشهر </option>
                              <option value="تهران" {{ $addvertise->ostan == 'تهران' ? 'selected' : '' }}> تهران </option>
                              <option value="چهارمحال و بختیاری" {{ $addvertise->ostan == 'چهارمحال و بختیاری' ? 'selected' : '' }}> چهارمحال و بختیاری </option>
                              <option value="خراسان جنوبی" {{ $addvertise->ostan == 'خراسان جنوبی' ? 'selected' : '' }}> خراسان جنوبی </option>
                              <option value="خراسان رضوی " {{ $addvertise->ostan == 'خراسان رضوی' ? 'selected' : '' }}> خراسان رضوی </option>
                              <option value="خراسان شمالی" {{ $addvertise->ostan == 'خراسان شمالی' ? 'selected' : '' }}> خراسان شمالی </option>
                              <option value="خوزستان" {{ $addvertise->ostan == 'خوزستان' ? 'selected' : '' }}> خوزستان </option>
                              <option value="زنجان" {{ $addvertise->ostan == 'زنجان' ? 'selected' : '' }}> زنجان </option>
                              <option value="سمنان" {{ $addvertise->ostan == 'سمنان' ? 'selected' : '' }}> سمنان </option>
                              <option value="سیستان و بلوچستان" {{ $addvertise->ostan == 'سیستان و بلوچستان' ? 'selected' : '' }}> سیستان و بلوچستان </option>
                              <option value="فارس" {{ $addvertise->ostan == 'فارس' ? 'selected' : '' }}> فارس </option>
                              <option value="قزوین" {{ $addvertise->ostan == 'قزوین' ? 'selected' : '' }}> قزوین </option>
                              <option value="قم" {{ $addvertise->ostan == 'قم' ? 'selected' : '' }}> قم </option>
                              <option value="کردستان" {{ $addvertise->ostan == 'کردستان' ? 'selected' : '' }}> کردستان </option>
                              <option value="کرمان" {{ $addvertise->ostan == 'کرمان'  ? 'selected' : '' }}> کرمان </option>
                              <option value="کرمانشاه" {{ $addvertise->ostan == 'کرمانشاه' ? 'selected' : '' }}> کرمانشاه </option>
                              <option value="کهگیلویه و بویراحمد" {{ $addvertise->ostan == 'کهگیلویه و بویراحمد' ? 'selected' : '' }}> کهگیلویه و بویراحمد </option>
                              <option value="گلستان" {{ $addvertise->ostan == 'گلستان' ? 'selected' : '' }}> گلستان </option>
                              <option value="گیلان" {{ $addvertise->ostan == 'گیلان' ? 'selected' : '' }}> گیلان </option>
                              <option value="لرستان" {{ $addvertise->ostan == 'لرستان' ? 'selected' : '' }}> لرستان </option>
                              <option value="مازندران" {{ $addvertise->ostan == 'مازندران' ? 'selected' : '' }}> مازندران </option>
                              <option value="مرکزی" {{ $addvertise->ostan == 'مرکزی' ? 'selected' : '' }}> مرکزی </option>
                              <option value="هرمزگان" {{ $addvertise->ostan == 'هرمزگان' ? 'selected' : '' }}> هرمزگان </option>
                              <option value="همدان" {{ $addvertise->ostan == 'همدان' ? 'selected' : '' }}> همدان </option>
                              <option value="یزد" {{ $addvertise->ostan == 'یزد' ? 'selected' : '' }}> یزد </option>
                          </select>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-header">عکس شاخص</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                      
                      <input type="file" id="img" src="storage/{{$addvertise->image}}" name="image" accept="image/*">
                       @if($addvertise->image!='')
                          <img src="/storage/{{$addvertise->image}}" alt="" style="Width:50px;">
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
  
