@include('include.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vein</title>
    <style>
        body {
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        .brand-section {
            background-color: #88c8bc;
            padding: 8px 20px;
        }

        .logo {
            width: 50%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 auto;
        }

        .text-white {
            color: #fff;
        }

        .company-details {
            float: right;
            text-align: right;
        }

        .body-section {
            padding: 16px;
            border: 1px solid gray;
        }

        .heading {
            font-size: 20px;
            margin-bottom: 08px;
        }

        .sub-heading {
            color: #262626;
            margin-bottom: 05px;
        }

        table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }

        table thead tr {
            border: 1px solid #111;
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
            text-align: center;
        }

        table th,
        table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }

        .table-bordered {
            box-shadow: 0px 0px 5px 0.5px gray;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .text-right {
            text-align: end;
        }

        .w-20 {
            width: 20%;
        }

        .float-right {
            float: right;
        }
        @media(max-width:600px){
.personal{
    margin: -27px;
    margin-top: 1px
}
        };
    </style>
</head>

<body>


    <form action="{{ route('invoice') }}" method="GET">

        <div class="container " style="margin-top:28px; 
        padding: 6px 2px 4px 0px;">
            <div class="brand-section">
                <div class="row ">
                    <div class="col-6">
                        <h3 class="text-white">Vein pythology</h3>
                    </div>
                    {{-- <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div>
                </div> --}}
                </div>
            </div>

            <div class="body-section">
                <div class="row">
                    {{-- <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>
                    <p class="sub-heading">Tracking No. fabcart2025 </p>
                    <p class="sub-heading">Order Date: 20-20-2021 </p>
                    <p class="sub-heading">Email Address: customer@gfmail.com </p>
                </div> --}}

                    <div class="row">
                        <div class="col-md-12 ">
                            <h4>Personal Details:</h4>

                        </div>
                    </div>

                    {{-- {{dd($datas,$user)}} --}}
                    {{-- {{dd($user)}} --}}
                    @php
                        $order_unique = $user->unique('name');
                    @endphp

                    @foreach ($order_unique as $item)
                        <div class="row">
                            <div class="col-md-12 py-2 px-5 personal">
                                <h6 class="sub-heading"><span style="font:bold; color:#111;">Order id :</span>
                                    {{ $item->id }}
                                </h6>
                                <h6 class="sub-heading"><span style="font:bold; color:#111;">Full Name :</span>
                                    {{ $item->name }}
                                </h6>

                                <h6 class="sub-heading "><span style="font:bold; color:#111;">Email :
                                    </span>{{ $item->email }}
                                </h6>
                                <h6 class="sub-heading"><span style="font:bold; color:#111;">Phone Number : </span>
                                    {{ $item->phone }}
                                </h6>
                                <h6 class="sub-heading"><span style="font:bold; color:#111;">Address :</span>
                                    {{ $item->address }}
                                </h6>
                                <h6 class="sub-heading"><span style="font:bold; color:#111;">Pincode :</span>
                                    {{ $item->pincode }}
                                </h6>

                            </div>
                        </div>
                        <div>
                    @endforeach



                </div>
            </div>
        </div>
        <style>
            @media(max-width:600px) {
                .th-hed {
                    font-size: 13px;
                }

                .td-hed {
                    font-size: 11px;
                    width: 13px;
                    font-weight: 500;
                }
            }
        </style>
        <div class="body-section">
            {{-- <h3 class="heading">Ordered Items</h3>
                <br> --}}
            <div class="table-responsive">
                <table class="table-bordered">
                    <h3 class="heading">Ordered Items</h3>
                    <br>
                    <div>
                        <table class="table-bordered">
                            <thead>

                                <tr class="text-center" style="color: black;">
                                    <th class="w-30 th-hed">id</th>
                                    <th class="w-30  th-hed">Image</th>
                                    <th class="w-30  th-hed">package Name</th>
                                    <th class="w-30   th-hed">include test</th>

                                    <th class="w-30  th-hed">Price</th>
                                </tr>

                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                    
                                @endphp

                                @foreach ($user as $item)
                                    <tr>
                                        <td class="w-30 td-hed">{{ $item->id }}</td>
                                        </td>
                                        <td class="w-30 td-hed">
                                            <img src="/images/package/{{ $item->image }}"
                                                style="border-radius: 1rem; width:60px; height:80px; "
                                                class="img-fluid image" alt="">
                                        </td>
                                        <td class="w-30 td-hed">{{ $item->packages }}</td>

                                        <td class="w-30 td-hed">{{ $item->include_test }}</td>
                                        <td class="w-30 td-hed">{{ $item->charges }}</td>


                                    </tr>

                                    @php
                                        $total += $item->charges;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td>
                                        <h5 class="heading">Total <span class="price"
                                                style="color:rgb(0, 0, 0); "></span>
                                        </h5>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="padding:1rem 2rem;display:flex">
                                        <p> <i class="bi bi-currency-rupee" style="font-size:14px;">
                                            </i></p>
                                        <p> <strong>{{ $total }}</strong></p>
                                        {{-- <h5 class="heading">
                                                <span class="price"
                                                    style="color:black;  font-weight:400px;  font-size:12px;">
                                                    <i class="bi bi-currency-rupee" style="font-size:12px;">
                                                        {{ $total }}
                                                    </i>
    
                                                </span> --}}
                                        {{-- </h5> --}}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </table>

            </div>
            <br>
            {{-- <h3 class="heading">Payment Status: Paid</h3> --}}
            {{-- <h3 class="heading">Payment Mode: Cash on Delivery</h3> --}}
        </div>

        {{-- <div class="body-section">
                <p>&copy; Copyright 2021 - Fabcart. All rights reserved. 
                <a href="https://www.fundaofwebit.com/" class="float-right">www.fundaofwebit.com</a>
                </p>
            </div> --}}
        </div>

        {{-- <button type="submit">Download invoice</button> --}}
    </form>


    <div style="margin-top:50px">
        <button class="btn btn-info-lg"
            style="background-color: rgb(146, 224, 250);  margin-bottom:12px;     margin-right: 20px; margin-top:-42px; float: right;"><a
                href="/">Home</a></button>

    </div>

</body>

</html>


@include('include.footer')
margin-top:25px; margin-left:25px;
