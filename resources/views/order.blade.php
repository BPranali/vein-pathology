@include('include.header')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

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

                                            <div class="table-responsive">
                                                <table class="table py-5">
                                                    <thead style="text-align: center;">
                                                        <tr style="font-size: 18px;">
                                                            <th scope="col">Sr. No.</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Packages</th>
                                                            <th scope="col">Include_test</th>
                                                            <th scope="col">Charges</th>
                                                            {{-- @auth
                                                                <th scope="col">Action</th>

                                                            @endauth --}}
                                                        </tr>
                                                    </thead>
                                                    {{-- @guest --}}
                                                        <tbody style="text-align: center">
                                                            <?php $n = 1; ?>
                                                            {{-- @if (!empty(session('array'))) --}}
                                                            @foreach ($orders as $value)
                                                                <tr style=" font-size: 20px; text-align:center;">
                                                                    <th>{{ $n }}</th>
                                                                    {{-- <td>{{ $value['user_id'] }}</td> --}}
                                                                    <td>
                                                                        <img style="height:55px; width:50px;"
                                                                            src="/images/package/{{ $value['image'] }}"
                                                                            alt="cart-item">
                                                                    </td>
                                                                    <td>{{ $value['packages'] }}</td>
                                                                    <td>
                                                                        {{ $value['include_test'] }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $value['charges'] }}
                                                                    </td>
                                                                </tr>
                                                                {{-- <?php $totalprice += $value['charges']; ?> --}}
                                                                <?php $n++; ?>
                                                            @endforeach
                                                            {{-- @endif --}}
                                                        </tbody>
                                                        {{-- @endguest --}}
                                                    </table>
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
