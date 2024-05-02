@include('include.header')

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<main class="main" style="background-color: #fff">

    {{-- 
<div class="container">
    <h2>hii contact us</h2>
</div> --}}
@guest
    
    <div class="form-area ">
        <div class="container ">
            <div class="row single-form g-0">
                {{-- <div class="col-sm-12 col-lg-6">
                <div class="left">
                    <h2><span>Basic</span> <br>Contact Information</h2>
                </div>
            </div> --}}
                <div class="col-sm-12 col-lg-12">
                    <div class="right">
                        <div>
                            <h3 style="background-color: #88c8bc;border-radius:4px;  text-align:center;  color:white;">
                                Basic Details</h3>
                        </div>


                        <form action="{{ route('cart_checkout') }}" method="POST">
                            @csrf
                            <div class="mb-3" >
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    aria-describedby="emailHelp" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label"> Address</label>
                                <textarea type="text" class="form-control" id="address" name="address" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="pincode" class="form-label">Pin Code</label>
                                <input type="number" class="form-control" id="pincode" name="pincode"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <button type="submit" class="btn btn-info"
                                style="text-align: center; border-radius:4px;margin-bottom:15px;"> <a
                                    style="color:white;">Submit</a> </button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    @endguest
@auth
<div class="form-area ">
    <div class="container ">
        <div class="row single-form g-0">
            {{-- <div class="col-sm-12 col-lg-6">
            <div class="left">
                <h2><span>Basic</span> <br>Contact Information</h2>
            </div>
        </div> --}}
            <div class="col-sm-12 col-lg-12">
                <div class="right">
                    <div>
                        <h3 style="background-color: #88c8bc;border-radius:4px;  text-align:center;  color:white;">
                            Basic Details</h3>
                    </div>


                    <form action="{{ route('cart_checkout') }}" method="POST">
                        @csrf
                        <div class="mb-3" >
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" value="{{Auth::user()->name}}" class="form-control" id="name" name="name"
                                aria-describedby="emailHelp" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" value="{{Auth::user()->phone}}" id="phone" name="phone"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="text" class="form-control" value="{{Auth::user()->email}}" id="email" name="email"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"> Address</label>
                            <textarea type="text" class="form-control" value="" id="address" name="address" required>{{Auth::user()->address}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pincode" class="form-label">Pin Code</label>
                            <input type="number" class="form-control" value="{{Auth::user()->pincode}}" id="pincode" name="pincode"
                                aria-describedby="emailHelp" required>
                        </div>
                        <button type="submit" class="btn btn-info"
                            style="text-align: center; border-radius:4px;margin-bottom:15px;"> <a
                                style="color:white;">Submit</a> </button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endauth

    <style>

        .input{
            border-radius: 5px;
        }
        body {
            background: #eef7f6;
        }

        .main {
            margin-bottom: 15rem;
        }

        .form-area {
            padding-top: 7%;
        }

        .row.single-form {
            /* box-shadow: 0 2px 20px -5px rgba(0, 0, 0, 0.5); */
            /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; */
        }

        .single-form {
            margin-top: -75px;
            margin-bottom: -60px
        }

        @media(max-width:600px) {
            .single-form {
                margin-top: 2px;
            }
        }

        .left {
            background: #4d802d;
            padding: 200px 98px;
        }

        .left h2 {
            font-family: poppins;
            color: #fff;
            font-weight: 700;
            font-size: 48px;
        }

        .left h2 span {
            font-weight: 100;
        }

        .single-form {
            background: #eef7f6;
        }

        .right {
            padding: 38px 32px;
            position: relative;
        }

        .right i {
            position: absolute;
            font-size: 80px;
            left: -27px;
            top: 40%;
            color: #fff;
        }

        .form-control {
            border: 2px solid #000;
        }

        .right button {
            border: none;
            border-radius: 0;
            background: #2ba3a9;
            width: 180px;
            color: #fff;
            padding: 15px 0;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            text-align: center;
        }

        .right button:hover {
            background-color: #225b70;
        }


        /*responsive*/

        @media (min-width:768px) and (max-width:991px) {
            .right i {
                top: -52px;
                transform: rotate(90deg);
                left: 50%;
            }
        }

        @media (max-width:767px) {
            .left {
                padding: 90px 15px;
                text-align: center;
            }

            .left h2 {
                font-size: 25px;
            }

            .right {
                padding: 25px;
            }

            .right i {
                top: -52px;
                transform: rotate(90deg);
                left: 46%;
            }

            .right button {
                width: 150px;
                padding: 12px 0;
            }

        }
    </style>

</main>
@include('include.footer')
