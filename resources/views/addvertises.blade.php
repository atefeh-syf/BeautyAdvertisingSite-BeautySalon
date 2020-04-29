@extends('layouts.app')
@section('content')
<!-- ***** Listing Destinations Area Start ***** -->
<section class="dorne-listing-destinations-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-lists dark text-center">
                    <h4>
                        @if ($category=='last')
                         آگهی ها  
                        @elseif($category=='beautysalons')
                             آگهی های سالن های زیبایی
                        @elseif($category== 'beautyclass')
                          آگهی های آموزشگاه های زیبایی
                        @elseif($category == 'beauty_services')
                            آگهی های خدمات زیبایی
                        @elseif($category == 'cosmetic')
                            آگهی های لوازم آرایشی و بهداشتی 
                        @elseif($category == 'search')
                            نتیجه جستجو 
                        @else
                            آگهی های استان {{$category}} 
                        @endif
                    </h4>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Features Area -->
            @if(count($addvertises)>0)
                @foreach ($addvertises as $addvertise)
                    @if($addvertise->confirm=='1')
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-features-area mb-50">
                                <img src="/storage/{{$addvertise->image}}" alt="">
                                <!-- Price -->
                                <div class="price-start">
                                    <p> @if($addvertise->cat=='1')
                                            سالن زیبایی
                                        @elseif($addvertise->cat == '2')
                                            آموزشگاه زیبایی
                                        @elseif($addvertise->cat== '3')
                                            کلینیک زیبایی 
                                        @elseif($addvertise->cat == '4')
                                            فروشگاه لوازم آرایشی بهداشتی
                                        @endif
                                        {{$addvertise->name}}
                                    </p>
                                </div>
                                <div class="feature-content d-flex align-items-center justify-content-between">
                                    <div class="feature-title">
                                        <h5>{{$addvertise->address}}</h5>
                                        <a href="/a/{{$addvertise->id}}"> مشاهده آگهی </a>
                                    </div>
                                    <div class="feature-favourite">
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        @if ($addvertise->Special == 1)
                                            <img src="{{ asset('/storage/uploads/star(2).png') }}" alt="">
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                
                @endforeach
               
            @else
                
                    <h6 style="width: 100%;text-align: center;">
                    هیچ آگهی برای نمایش وجود ندارد
                    </h6>
                
            @endif
        </div>
        {{ $addvertises->links() }}
    </div>
</section>
<!-- ***** Listing Destinations Area End ***** -->
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