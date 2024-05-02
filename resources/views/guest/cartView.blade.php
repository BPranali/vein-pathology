@include('include.header')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"   >

<div class="colorlib-product">
    <div class="container">
        <div class="row">

            <div class="colorlib-product">
                <div class="container" style="width: 100%">
                    <div class="row row-pb-lg product-detail-wrap">
                        <h5>
                            <div class="header-action-right">
                                <div class="header-action-2">

                                 
                                    <div>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <?php $totalprice = 0; ?>

                                            <div class="table-responsive" >
                                                <table class="table py-5">
                                                    <thead style="text-align: center;">
                                                        <tr style="font-size: 18px;">
                                                            <th scope="col">Sr. No.</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Packages</th>
                                                            {{-- <th scope="col">Include_test</th> --}}
                                                            <th scope="col">Charges</th>
                                                            {{-- @auth
                                                                <th scope="col">Action</th>

                                                            @endauth --}}
                                                        </tr>
                                                    </thead>
                                                    @guest
                                                        <tbody style="text-align: center">
                                                            <?php $n = 1; ?>
                                                            @if (!empty(session('array')))
                                                                @foreach (session('array') as $value)
                                                                    <tr style=" font-size: 20px; text-align:center;">
                                                                        <th>{{ $n }}</th>
                                                                        <td>
                                                                            <img style="height:55px; width:50px;"
                                                                                src="/image1/test/{{ $value['image'] }}"
                                                                                alt="cart-item">
                                                                        </td>
                                                                        <td>{{ $value['packages'] }}</td>
                                                                        {{-- <td>
                                                                            {{ $value['include_test'] }}
                                                                        </td> --}}
                                                                        <td>
                                                                            {{ $value['charges'] }}
                                                                        </td>
                                                                  </tr>
                                                                    <?php $totalprice += $value['charges']; ?>
                                                                    <?php $n++; ?>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    @endguest

                                                    @auth

                                                        <?php $count = count($addCartData);
                                                        
                                                        // dd($count);
                                                        
                                                        // Session::put('cart_count', $count);
                                                        
                                                        // $totalcount = Session::get('cart_count');
                                                        // dd($totalcount);
                                                        
                                                        ?>
                                                    <tbody style="text-align: center">
                                                        <?php $n = 1; ?>
                                                        @if (!empty(session('array1')))
                                                            @foreach (session('array1') as $value)
                                                                <tr style=" font-size: 20px; text-align:center;">
                                                                    <th>{{ $n }}</th>
                                                                    <td>
                                                                        <img style="height:55px; width:50px;"
                                                                            src="/image1/test/{{ $value['image'] }}"
                                                                            alt="cart-item">
                                                                    </td>
                                                                    <td>{{ $value['packages'] }}</td>
                                                                    {{-- <td>
                                                                        {{ $value['include_test'] }}
                                                                    </td> --}}
                                                                    <td>
                                                                        {{ $value['charges'] }}
                                                                    </td>
                                                              </tr>
                                                                <?php $totalprice += $value['charges']; ?>
                                                                <?php $n++; ?>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                    @endauth
                                                </table>
                                            </div>



                                            <div class="shopping-cart-footer" style="float: right;">
                                                <div class="shopping-cart-total">
                                                    <h5>Total : <span>{{ $totalprice }}</span></h5>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    {{-- <a href="" class="outline">View
                                                cart</a> --}}
                                                    @guest
                                                        <a href="{{ route('cart.guestDetail') }}"
                                                            class="btn-lg btn-info">Checkout</a><br>
                                                    @endguest
                                                    @auth
                                                        {{-- <form method="" action="">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Cash On Delivery</button>
                                                </form>  --}}

                                                        <button class="btn-lg btn-info"> <a 
                                                               href="{{ route('cart.guestDetail') }}" style="color: white;">
                                                                Checkout</a></button>
                                                        {{-- 
                                                <a href="#"
                                                class="btn btn-primary">Cash On Delivery</a><br> --}}



                                                    @endauth

                                                    {{-- <a href="{{ route('session.cart.remove') }}"
                                                        class="btn btn-primary">Clear cart</a> --}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('include.footer')
