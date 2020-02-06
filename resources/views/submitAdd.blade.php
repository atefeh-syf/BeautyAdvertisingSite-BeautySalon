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
            <form action="/a" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-4">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="نام و نام خانوادگی">
                               @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-4">
                         <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="شماره تماس">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12 contact-form-title">
                        <h6> مشخصات آگهی </h6>
                    </div>
                    <div class="col-12 col-md-4">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="عنوان آگهی">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-4">
                        <select class="form-control" id="cat" class="cat" name="cat">
                            <option>گروه ها</option>
                            <option value=" سالن های زیبایی " selected>  سالن های زیبایی  </option>
                            <option value=" آموزشگاه های زیبایی ">  آموزشگاه های زیبایی  </option>
                            <option value=" خدمات زیبایی ">  خدمات زیبایی  </option>
                            <option value=" لوازم آرایشی و بهداشتی ">  لوازم آرایشی و بهداشتی  </option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select class="form-control" id="ostan" class="ostan" name="ostan">
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
                    
                        <script>
                            
                            /* function getValue(tag){
                                var selectTag= $(tag);
                                var v=selectTag.find("option:selected").val;
                                alert(v);
                            } */

                            /* $('#ostan option').click(function () {
                                //var txt = $(this).text();
                                alert(1);
                            }); */

                            /* function selectList(tag) {
                                option_tag = $(tag);
                                var txt = option_tag.text();

                                $('#ostan').change(function(){ 
                                    //var value = $(this).val();
                                    $(this).val()=txt;

                                });
                            }
/*  */
                            /* $(document).ready(function(){
                                $("select#ostan").change(function(){
                                var selectedCountry = $(this).children("option:selected").val();
                                    alert("You have selected the city");
                                });
                            }); */ 

                            /* $(document).ready(function(){
                                $("select#ostan").change(function(){
                                    var selectedCountry = $(this).children("option:selected").val();
                                    alert("You have selected the country - " + selectedCountry);
                                });
                            }); */
                        </script>
                    </div>
                    <div class="col-12 col-md-4">
                            <div class="input-group mb-3">
                                <div class="custom-file ">
                                    <input type="file" class="custom-file-input image" id="inputGroupFile02 image" name="image">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">آپلود گالری تصاویر</label>
                                </div>
                            </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <input id="telegram" type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" value="{{ old('telegram') }}" required autocomplete="telegram" autofocus placeholder="کانال تلگرام">
                                @error('telegram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" required autocomplete="instagram" autofocus placeholder="صفحه اینستاگرام">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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