@extends('layouts.admin')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">افزودن آگهی</h1>
          </div>
          <!-- Content Row -->
          <form action="/add" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
              <div class="col-md-8">
                <input type="text" class="form-control" placeholder="نام آگهی" name="name" required>
                <input type="email" class="form-control" placeholder="ایمیل مالک" name="email" required>
                <input type="text" class="form-control" placeholder="شماره تلفن" name="phone" required>
                <input type="text" class="form-control" placeholder="نام مالک" name="CustomerName" required>
                <input type="text" class="form-control" placeholder="عنوان آگهی" name="title" required>
                <div class="form-check form-check-inline">
                  <label class="container">آگهی ویژه
                    <input type="radio" checked="checked" name="Special" value="1">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="container">آگهی رایگان
                    <input type="radio" name="Special" value="0">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <input type="text" class="form-control" placeholder="آدرس تلگرام" name="telegram">
                <input type="text" class="form-control" placeholder="آدرس اینستاگرام" name="instagram">
                <textarea class="txt-area" name="description" placeholder="متن آگهی"></textarea><br>
                <textarea class="txt-area" name="address" placeholder="آدرس"></textarea>
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
                      <div class="col-md-8">
                        <button type="submit" href="#" class="btn btn-success btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                          </span>
                          <span class="text">  انتشار    </span>
                        </button>
                      </div>
                      {{-- <div class="col-md-8">
                        <a href="#" class="btn btn-secondary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                          <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="text">نمایش آگهی</span>
                        </a>
                      </div> --}}

                      
                    </div>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-header">شهر و دسته</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <select class="form-control" id="cat" class="cat" name="cat" required>
                                <option selected disabled>دسته</option>
                                <option value="1">  سالن های زیبایی  </option>
                                <option value="2">  آموزشگاه های زیبایی  </option>
                                <option value="3">  خدمات زیبایی  </option>
                                <option value="4">  لوازم آرایشی و بهداشتی  </option>
                         </select>
                      </div>
                    <br>
                      <div class="col-12 col-md-4">
                          <select class="form-control" id="ostan" class="ostan" name="ostan" required>
                              <option selected disabled>استان</option>
                              <option value="آذربایجان شرقی"> آذربایجان شرقی </option>
                              <option value="آذربایجان غربی"> آذربایجان غربی </option>
                              <option value="اردبیل"> اردبیل </option>
                              <option value="اصفهان"> اصفهان </option>
                              <option value="البرز"> البرز </option>
                              <option value="ایلام"> ایلام </option>
                              <option value="بوشهر"> بوشهر </option>
                              <option value="تهران"> تهران </option>
                              <option value="چهارمحال و بختیاری"> چهارمحال و بختیاری </option>
                              <option value="خراسان جنوبی"> خراسان جنوبی </option>
                              <option value="خراسان رضوی "> خراسان رضوی </option>
                              <option value="خراسان شمالی"> خراسان شمالی </option>
                              <option value="خوزستان"> خوزستان </option>
                              <option value="زنجان"> زنجان </option>
                              <option value="سمنان"> سمنان </option>
                              <option value="سیستان و بلوچستان"> سیستان و بلوچستان </option>
                              <option value="فارس"> فارس </option>
                              <option value="قزوین"> قزوین </option>
                              <option value="قم"> قم </option>
                              <option value="کردستان"> کردستان </option>
                              <option value="کرمان"> کرمان </option>
                              <option value="کرمانشاه"> کرمانشاه </option>
                              <option value="کهگیلویه و بویراحمد"> کهگیلویه و بویراحمد </option>
                              <option value="گلستان"> گلستان </option>
                              <option value="گیلان"> گیلان </option>
                              <option value="لرستان"> لرستان </option>
                              <option value="مازندران"> مازندران </option>
                              <option value="مرکزی"> مرکزی </option>
                              <option value="هرمزگان"> هرمزگان </option>
                              <option value="همدان"> همدان </option>
                              <option value="یزد"> یزد </option>
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
                      
                      <input type="file" id="img" name="image" accept="image/*" required>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
          </form>
            
          </div>
          

          
        </div>
@endsection       