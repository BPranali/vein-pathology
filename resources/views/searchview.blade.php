@include('include.header')



<div class="container ">
    {{-- <div>
        <h5>Test Details</h5>
    </div> --}}

   


<div class="row" style="margin-bottom: -10px;">
    <div class="col-md-12" style="background-color:#88c8bc;border-radius:4px; text-align:center; color:white;margin-top: 46px; ">
        <p  style="font-size:20px; font-weight:bolder; margin-top:15px; color:white;">{{ $tests->tests }}</p>
    </div>

</div>
<br><br>
<div class="row">
    <div class="col-md-6">
        <img src="/image1/test/{{ $tests->image }}" style="width: 80%; border-radius:4px; margin-left: 48px;">
    </div>

    <div class="col-md-6">
      <div class="container d-flex" style="padding: 5px 5px 5px 62px">
        <div>
            <h3 style="color: #0177ac; font-size:25px;">Discount:  <i class="fa-solid fa-indian-rupee-sign"></i>{{ $tests->discount }} </h3>
           </div>
           <div>
            <h3 style="color: #0177ac;padding:0px 20px 12px 100px; font-size:25px; ">Price: <i class="fa-solid fa-indian-rupee-sign"></i>{{ $tests->charges }} </h3>
    
           </div>
      </div>
      <hr>

        <p style="font-size: 16px; color:black; margin-left: -55px"> {{ $tests->description }}</p>
   
        
</div>
</div> 
<br><br><br>
{{-- <div >
    <div style="">
     
    </div> &nbsp;&nbsp;
    <div class="">
    </div>

</div> --}}

</div>


@include('include.footer')
