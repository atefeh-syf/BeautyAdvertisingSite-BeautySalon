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
            <h3 class="mb-50">همه چیز از بیوتی شو شروع میشود!</h3>
            <p>
            خوشبختی چیست؟ ... این یک سوال است... اما هزاران پاسخ دارد. و معمولا هیچ 2 پاسخی، یکی نیست. هر کسی به نوبه ی خود برای این سوال، پاسخی متفاوت دارد..... به زعم ما و باور بسیاری از مشاهیر و بزرگان، خوشبختی یک حس درونی ست.... چیزی ست که به خود ما ربط دارد و نه داشته های ما..... اگر ما حس خوبی داشته باشیم، و بتوانیم همواره این حس را با خود نگه داریم، در واقع میتوان گفت که طعم خوشبختی را چشیده ایم... اگر شما نیز دارای حس درونی خوبی هستد، پس به شما نیز تبریک میگویم... به جمع خوشبختان خوش آمدید!.... حال که با یکی از تعاریف خوشبختی آشنا شدیم، ببینیم چگونه می توان به حس خوب رسید و اصلا حس خوب از کجا می آید؟؟؟؟ ........ اعتماد بنفس و عزت نفس به شدت در بوجود آوردن حس خوب دخیل اند. اعتماد به نفس یعنی قبول داشتن خود، و عزت نفس یعنی بزرگی نفس و دوست داشتن خود!... کسی خودش را قبول داشته باشد، به توانایی های خود اعتماد داشته باشد و از طرفی خودش را شدیدا دوست بدارد، بدون شک دارای حس بسیار خوب درونی ست.... ظاهر شما (Face) تنها نماد بیرونی احساسات درونی شماست... در اغلب موارد از روی صورتت شما میتوان متوجه غم، ناراحتی، خوشحالی و عواطف درونی شما شد... ظاهر شاد و زیبای شما نیز میتواند به شادی درونی تان کمک کند. هر چه شادتر و زیباتر جلوه دهید، درون تان نیز خودش را با بیرون و ظاهر شما وفق میدهد. در واقع این 2 (درون، بیرون)، ارتباطی کاملا معنادار و ناگسسته با هم دارند. مثلی وجود دارد که میگوید اگر قدرتمند نیستید حداقل تظاهر کنید به قدرتمند بودن! بنابراین ظاهر زیبای شما میتواند به افزایش حس اعتماد بنفس و عزت نفس تان کمک شایانی کند. این مهم را هرگز نادیده نگیرید..... وب سایت جامع بیوتی شوتمام آنچه را که شما برای زیباتر شدن بدان نیازمندید در قالب متن، عکس، فیلم و... در اختیار شما قرار میدهد. در مجله ی ماتیکیا، میتوانید با آخرین دستاوردهای صنعت زیبایی آشنا شوید. این مجله با جدیدترین و به روزترین مطالب، راز زیبایی را با شما در میان میگذارد. یکی دیگر از خدمات سایت بیوتی شومعرفی برترین ارائه دهندگان خدمات زیبایی میباشد... با ما همراه باشید.
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
