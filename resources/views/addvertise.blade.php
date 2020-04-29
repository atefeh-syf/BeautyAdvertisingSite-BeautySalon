@extends('layouts.app')
@section('content')
<!-- ****** Addvertise Area Start ****** -->
<section class="dorne-explore-area d-md-flex">
    <!-- Explore Search Area -->
    <div class="explore-search-area d-md-flex">
        <!-- Explore Search Form -->
        <div class="explore-search-form">
            <div class="search-sidebar mt-50 mb-30">
                {{-- <input class="search-form-control" type="text" placeholder="کلمه یا متن مورد نظر خود را جستجو کنید " aria-label="Search"> --}}
            </div>
            <!-- Sidebar Content -->
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> جدیدترین آگهی ها </h6>
                    
                    <ul>
                        
                        @foreach ($addvertises as $addver)
                            <a href="/a/{{$addver->id}}"><li><img src="/storage/{{$addver->image}}" style="width:75px;">
                                @if($addver->cat=='1')
                                    سالن زیبایی
                                @elseif($addver->cat == '2')
                                    آموزشگاه زیبایی
                                @elseif($addver->cat== '3')
                                    کلینیک زیبایی 
                                @elseif($addver->cat == '4')
                                    فروشگاه آرایشی 
                                @endif
                                {{$addver->name}} 
                            </li></a>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> نوشته های تازه </h6>
            
                    <ul>
                        @foreach ($articles as $article)
                            <li><a href="/blog/{{$article->id}}">{{$article->title }}</a></li>
                        @endforeach
                        
                       
                    </ul>
                </div>
            </div>
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> دسته ها </h6>
            
                    <ul>
                        <li> <a href="/cat/beautysalons"> سالن های زیبایی </a></li>
                        <li> <a href="/cat/beautyclass"> آموزشگاه های زیبایی </a></li>
                        <li> <a href="/cat/beauty_services"> خدمات زیبایی </a></li>
                        <li> <a href="/cat/cosmetic"> لوازم آرایشی و بهداشتی </a></li>
                        <li> <a href="/blog"> مجله آرایشی </a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- Explore Map Area -->
    <div class="row explore-add-area mt-30 mb-30 d-md-flex justify-content-between">
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex justify-content-between">
            <div class="row d-md-flex">
                <div class="col-md-5">
                    <img src="/storage/{{$addvertise->image}}" class="add-img">
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="description">
                        <div class="section-heading dark justify-content-center">
                            
                            <h3>
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
                            </h3>
                            <span id="add-span"></span>
                            <p style="font-size: 12px;">
                                @if ($addvertise->Special == 1)
                                    <img src="{{ asset('/storage/uploads/star(2).png') }}">
                                        آگهی ویژه
                                @endif
                            <p>
                        </div>
                        <p>
                            <i class="fa fa-map-marker-alt"> </i> آدرس 
                                @if($addvertise->cat=='1')
                                    سالن زیبایی
                                @elseif($addvertise->cat == '2')
                                    آموزشگاه زیبایی
                                @elseif($addvertise->cat== '3')
                                    کلینیک زیبایی 
                                @elseif($addvertise->cat == '4')
                                    فروشگاه آرایشی 
                                @endif
                                {{$addvertise->name}}:
                                
                            <br>
                            {{$addvertise->address}}
                            
                        </p>
                        <a href="tel:09124337947" class="add-phone"><i class="fa fa-phone"></i> {{$addvertise->phone}} </a>
                
                        <a href="https://t.me/{{$addvertise->telegram}}/" style="display: inline;">
                            <button type="button" class="btn btn-primary tele"> <i class="fa fa-telegram" aria-hidden="true"></i> تلگرام ما </button>
                        </a>
                        <a href="https://www.instagram.com/{{$addvertise->insta}}/" style="display: inline;">
                            <button type="button" class="btn btn-primary insta"> <i class="fa fa-instagram" aria-hidden="true"></i>
                                اینستاگرام ما
                            </button>
                        </a>
                
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex justify-content-between">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="information">
                        <h4><i class="fa fa-info-circle"></i> درباره 
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
                        </h4>
                        <p>
                            {{$addvertise->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex justify-content-center">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <span style="width: 100%;text-align: center;display: block;color: #2a2a2a;">
                        @if (Session::has('message'))
                        <div class="alert alert-success" style="display: inline-block;">
                        {{ Session::get('message') }}
                        </div>
                        @endif
                    </span>
                    <h4> <i class="fa fa-comment"></i> نوشتن دیدگاه جدید </h4>
                    <br/>
                    <div class="comments-form">
                        <form action="/c" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="نام و نام خانوادگی">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ایمیل">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="دیدگاه " required></textarea>
                                </div>
                                {{-- {{ Form::hidden('banner_id', $addvertise->id) }} --}}
                                <input id="banner_id" name="banner_id" type="hidden" class="form-control @error('banner_id') is-invalid @enderror" value="{{$addvertise->id}}">
                                <div class="col-12">
                                    <button type="submit" class="btn dorne-btn"> ارسال </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    
                        <h4><i class="fa fa-comment-alt"></i> نظرات کاربران </h4>
                        
                            @if(count($comments)==0)
                                <h6 style="margin-right: 52px;margin-top: 52px;;text-align: center;">
                                    هیچ نظری برای نمایش وجود ندارد  
                                </h6>
                            @else
                                @foreach ($comments as $comment)
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="description">
                                                <p class="comments">
                                                    <i class="fa fa-map-marker-alt"> </i>{{$comment->name}} 
                                                    <br>
                                                    <span>{{$comment->description}}</span>
                                                </p>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                </div>
            </div>
        </div>
        
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
                    <i class="fa fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-name">نام کاربری</label>
                    <input type="text" id="orangeForm-name" class="form-control">

                </div>
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="orangeForm-email">ایمیل</label>
                    <input type="email" id="orangeForm-email" class="form-control">

                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
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