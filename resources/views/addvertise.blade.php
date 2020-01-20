@extends('layouts.app')
@section('content')
<!-- ****** Addvertise Area Start ****** -->
<section class="dorne-explore-area d-md-flex">
    <!-- Explore Search Area -->
    <div class="explore-search-area d-md-flex">
        <!-- Explore Search Form -->
        <div class="explore-search-form">
            <div class="search-sidebar mt-50 mb-30">
                <input class="search-form-control" type="text" placeholder="کلمه یا متن مورد نظر خود را جستجو کنید " aria-label="Search">
            </div>
            <!-- Sidebar Content -->
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> جدیدترین آگهی ها </h6>
                    
                    <ul>
                        <li><img src="pic/side-pic.jpeg"> <a href="#"> عنوان مقاله </a></li>
                        <li><img src="pic/side-pic.jpeg"> <a href="#"> عنوان مقاله </a></li>
                        <li><img src="pic/side-pic.jpeg"> <a href="#"> عنوان مقاله </a></li>
                        <li><img src="pic/side-pic.jpeg"> <a href="#"> عنوان مقاله </a></li>
                        <li><img src="pic/side-pic.jpeg"> <a href="#"> عنوان مقاله </a></li>
                    </ul>
                </div>
            </div>
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> نوشته های تازه </h6>
            
                    <ul>
                        <li> <a href="#"> عنوان مقاله </a></li>
                        <li> <a href="#"> عنوان مقاله </a></li>
                        <li> <a href="#"> عنوان مقاله </a></li>
                        <li> <a href="#"> عنوان مقاله </a></li>
                        <li> <a href="#"> عنوان مقاله </a></li>
                    </ul>
                </div>
            </div>
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> دسته ها </h6>
            
                    <ul>
                        <li> <a href="#"> سالن های زیبایی </a></li>
                        <li> <a href="#"> آموزشگاه های زیبایی </a></li>
                        <li> <a href="#"> خدمات زیبایی </a></li>
                        <li> <a href="#"> لوازم آرایشی و بهداشتی </a></li>
                        <li> <a href="#"> مجله آرایشی </a></li>
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
                    <img src="pic/2.jpg" class="add-img">
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="description">
                        <div class="section-heading dark justify-content-center">
                            <h3> سالن زیبایی مریم </h3>
                            <span id="add-span"></span>
                        </div>
                        <p>
                            <i class="fas fa-map-marker-alt"> </i> آدرس سالن زیبایی مریم:
                            <br>
                            تهران، خیابان اقدسیه، بعد از سفارت چين، روبروی خیابان فیروزبخش، جنب بانک صادرات، پلاک 84، ساختمان نیما،
                            طبقه اول، واحد
                            4
                        </p>
                        <a href="#" class="add-phone"><i class="fas fa-phone"></i> 09121111111</a>
                        <a href="#" class="add-phone"><i class="fas fa-phone"></i> 09121111111</a>
                
                        <button type="button" class="btn btn-primary tele"> <i class="fa fa-telegram" aria-hidden="true"></i> تلگرام ما
                        </button>
                        <button type="button" class="btn btn-primary insta"> <i class="fa fa-instagram" aria-hidden="true"></i>
                            اینستاگرام ما
                        </button>
                
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex justify-content-between">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="information">
                        <h4><i class="fas fa-info-circle"></i> درباره سالن زیبایی مریم </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel
                            augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat
                            ligula non volutpat. Sed mollis orci non cursus vestibulum. Pellentesque vitae est a augue laoreet venenatis sed eu
                            felis. Sed cursus magna nec turpis ullamcorper, eget rutrum felis egestas. Nunc odio ex, fermentum efficitur nunc
                            vitae, efficitur hendrerit diam. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex justify-content-center">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <h4><i class="fas fa-comment-alt"></i> نظرات کاربران </h4>
                    <br>
                    <p><i class="fas fa-comment"></i> نوشتن دیدگاه جدید </p>
                    <div class="comments-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="دیدگاه "></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn dorne-btn"> ارسال </button>
                                </div>
                            </div>
                        </form>
                    </div>
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