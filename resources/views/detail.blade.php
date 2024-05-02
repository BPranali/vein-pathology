@include('include.header')



<div class="containe p-3 mt-5 mb-5">
    @guest
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card"
                    style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images">
                                <div class="text-center p-4"> <img id="main-image" src="/images/package/{{ $package->image }}"
                                        style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                                            border-radius:.8rem
                                        "
                                        width="100%" /> </div>
                                {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> --}}
                            </div>
                        </div>
                        {{-- {{$package->packages }}
                         {{$package->include_test }}
                         {{$package->charges }} --}}
                        <div class="col-md-6">
                            <div class="product p-4">
                                {{-- <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div> --}}

                                <div class="mt-4 ">
                                    <h5 class="detail text-uppercase; "style="font-size:21px;">{{ $package->packages }}</h5>
                                </div>
                                <div> <span class="detail1 text-uppercase  brand"style="font-weight: bold; font-size:10px;">
                                        Include
                                        {{ $package->include_test }} Test</span>
                                </div>
                                <div class=" price d-flex flex-row align-items-center mt-3">
                                    <span class="act-price" style="font-size: 24px; "> <i
                                            class="fa-solid fa-indian-rupee-sign"></i> {{ $package->charges }}</span>
                                    {{-- <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div> --}}
                                </div>
                            </div>

                            <div class=" detail2 row">
                                @foreach ((array) $package->test_name as $value)
                                    <div class="col-md-6">
                                        <li>{{ $value }}</li>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p> --}}
                            {{-- <div class="sizes mt-5">
                                <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                            </div> --}}
                            <form action="{{ route('purchase_pack') }}" method="post">
                                @csrf
                                <input type="hidden" name="packages" value="{{ $package->packages }}">
                                <input type="hidden" name="include_test" value="{{ $package->include_test }}">

                                <input type="hidden" name="charges" value="{{ $package->charges }}">

                                <input type="hidden" name="image" value="{{ $package->image }}">


                                {{-- <button type="submit" class="btn btn-primary">Add To Cart</button> --}}
                                {{-- <div class="cart mt-4 align-items-center"> --}}
                                <button
                                    style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;"
                                    class="detail3 btn btn-danger text-uppercase px-4 mt-3 mb-5">Add to cart</button>
                                {{-- <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> --}}
                                {{-- </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endguest
@auth
<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card"
            style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="images">
                        <div class="text-center p-4"> <img id="main-image" src="/images/package/{{ $package->image }}"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
                                    border-radius:.8rem
                                "
                                width="100%" /> </div>
                        {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> --}}
                    </div>
                </div>
                {{-- {{$package->packages }}
                 {{$package->include_test }}
                 {{$package->charges }} --}}
                <div class="col-md-6">
                    <div class="product p-4">
                        {{-- <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                    </div> --}}

                        <div class="mt-4 ">
                            <h5 class="detail text-uppercase; "style="font-size:21px;">{{ $package->packages }}</h5>
                        </div>
                        <div> <span class="detail1 text-uppercase  brand"style="font-weight: bold; font-size:10px;">
                                Include
                                {{ $package->include_test }} Test</span>
                        </div>
                        <div class=" price d-flex flex-row align-items-center mt-3">
                            <span class="act-price" style="font-size: 24px; "> <i
                                    class="fa-solid fa-indian-rupee-sign"></i> {{ $package->charges }}</span>
                            {{-- <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div> --}}
                        </div>
                    </div>

                    <div class=" detail2 row">
                        @foreach ((array) $package->test_name as $value)
                            <div class="col-md-6">
                                <li>{{ $value }}</li>
                            </div>
                        @endforeach
                    </div>
                    {{-- <p class="about">Shop from a wide range of t-shirt from orianz. Pefect for your everyday use, you could pair it with a stylish pair of jeans or trousers complete the look.</p> --}}
                    {{-- <div class="sizes mt-5">
                        <h6 class="text-uppercase">Size</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                    </div> --}}
                    <form action="{{ route('purchase_pack') }}" method="post">
                        @csrf
                        <input type="hidden" name="packages" value="{{ $package->packages }}">
                        <input type="hidden" name="include_test" value="{{ $package->include_test }}">

                        <input type="hidden" name="charges" value="{{ $package->charges }}">

                        <input type="hidden" name="image" value="{{ $package->image }}">


                        {{-- <button type="submit" class="btn btn-primary">Add To Cart</button> --}}
                        {{-- <div class="cart mt-4 align-items-center"> --}}
                        <button
                            style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;"
                            class="detail3 btn btn-danger text-uppercase px-4 mt-3 mb-5">Add to cart</button>
                        {{-- <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> --}}
                        {{-- </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endauth
@include('include.footer')
