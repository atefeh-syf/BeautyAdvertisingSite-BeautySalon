<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- main css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css)">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beuty Salon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 ,shrink-to-fit=no">
   
    <!-- Fav icon-->
    <link rel="icon" href="{{ asset('pic/favicon.ico') }}">
    <script src="{{ asset('js/main.js') }}"></script> 
    
</head>
<body>
    <div id="app">
        <!--***search area***-->
        <div class="dorne-search-form d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search-close-btn" id="closeBtn">
                            <i class="pe-7s-close-circle" aria-hidden="true"></i>
                        </div>
                        <form action="#" method="get">
                            <input type="search" name="caviarSearch" id="search" placeholder="کلمه یا متن مورد نظر خود را جستجو کنید">
                            <input type="submit" class="d-none" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--***search area***-->
        <!--***header area***-->
        <div class="top-header">
            <div class="row">
                <div class=" col-sm-4">
                    <a href="blog.html">مجله آرایشی </a> |
                    <a href="contact.html">تماس با ما </a> |
                    <a href="aboutus.html">درباره ما</a>
                </div>
                <div class="col-sm-4"></div>
                <div class=" col-sm-4 ">
                    <a href="#">info@beutysalon.ir </a> |
                    <a href="#">09124841548</a>
                </div>
            </div>
        </div>
        <header class="header_area" id="header">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <nav class="h-100 navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html"><img src="{{ asset('pic/logo.png') }}" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav"
                                aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                            <!-- Nav -->
                            <div class="collapse navbar-collapse navhoverdots" id="dorneNav">
                                <ul class="navbar-nav mr-auto" id="dorneMenu">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">صفحه اصلی <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> گروه ها <i class="fa fa-angle-down"
                                                aria-hidden="true"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="beautysalons.html"> سالن های زیبایی </a>
                                            <a class="dropdown-item" href="beautyclass.html"> آموزشگاه های زیبایی </a>
                                            <a class="dropdown-item" href="beauty services.html"> خدمات زیبایی </a>
                                            <a class="dropdown-item" href="cosmetic.html"> لوازم آرایشی و بهداشتی </a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> استان ها <i class="fa fa-angle-down"
                                                aria-hidden="true"></i></a>
                                        <div class="dropdown-menu dropdown-multicol2" aria-labelledby="navbarDropdown2">
                                            <div class="dropdown-col">
                                                <a class="dropdown-item" href="#"> آذربایجان شرقی </a>
                                                <a class="dropdown-item" href="#"> آذربایجان غربی </a>
                                                <a class="dropdown-item" href="#"> اردبیل </a>
                                                <a class="dropdown-item" href="#"> اصفهان </a>
                                                <a class="dropdown-item" href="#"> البرز </a>
                                                <a class="dropdown-item" href="#"> ایلام </a>
                                                <a class="dropdown-item" href="#"> بوشهر </a>
                                                <a class="dropdown-item" href="#"> تهران </a>
                                                <a class="dropdown-item" href="#"> چهارمحال و بختیاری </a>
                                                <a class="dropdown-item" href="#"> خراسان جنوبی </a>
                                                
                                            </div>
                                            <div class="dropdown-col">
                                                <a class="dropdown-item" href="#"> خراسان رضوی </a>
                                                <a class="dropdown-item" href="#"> خراسان شمالی </a>
                                                <a class="dropdown-item" href="#"> خوزستان </a>
                                                <a class="dropdown-item" href="#"> زنجان </a>
                                                <a class="dropdown-item" href="#"> سمنان </a>
                                                <a class="dropdown-item" href="#"> سیستان و بلوچستان </a>
                                                <a class="dropdown-item" href="#"> فارس </a>
                                                <a class="dropdown-item" href="#"> قزوین </a>
                                                <a class="dropdown-item" href="#"> قم </a>
                                                <a class="dropdown-item" href="#"> کردستان </a>
                                                
                                                
                                                
                                            </div>
                                            <div class="dropdown-col ">
                                                <a class="dropdown-item" href="#"> کرمان </a>
                                                <a class="dropdown-item" href="#"> کهگیلویه و بویراحمد </a>
                                                <a class="dropdown-item" href="#"> گلستان </a>
                                                <a class="dropdown-item" href="#"> گیلان </a>
                                                <a class="dropdown-item" href="#"> لرستان </a>
                                                <a class="dropdown-item" href="#"> مازندران </a>
                                                <a class="dropdown-item" href="#"> مرکزی </a>
                                                <a class="dropdown-item" href="#"> هرمزگان </a>
                                                <a class="dropdown-item" href="#"> همدان </a>
                                                <a class="dropdown-item" href="#"> یزد </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> آگهی ویژه </a>
                                    </li>
                                </ul>
                                <!-- Search btn -->
                                <div class="dorne-search-btn">
                                    <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> جستجو</a>
                                </div>
                                <!-- Signin btn -->
                                <div class="dorne-signin-btn">
                                    <a href="#" data-toggle="modal" data-target="#modalRegisterForm">ورود/ثبت نام</a>
                                </div>
                                
                                <!-- Add listings btn -->
                                <div class="dorne-add-listings-btn">
                                    <a href="submitAdd.html" class="btn dorne-btn /a/create">+ ثبت آگهی رایگان</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--***header aria***-->
        <main class="py-4">
            @yield('content')
        </main>
        <!-- ****** Footer Area Start ****** -->
        <footer class="dorne-footer-area">
            <div class="container-fluid section-padding-50-50">
                <div class="row ">
                    <div class="col-sm-3 align-items-right justify-content-between ">
                        <div class="section-heading dark text-center">
                            <h5> درباره ما </h5>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-3 align-items-right justify-content-between">
                        <div class="section-heading dark text-center">
                            <h5> تماس با ما </h5>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-3 align-items-right justify-content-between">
                        <div class="section-heading dark text-center">
                            <h5> آخرین آگهی ها </h5>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-sm-3 align-items-right justify-content-between">
                        <div class="section-heading dark text-center">
                            <h5> آخرین مطالب </h5>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
                <div class="container-fluid border-top">
                    <div class="row">
                        <div class="col-12 d-md-flex align-items-center justify-content-between">
                            <div class="footer-text">
                                <p>
                                    طراحی شده با  <i class="fa fa-heart-o" aria-hidden="true"></i> توسط <a href=#
                                        target="_blank"> تیم ما</a>
                                </p>
                            </div>
                            <div class="footer-social-btns">
                                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                                <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube" aria-haspopup="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
        <!-- jQuery-2.2.4 js -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.0.0.min.js') }}"></script>
        <!-- Popper js -->
        <script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap-4 js -->
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <!-- All Plugins js -->
        <script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/active.js') }}"></script>
    </div>
</body>
</html>
