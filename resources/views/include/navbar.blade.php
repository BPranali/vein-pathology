    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo"><a href="/">
                                    <img src="{{ asset('/user/images/VEIN_LOGO.png') }}" alt="">
                                </a></div>
                           
                        </div>

                        <style>
                            .add {
                                display: none;
                            }

                            @media(max-width:600px) {
                                .add {
                                    display: inline-flex;
                                    padding: 4px 6px 4px 4px;
                                    /* margin-left: 74px;
                                    margin-top: 7px; */
                                    font-size: 18px;
                                    border: none;
                                    /* background-color: white; */
                                }


                            }
                        </style>

                        <div class="col-sm-3 col-md-3">

                            {{-- <form action="{{route('search')}}" class="search-wrap" method="get">
                            <div class="form-group">
                                <input type="search" name="search" value="{{ Request::get('search')}}" class="form-control search" placeholder="Search" id="inputsearch"  >
                                <button class="btn btn-primary submit-search text-center" type="submit"><i
                                        class="icon-search"></i></button>
                            </div>
                        </form> --}}
                            <div class="d-flex">
                                <div>
                                    <form action="{{ route('search') }}" class="search-wrap" method="get">
                                        <div class="row">
                                            <div class="search form-group">
                                                <input type="text" onkeyup="this.value = this.value.toUpperCase();"
                                                    name="query" value="{{ Request::get('search') }}"
                                                    class="form-control search" placeholder="Search" id="inputsearch"
                                                    value="{{ request('search') }}"><span></span>
                                                {{-- <button class="btn btn-primary submit-search text-center"
                                                    type="submit"><i class="icon-search"></i></button> --}}


                                            </div>


                                        </div>


                                        {{-- <ul class="list-group mt-3">
                                        @forelse(＄users as ＄user)
                                            <li class="list-group-item">{{ ＄user->name }}</li>
                                        @empty
                                            <li class="list-group-item list-group-item-danger">User Not Found.</li>
                                        @endforelse
                                    </ul> --}}
                                    </form>
                                </div>
                                <div>
                                    @guest
                                        <li style="list-style: none" class="cart">
                                            <a class="d-flex"  href="{{ route('view_session_cart') }}">
                                            <div class="add" style="margin-right: .4rem">
                                                <i class="fa-sharp fa-solid fa-cart-plus"></i>
                                            {{-- </div>
                                            <div>                                             --}}
                                                    <span class="pro-count blue">
                                                    <?php 
                                                        $data = session()->get('array');
                                                        if ($data != null) { $totalCount = count($data); ?> {{ $totalCount }}
                                                                            <?php } else { ?>{{ 0 }} <?php }
                                                     ?>
                                                </span>
                                            </div>

                                            </a>
                                        </li>
                                    @endguest
                                    {{-- @auth
                                    <li class="cart"><a href="{{ route('view_home_cart') }}"><i
                                                class="icon-shopping-cart"></i> Cart <span class="pro-count blue">



                                                {{ 0 }}

                                            </span>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    <li class="">

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endauth --}}

                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1" >
                            <ul>
                                <li ><a href="/">Home</a></li>
                                {{-- <li class="has-dropdown">
                                <a href="men.html">Men</a>
                                <ul class="dropdown">
                                    <li><a href="product-detail.html">Product Detail</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="order-complete.html">Order Complete</a></li>
                                    <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                </ul>
                            </li> --}}
                                <li><a href="{{ route('veinCentres') }}">Vein Centres</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('facilities') }}">Facilities</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                @guest
                                    <li class="cart"><a href="{{ route('view_session_cart') }}"><i
                                                class="icon-shopping-cart"></i> Cart <span
                                                class="pro-count blue"><?php 
                                    $data = session()->get('array');
                                    if ($data != null) { $totalCount = count($data); ?> {{ $totalCount }}
                                                <?php } else { ?>{{ 0 }} <?php } ?></span></a>



                                    @endguest

                                    @auth
                                    {{-- {{dd($orders)}} --}}
                                    <li class="cart"><a href="{{ route('view_home_cart') }}"><i
                                                class="icon-shopping-cart"></i> Cart <span class="pro-count blue">


                                                    <?php 
                                                    $data = session()->get('array1');
                                                    if ($data != null) { $totalCount = count($data); ?> {{ $totalCount }}
                                                                <?php } else { ?>{{ 0 }} <?php } ?></span></a>
                
                                                {{-- {{ 0 }} --}}

                                            </span>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <a href="{{route('order')}}">order</a>
                                    <li class="">

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endauth
                                @guest
                                    <li class="cart"><a href="{{ route('register') }}">Register </a>
                                    </li>
                                    <li class="cart"><a href="{{ route('login') }}">
                                            Login</a>
                                    @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                @media(max-width:600px) {
                    .phoneF {
                        font-size: .7rem;
                    }
                }
            </style>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a class="phoneF" href="#">unifying healthcare systems</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a class="phoneF" href="#">we build a life together with
                                                    patients</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- <div class="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I
                        wanted myself.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="#" class="featured-img"
                            style="background-image: url(user/images/men.jpg);"></a>
                        <div class="desc">
                            <h2><a href="#">Shop Men's Collection</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="#" class="featured-img"
                            style="background-image: url(user/images/women.jpg);"></a>
                        <div class="desc">
                            <h2><a href="#">Shop Women's Collection</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
