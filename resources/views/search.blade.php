@include('include.header')

<style>
    .pI{
        width: 100%;
        height: 20rem;
        border-radius: 1rem !important;
        background-color:#fff 
    }

   
    @media(max-width:765px){
      
    .pI{
        width: 100%;
        height: 14rem
    }
    }
</style>

<div class="colorlib-product" style="background-color: #ffffff">
    <div class="container" style="background-image: url('/user/images/11.png')">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>All Packages And Test</h2>
            </div>
        </div>

        <div class="row row-pb-md " 
            style="font-family: sans-serif; font-weight:100px;" >
            @foreach ($searchtest as $item)
            <a href="{{ route('user.viewPremium', $item->id) }}" class="prod-img ">
                <div class="col-lg-6  text-center mt-3">
                    <div class="product-entry border mt-3"
                        style="background-color:#ffffff;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;border-radius:8px;">

                        <img src="/images/package/{{ $item->image }}" 
                        style="border-radius: 1rem;" class="pI"
                            alt="">

                        <div class="desc">
                            <div class="pack" >
                                <h2><a href="#">{{ $item->packages }}</a></h2>
                            </div>

                            <h2><a href="#">Includes {{ $item->include_test }} Tests</a></h2>
                            <span class="price"><i class="fa-solid fa-indian-rupee-sign"></i>{{ $item->charges }}</span>
                            <div class="row">
                                <div class="col-md-6 col-6">

                                    {{-- <form action="{{ route('add_package_by_cart',$item->id) }}" method="post"> --}}
                                        <form action="{{ route('purchase_pack') }}" method="post">

                                        @csrf
                                        {{-- <input type="hidden" name="id" value="{{Auth::user()->id }}"> --}}

                                        <input type="hidden" name="packages" value="{{ $item->packages }}">
                                        <input type="hidden" name="include_test" value="{{ $item->include_test }}">

                                        <input type="hidden" name="charges" value="{{ $item->charges }}">

                                        <input type="hidden" name="image" value="{{ $item->image }}">


                                        <button type="submit" class="btn btn-info" style="width: 100%">Cart</button>
                                    </form> 

                                     {{-- <a href="{{ route('user.viewPremium', $item->id) }}" class="btn btn-info" style="width: 100%">Cart</a>  --}}

                                </div>
                                <div class="col-md-6 col-6">
                                    <a href="{{ route('user.detail', $item->id) }}" class="btn btn-info" style="width: 100%">
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach



        @foreach ($tests as $value)
        <a href="{{ route('user.viewPremium', $value->id) }}" class="prod-img">
            <div class="col-lg-6  text-center mt-3">
                <div class="product-entry border mt-3"
                    style="background-color:#ffffff;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;border-radius:8px;">

                    <img src="/image1/test/{{ $value->image }}"
                    style="border-radius: 1rem;" class="pI"
                        alt="">

                    <div class="desc">
                        {{-- <div class="pack" >
                            <h2><a href="#">{{ $item->packages }}</a></h2>
                        </div> --}}

                        <h2><a href="#">Includes {{ $value->tests }} Tests</a></h2>
                        <span class="price"><i class="fa-solid fa-indian-rupee-sign"></i>{{ $value->charges }}</span>
                        <div class="row">
                            <div class="col-md-6 col-6">

                                {{-- <form action="{{ route('add_package_by_cart',$item->id) }}" method="post"> --}}
                                    <form action="{{ route('purchase_pack') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="packages" value="{{ $value->tests }}">
                                        {{-- <input type="hidden" name="include_test" value="{{ $item->include_test }}"> --}}
                                        <input type="hidden" name="image" value="{{ $value->discription }}">


                                        <input type="hidden" name="charges" value="{{ $value->charges }}">

                                        <input type="hidden" name="image" value="{{ $value->image }}">



                                    <button type="submit" class="btn btn-info" style="width: 100%">Cart</button>
                                </form> 

                                 {{-- <a href="{{ route('user.viewPremium', $item->id) }}" class="btn btn-info" style="width: 100%">Cart</a>  --}}

                            </div>
                            <div class="col-md-6 col-6">
                                <a href="{{route('searchview',$value->id)}}"  style="width: 100%" class="btn btn-info">
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
