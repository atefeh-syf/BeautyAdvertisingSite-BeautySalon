@extends('layouts.app')
@section('content')
<!-- ***** Addform Area Start ***** -->
<div class="dorne-contact-area d-md-flex" id="contact">
    <!-- Contact Form Area -->
    <div class="contact-form-area ">
        <div class="contact-text">
            <h4> ثبت رایگان آگهی </h4>
            <p>در این بخش شما میتوانید آگهی آرایشگاه ،آموزشگاه ،فروشگاه لوازم آرایشی و انواع خدمات آرایشی و بهداشتی
                خود را  به ضورت کاملا رایگان ثبت کنید.
                پس  تمامی اطلاعات درخواست شده را به درستی ثبت کنید تا مخاطبان عزیز بتوانند به شما دسترسی
                سریع و راحت داشته باشند.
                با تشکر مدیریت وبسایت 
                </p>
            <br>
        </div>
        <div class="contact-form">
            <div class="contact-form-title">
                <h6> مشخصات ثبت کننده آگهی </h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی">
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" name="phone" class="form-control" placeholder="شماره تماس">
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="email" name="email" class="form-control" placeholder="ایمیل">
                    </div>
                    <div class="col-12 contact-form-title">
                        <h6> مشخصات آگهی </h6>
                    </div>
                    <div class="col-12 col-md-6">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">آپلود گالری تصاویر</label>
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <select class="form-control" name="ostan">
                            <option selected>استان</option>
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
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="url" name="telegram" class="form-control" placeholder="کانال تلگرام">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="url" name="instagram" class="form-control" placeholder="صفحه اینستاگرام">
                    </div>
                    <div class="col-12">
                        <textarea name="address" class="form-control" id="Message" cols="30" rows="10" placeholder="آدرس"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn dorne-btn"> ارسال </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- ***** Addform Area End ***** -->
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