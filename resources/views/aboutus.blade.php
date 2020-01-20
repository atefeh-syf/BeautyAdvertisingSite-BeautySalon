@extends('layouts.app')
@section('content')
<!-- ****** aboutus Area Start ****** -->
<section class="dorne-about-area bg-img bg-overlay" style="background-image: url(pic/blogbg.jpg);">
    <div class="row">
        <div class="col-12">
            <div class="about-heading text-center">
                <h1> درباره ما </h1>
                <span></span>
            </div>
        </div>
    </div>
</section>
<section class="container ">
    <div class="row justify-content-center">
        <div class="col-md-10 about-section ">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel
                augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat
                ligula non volutpat. Sed mollis orci non cursus vestibulum. Pellentesque vitae est a augue laoreet venenatis sed eu
                felis. Sed cursus magna nec turpis ullamcorper, eget rutrum felis egestas. Nunc odio ex, fermentum efficitur nunc
                vitae, efficitur hendrerit diam. Lorem ipsum dolor sit amet, consectetur.
            </p>
            <div class="about-social">
                <h5> ما را در شبکه های اجتماعی دنبال کنید </h5>
                <br>
                <div class="about-social-btns">
                    <a href="#"><i class="fa fa-linkedin fa-2x" aria-haspopup="true"></i></a>
                    <a href="#"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube fa-2x" aria-haspopup="true"></i></a>
                    <a href="#"><i class="fa fa-facebook fa-2x" aria-haspopup="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** aboutus Area End ****** -->
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
