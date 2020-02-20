
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
                    <a href="/contact">تماس با ما </a> |
                    <a href="/aboutus">درباره ما</a>
                </div>
                <div class="col-sm-4"></div>
                <div class=" col-sm-4 ">
                    <a href="#">info@beatysalon.com</a> |
                    <a href="#">09124841548</a>
                </div>
            </div>
        </div>
        <header class="header_area" id="header">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <nav class="h-100 navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/"><img src="{{ asset('pic/logo.png') }}" alt=""></a>
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
                                            <a class="dropdown-item" href="cat/beautysalons"> سالن های زیبایی </a>
                                            <a class="dropdown-item" href="cat/beautyclass"> آموزشگاه های زیبایی </a>
                                            <a class="dropdown-item" href="cat/beauty_services"> خدمات زیبایی </a>
                                            <a class="dropdown-item" href="cat/cosmetic"> لوازم آرایشی و بهداشتی </a>
                                        </div>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
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
                                    </li>-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="/blog"> مجله آرایشی </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/a/create/special"> آگهی ویژه </a>
                                    </li>
                                </ul>
                                <!-- Search btn -->
                                <!--<div class="dorne-search-btn">
                                    <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> جستجو</a>
                                </div> -->
                                <!-- Signin btn -->
                                <!-- <div class="dorne-signin-btn">
                                    <a href="#" data-toggle="modal" data-target="#modalRegisterForm">ورود/ثبت نام</a>
                                </div> -->
                                
                                <!-- Add listings btn -->
                                <div class="dorne-add-listings-btn">
                                    <a href="/a/create" class="btn dorne-btn ">+ ثبت آگهی رایگان</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--***header aria***-->