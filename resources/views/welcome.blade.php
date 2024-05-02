@include('include.header')
 

<aside id="colorlib-hero">
    <div class="flexslider"
        style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;">
        <ul class="slides">
            <li class="banner-media">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    {{-- <h1 class="head-1">Men's</h1>
                                    <h2 class="head-2">Shoes</h2>
                                    <h2 class="head-3">Collection</h2>
                                    <p class="category"><span>New trending shoes</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p> --}}
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </li>
            <li class="banner-media2"
                style="background-image: url(images/package/BANNER2.png); background-size:content;">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    {{-- <h1 class="head-1">Huge</h1>
                                    <h2 class="head-2">Sale</h2>
                                    <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                                    <p class="category"><span>Big sale sandals</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner-media3" style="background-image: url(user/images/slider/3.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    {{-- <h1 class="head-1">New</h1>
                                    <h2 class="head-2">Arrival</h2>
                                    <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off
                                    </h2>
                                    <p class="category"><span>New stylish shoes for men</span></p>
                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
<style>
    .banner-media{
        background-image: url(images/package/BANNER1.png); background-size:content;
    }

    @media(max-width:600px){
        .phoneMT{
            margin-top: 10rem !important;
        }
    }
   
</style>

<div class="colorlib-product phoneMT" style="background-color: rgb(242, 244, 244); " >
    <style>
        .pI{
            width: 100%;
            height: 20rem;
            border-radius: 1rem !important;
            background-color:#fff 
        }

        .apH1{
            font-size: 2.5rem;
        }

        .apP{
            padding: 1rem 6rem;
        }
        @media(max-width:765px){
            .apH1{
            font-size: 1.8rem;
        }
        .apP{
            padding: 1rem 1rem;
        }
        .pI{
            width: 100%;
            height: 14rem
        }
        }
    </style>
    {{-- <div class="container" style="background-image: url('/user/images/11.png')"> --}}
    <div class="container-fluid apP" style="">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center mt-5 mb-3">
                <h1 class="apH1" style="font-family: sans-serif; font-weight:bold;">All Packages</h1>
            </div>
        </div>
        <div class="row row-pb-md" style="font-family: sans-serif; font-weight:100px;>
            @foreach ($packages as $item)
                <a href="{{ route('user.viewPremium', $item->id) }}" class="prod-img">
                    <div class="col-lg-4 mb-4 text-center">
                        <div class="product-entry border"
                            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px; border-radius: 1rem;">
                            <img class="pI" src="/images/package/{{ $item->image }}"
                                style="border-radius: 4px;" class="img-fluid"
                                alt="">

                            <div class="desc"  style=" background-color:aliceblue">
                                <div class="package" >
                                    <h2><a href="#">{{ $item->packages }}</a></h2>
                                </div>
                                <div>
                                    <h2><a href="#">Includes {{ $item->include_test }} Tests</a></h2>
                                </div>
                                <div>
                                    <span class="price"><i class="fa-solid fa-indian-rupee-sign"></i> {{ $item->charges }}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-6">

                                        <form action="{{ route('purchase_pack') }}" method="post">
                                            @csrf
                                            
                                            <input type="hidden" name="packages" value="{{ $item->packages }}">
                                            <input type="hidden" name="include_test" value="{{ $item->include_test }}">

                                            <input type="hidden" name="charges" value="{{ $item->charges }}">

                                            <input type="hidden" name="image" value="{{ $item->image }}">


                                            <button type="submit" style="width: 100%" class="btn btn-info">Cart</button>
                                        </form>
                                        {{-- <a href="{{ route('user.viewPremium', $item->id) }}" class="btn btn-primary">Cart</a> --}}
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <a href="{{ route('user.detail', $item->id) }}"  style="width: 100%" class="btn btn-info">
                                            Details</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        {{-- <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div> --}}
    </div>
</div>
{{-- 
<div class="colorlib-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center">
                <img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div> --}}
</div>
@include('include.footer')