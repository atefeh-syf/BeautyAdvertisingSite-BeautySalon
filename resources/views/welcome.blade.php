@extends('layouts.app')
@section('content')
    {{-- @foreach ($addvertises as $addvertise)
        {{$addvertise}}<br>
    @endforeach --}}
<!-- ***Welcome Area Start*** -->
<section class= "dorne-welcome-area bg-img bg-overlay" style="background-image: url(pic/purple-flowers.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                            <h6 style="color: #fff;margin-right: 10px;margin-bottom: 30px;" >آرایشگاه،آموزشگاه،خدمات زیبایی و محصول آرایشی مورد نظر خود را جستجو کنید</h6>
                            <form action="#" method="get">
                                <input type="text" class="custom-select" style="width:24%;" placeholder="متن مورد نظر خود را وارد کنید" id="src-text">
                                <select class="custom-select" style="width:24%;">
                                    <option> انتخاب همه </option>
                                    <option> سالن های زیبایی </option>
                                    <option> آموزشگاه های زیبایی </option>
                                    <option> لوازم آرایشی و بهداشتی </option>
                                    <option> خدمات زیبایی </option>
                                </select>
                                <select class="custom-select" style="width:24%;">
                                    <option> انتخاب همه </option>
                                    <option> آذربایجان شرقی </option>
                                    <option> آذربایجان غربی </option>
                                    <option> اردبیل </option>
                                    <option> اصفهان </option>
                                    <option> البرز </option>
                                    <option> ایلام </option>
                                    <option> بوشهر </option>
                                    <option> تهران </option>
                                    <option> چهارمحال و بختیاری </option>
                                    <option> خراسان جنوبی </option>
                                    <option> خراسان رضوی </option>
                                    <option> خراسان شمالی </option>
                                    <option> خوزستان </option>
                                    <option> زنجان </option>
                                    <option> سمنان </option>
                                    <option> سیستان و بلوچستان </option>
                                    <option> فارس </option>
                                    <option> قزوین </option>
                                    <option> قم </option>
                                    <option> کردستان </option>
                                    <option> کرمان </option>
                                    <option> کرمانشاه </option>
                                    <option> کهگیلویه و بویراحمد </option>
                                    <option> گلستان </option>
                                    <option> گیلان </option>
                                    <option> لرستان </option>
                                    <option> مازندران </option>
                                    <option> مرکزی </option>
                                    <option> هرمزگان </option>
                                    <option> همدان </option>
                                    <option> یزد </option>
                                </select>
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i>
                                    جستجو </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***Welcome Area End*** -->
<!-- ***** Catagory Area Start ***** -->
<section class="dorne-catagory-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-catagories">
                    <div class="row">
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                <div class="catagory-content">
                                    <img src="pic/facial-treatment.png" alt="">
                                    <a href="beautysalons.html">
                                        <h6> سالن های زیبایی </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                <div class="catagory-content">
                                    <img src="pic/salon.png" alt="">
                                    <a href="beautyclass.html">
                                        <h6> آموزشگاه های زیبایی </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="catagory-content">
                                    <img src="pic/makeup.png" alt="">
                                    <a href="cosmetic.html">
                                        <h6> لوازم آرایشی و بهداشتی </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="catagory-content">
                                    <img src="pic/beauty-treatment.png" alt="">
                                    <a href="beauty services.html">
                                        <h6> خدمات زیبایی </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Catagory Area End ***** -->
<!-- ***** Features Events Area Start ***** -->
<section class="dorne-features-events-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4> آگهی ها </h4>
                    <p> مشاهده همه آگهی ها > </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <div class="feature-events-thumb">
                        <img src="pic/1.jpg" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 مهر</a>
                            <a href="#"><img src="pic/map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>کلینیک زیبایی گل یخ</h5>
                        <h6>کرج</h6>
                        <p> توضیحات </p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                    <div class="feature-events-thumb">
                        <img src="pic/2.jpg" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 مهر</a>
                            <a href="#"><img src="pic/map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5> سالن زیبایی مریم </h5>
                        <h6>تهران</h6>
                        <p> توضیحات </p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                    <div class="feature-events-thumb">
                        <img src="pic/3.jpg" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 مهر</a>
                            <a href="#"><img src="pic/map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5> آموزشگاه زیبایی کبیری </h5>
                        <h6>شیراز</h6>
                        <p> توضیحات </p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                    <div class="feature-events-thumb">
                        <img src="pic/4.jpg" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 مهر</a>
                            <a href="#"><img src="pic/map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>فروشگاه لوازم آرایشی بهداشتی کرکره</h5>
                        <h6> تهران </h6>
                        <p> توضیحات </p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                    <div class="feature-events-thumb">
                        <img src="pic/1.jpg" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 مهر</a>
                            <a href="#"><img src="pic/map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>کلینیک زیبایی گل یخ</h5>
                        <h6>کرج</h6>
                        <p> توضیحات </p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                    <div class="feature-events-thumb">
                        <img src="pic/2.jpg" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 مهر</a>
                            <a href="#"><img src="pic/map.png" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5> سالن زیبایی مریم </h5>
                        <h6>تهران</h6>
                        <p> توضیحات </p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Events Area End ***** -->
<!-- ***** Features Destinations Area Start ***** -->
<section class="dorne-features-destinations-area bg-img bg-overlay-9" style="background-image: url(pic/blogbg.jpg);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4> مقالات </h4>
                    <p> مشاهده آرشیو مقلات > </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="pic/blog1.jpg" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>نام دسته</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5> عنوان مقاله </h5>
                                <p> توصیحات </p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="pic/blog2.jpg" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>نام دسته</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5> عنوان مقاله </h5>
                                <p> توصیحات </p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="pic/blog1.jpg" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>نام دسته</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5> عنوان مقاله </h5>
                                <p> توصیحات </p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="pic/blog2.jpg" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>نام دسته</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5> عنوان مقاله </h5>
                                <p> توصیحات </p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="pic/blog1.jpg" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>نام دسته</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5> عنوان مقاله </h5>
                                <p> توصیحات </p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">ثبت نام</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-name">نام کاربری</label>
                    <input type="text" id="orangeForm-name" class="form-control">
                    
                </div>
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-email">ایمیل</label>
                    <input type="email" id="orangeForm-email" class="form-control">
                    
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">رمزعبور</label>
                    <input type="password" id="orangeForm-pass" class="form-control">
                    
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn dorne-btn">ثبت نام</button>
            </div>
        </div>
    </div>
</div>
<!-- ***** Features Destinations Area End ***** -->
@endsection