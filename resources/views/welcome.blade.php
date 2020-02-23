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
                            <form action="/search" method="post">
                                @csrf
                                <input type="text"  name="text" class="custom-select" style="width:24%;" placeholder="متن مورد نظر خود را وارد کنید" id="src-text">
                                <select name="cat" class="custom-select" style="width:24%;">
                                    <option> انتخاب همه </option>
                                    <option value="1"> سالن های زیبایی </option>
                                    <option value="2"> آموزشگاه های زیبایی </option>
                                    <option value="4"> لوازم آرایشی و بهداشتی </option>
                                    <option value="3"> خدمات زیبایی </option>
                                </select>
                                <select name="ostan" class="custom-select" style="width:24%;">
                                    <option>استان</option>
                                    <option value="آذربایجان شرقی" selected> آذربایجان شرقی </option>
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
                            
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i>
                                    جستجو </button>
                            </form>
                            @isset($searchs)
                                @foreach ($searchs as $search)
                                    {{$search}}<br>
                                @endforeach
                            @endisset
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
                                    <a href="cat/beautysalons">
                                        <h6> سالن های زیبایی </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        
                        <div class="col-12 col-sm-6 col-md">
                        <a href="cat/beautyclass">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                <div class="catagory-content">
                                    <img src="pic/salon.png" alt="">
                                    
                                        <h6> آموزشگاه های زیبایی </h6>
                                    
                                </div>
                            </div>
                            </a>
                        </div>
                        
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                        <a href="cat/cosmetic">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="catagory-content">
                                    <img src="pic/makeup.png" alt="">
                                    
                                        <h6> لوازم آرایشی و بهداشتی </h6>
                                    
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                        <a href="cat/beauty_services">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="catagory-content">
                                    <img src="pic/beauty-treatment.png" alt="">
                                    
                                        <h6> خدمات زیبایی </h6>
                                    
                                </div>
                            </div>
                            </a>
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
                    <a href="/cat/last"><p> مشاهده همه آگهی ها > </p></a>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col-12 col-lg-6">
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
            </div> --}}
            @foreach ($addvertises as $addvertise)
                @if($addvertise->confirm=='1')
                    <div class="col-12 col-lg-6">
                        <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                            <div class="feature-events-thumb">
                                <img src="storage/{{$addvertise->image}}" alt="">
                                <div class="date-map-area d-flex">
                                    <a href="#">  {{$addvertise->jalali}}</a>
                                    <a href="#"><img src="pic/map.png" alt=""></a>
                                </div>
                            </div>
                            <div class="feature-events-content">
                                <h5>
                                    @if($addvertise->cat=='1')
                                    سالن زیبایی
                                    @elseif($addvertise->cat== '2')
                                        آموزشگاه زیبایی
                                    @elseif($addvertise->cat == '3')
                                        کلینیک زیبایی
                                    @elseif($addvertise->cat == '4')
                                    فروشگاه آرایشی
                                    @endif
                                    {{$addvertise->name}}
                                </h5>
                                <h6>{{$addvertise->ostan}}</h6>
                                <p>{{-- {{$addvertise->description}} --}}</p>
                            </div>
                            <div class="feature-events-details-btn">
                                <a href="/a/{{$addvertise->id}}">+</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
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
                    <a href="/blog"><p> مشاهده آرشیو مقالات > </p></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    <!-- Single Features Area -->
                    @foreach ($articles as $article)
                    
                        <div class="single-features-area">
                            <a href="/blog/{{$article->id}}">
                            <img src="storage/{{$article->image}}" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>نام دسته</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5> {{$article->title}} </h5>
                                    <p> {{$article->description}} </p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                    
                    {{-- <!-- Single Features Area -->
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
                    </div> --}}
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