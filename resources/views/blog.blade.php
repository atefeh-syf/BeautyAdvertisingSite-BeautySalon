@extends('layouts.app')
@section('content')
<!-- ****** Addvertise Area Start ****** -->
<section class="dorne-explore-area d-md-flex">
    <!-- Explore Search Area -->
    <div class="explore-search-area d-md-flex">
        <!-- Explore Search Form -->
        <div class="explore-search-form">
            <div class="search-sidebar mt-50 mb-30">
               {{--  <input class="search-form-control" type="text" placeholder="کلمه یا متن مورد نظر خود را جستجو کنید " aria-label="Search"> --}}
            </div>
            <!-- Sidebar Content -->
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> جدیدترین آگهی ها </h6>
                    
                    <ul>
                        
                        @foreach ($addvertises as $addvertise)
                            <a href="a/{{$addvertise->id}}"><li><img src="/storage/{{$addvertise->image}}" style="width:75px;height:50px;"> 
                                @if($addvertise->cat=='1')
                                    سالن زیبایی
                                @elseif($addvertise->cat == '2')
                                    آموزشگاه زیبایی
                                @elseif($addvertise->cat== '3')
                                    کلینیک زیبایی 
                                @elseif($addvertise->cat == '4')
                                    فروشگاه آرایشی 
                                @endif
                                {{$addvertise->name}} 
                            </li></a>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> نوشته های تازه </h6>
                    <ul>
                        @foreach ($arts as $art)
                            <li><a href="#">{{$art->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- Explore Map Area -->
    <div class="row explore-add-area mt-30 mb-30 d-md-flex">
            @foreach ($articles as $article)
                <div class="col-12 col-sm-6 col-lg-4">
                    
                        <div class="single-features-area mb-50">
                            <img src="/storage/{{$article->image}}" alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p> {{$article->title}} </p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5> {{$article->description}} </h5>
                                    <a href="/blog/{{$article->id}}"> مشاهده مقاله </a>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
            @endforeach
            
    </div>
</section>
<!-- ****** Addvertise Area End ****** -->
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
@endsection