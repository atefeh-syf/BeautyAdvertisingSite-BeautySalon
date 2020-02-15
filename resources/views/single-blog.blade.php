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
                        
                       {{--  @foreach ($addvertises as $addvertise)
                            <a href="a/{{$addvertise->id}}"><li><img src="/storage/{{$addvertise->image}}" style="width:75px;height:50px;">
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
                            </li></a>
                        @endforeach --}}
                        
                    </ul>
                </div>
            </div>
            <div class="side-content" id="nav-tabContent">
                <div class="add-posts box-hover">
                    <h6> نوشته های تازه </h6>
            
                    <ul>
                       {{--  @foreach ($articles as $article)
                            <li><a href="#">{{$article->title }}</a></li>
                        @endforeach --}}
                        
                       
                    </ul>
                </div>
            </div>
            
        </div>

    </div>
    <!-- Explore Map Area -->
    <div class="row explore-add-area mt-30 mb-30 d-md-flex justify-content-between">
        
        <div class="col-sm-12 col-xs-12 add-section box-hover d-flex justify-content-between">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    
                    <img src="pic/blog.jpg" class="blog-img">
                    
                </div>
                <div class="col-md-12">
                    <div class="information">
                        <h4><i class="fas fa-info-circle"></i> عنوان نوشته </h4>
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
        
    </div>
</section>
<!-- ****** Addvertise Area End ****** -->

@endsection