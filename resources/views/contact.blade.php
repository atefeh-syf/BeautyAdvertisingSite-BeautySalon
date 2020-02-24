@extends('layouts.app')
@section('content')
<!-- ***** Contact Area Start ***** -->
<div class="dorne-contact-area d-md-flex" id="contact">
    <!-- Contact Form Area -->
    <div class="contact-form-area ">
        <div class="contact-text">
            <h4> اطلاعات تماس با ما </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus.
                Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget
                quis ipsum. Vivamus accumsan consequat ligula non volutpat. Sed mollis orci non cursus vestibulum.
                Pellentesque vitae est a augue laoreet venenatis sed eu felis. Sed cursus magna nec turpis ullamcorper,
                eget rutrum felis egestas. Nunc odio ex, fermentum efficitur nunc vitae, efficitur hendrerit diam.
                Lorem ipsum dolor sit amet, consectetur.</p>
                
            <div class="contact-info d-lg-flex">
                <div class="single-contact-info">
                    <h6><i class="fa fa-map-signs" aria-hidden="true"></i> باغستان خیابان امام خمینی  </h6>
                    <h6><i class="fa fa-phone" aria-hidden="true"></i> 021 12312123 </h6>
                </div>
                <div class="single-contact-info">
                    <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> info@beatysalon.com</h6>
                    <h6><i class="fa fa-phone" aria-hidden="true"></i>  0912 1231212 </h6>
                </div>
            </div>
        </div>
        <span style="width: 100%;text-align: center;display: block;color: #2a2a2a;">
            @if (Session::has('message'))
                <div class="alert alert-success" style="display: inline-block;">
                    {{ Session::get('message') }}
                </div>
            @endif
        </span>
        <div class="contact-form">
            <div class="contact-form-title">
                <h6> فرم تماس با ما </h6>
            </div>
            <form action="/contact" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="نام و نام خانوادگی">
                               @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12">
                        <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}"  autocomplete="subject" autofocus placeholder="موضوع">
                               @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="col-12">
                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="نظرات ،انتقادات و پیشنهادات"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn dorne-btn"> ارسال </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- ***** Contact Area End ***** -->
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
