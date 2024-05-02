@include('include.header')


<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/package/BANNER1.png); background-size:content;">
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
            <li style="background-image: url(images/package/BANNER2.png); background-size:content;">
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
            <li style="background-image: url(user/images/slider/3.jpg);">
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

<div class="colorlib-product" style="background-color: rgb(242, 244, 244);">
    <div class="container" style="background-color: rgb(242, 244, 244);">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                {{-- <h2>All Packages</h2> --}}
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach ($packages as $item)
                <a href="{{ route('user.viewPremium', $item->id) }}" class="prod-img">
                    <div class="col-lg-3 mb-4 text-center">
                        <div class="product-entry border"
                            style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;border-radius:8px;">

                            <img src="/images/package/{{ $item->image }}"
                                style="border-radius: 1rem; width:250px; height:150px; " class="img-fluid image"
                                alt="">

                            <div class="desc">
                                <div class="pack" style="height:80px;">
                                    <h5 style=" font-size:17px;"><a href="#">{{ $item->packages }}</a></h5>
                                </div>

                                <div
                                    style="margin-top:30 px; font-size: 12px;
                                font-weight: 500;">
                                    <a class="price mb-3" href="#">Includes {{ $item->include_test }} Tests</a>
                                </div>
                                <div>
                                    <span class="price mb-3"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        {{ $item->charges }}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {{-- {{dd($item)}} --}}

                                        <form action="{{ route('store_cart', $item->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                            <input type="hidden" name="packages" value="{{ $item->packages }}">
                                            <input type="hidden" name="include_test" value="{{ $item->include_test }}">

                                            <input type="hidden" name="charges" value="{{ $item->charges }}">

                                            <input type="hidden" name="image" value="{{ $item->image }}">


                                            <button type="submit" class="btn btn-info"> Cart</button>
                                        </form>

                                        {{-- <a href="{{ route('user.viewPremium', $item->id) }}" class="btn btn-primary">Cart</a> --}}

                                    </div>
                                    <div class="col-md-5">
                                        <a href="{{ route('user.detail', $item->id) }}" class="btn btn-info">
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-info btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>




{{-- <div class="colorlib-partner">
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
    </div>
</div> --}}
@include('include.footer')
