@extends('frontend.layout.app')

@section('title')
EPS | Easy Payment System
@endsection

@section('maincontent')


<!-- // Start Code From Here -->
  <!-- // Main section Start -->
  {{--  <div class="preloader" id="loader">
  </div> --}}

  <section id="pagewid">
    <div class="container" id="topcontent">
      <div class="row">
        <!--main-content-->
        <div class=" main-content col-md-7 col-sm-12 mt-3">
          <a class=" btn-1 btn-lg " href="">
            <span class="text" > Easy solution for all transactions</span>
          </a>
          <h6 class="easy">Easy</h6>
          <h6 class="payment">Payment</h6>
          <h6 class="system">System</h6>
          <p>Easy Payment System (EPS) is an innovative payment solution to make digital transactions effortless. EPS eases the transaction by providing services including Payment Gateway, Bill Payment, Mobile Recharge ...  <a href="{{ route('frontend.aboutus') }}" class="readmore" style="color:#0e694b; font-weight:600">Read More </a>
          </p>

        </div>
        <!--main-content end!-->


        <!--Slider start!-->
        <div class="mobile-slider  col-md-5  mt-2 " data-interval="false">
          <!-- slider -->
          <div class="slider-main" id="slider-main">
            <div class="slides">
              <!-- slide -->
              <ul style="z-index:-1;">
                <li class="active">

                </li>
                <li>

                </li>
                <li>


                </li>
              {{--   <li>


                </li>

                <li>


                </li> --}}
              </ul>
            </div>
          </div>
          <!--mobile slider end!-->
          <div id="phases"></div>
        </div>
      </div>
      <!--row!-->
    </div>



  <div class="container">
    <div class="col-md-6 slider-popup-top">
      <!-- slide -->
      <ul>
        <li class="paymentgateway active ">
            <img src="{{ URL::to('') }}/frontend/img/slider/payment.jpg" alt="">
          </li>

        <li class="billpay">
          <img src="{{ URL::to('') }}/frontend/img/slider/billpay.jpg" alt="">
        </li>


        <li class="mobile">
            <img src="{{ URL::to('') }}/frontend/img/slider/mobilet.jpg" alt="">
          </li>

       {{--  <li class="corporate">
          <img src="{{ URL::to('') }}/frontend/img/slider/Corporate_T.jpg" alt="">
        </li>

        <li class="fundtransfer">
            <img src="{{ URL::to('') }}/frontend/img/slider/fund-transfer.jpg" alt="">
          </li> --}}

      </ul>
      <!-- controll -->
    </div>
  </div>



  <div class="container">
    <div class="col-md-6 slider-popup-bottom">
      <ul>

        <li class="paymentgatewayb active">
            <img src="{{ URL::to('') }}/frontend/img/slider/paymentb.jpg" alt="">
          </li>
        <li class="billpayb">
          <img src="{{ URL::to('') }}/frontend/img/slider/billpayb.jpg" alt="">
        </li>

        <li class="mobileb">
          <img src="{{ URL::to('') }}/frontend/img/slider/mobileb.jpg" alt="">
        </li>
       {{--  <li class="corporateb">
          <img src="{{ URL::to('') }}/frontend/img/slider/Corporate_B.jpg" alt="">
        </li>
        <li class="fundtransferb">
            <img src="{{ URL::to('') }}/frontend/img/slider/fundtransfer-b.jpg" alt="">
          </li> --}}

      </ul>
      <span class="bottom-controll active" style="display: none;"></span>
      <span class="bottom-controll" style="display: none;"></span>
    </div>
    <div id="phases"></div>
  </div>







  <div class="container">
    <div class="row">
    <div class="col-md-1"></div>

      <div class="slider-main col-md-8">
        <!-- slide -->

        <ol class="">
          <!-- point -->
          <li class="active">
            <a href="{{ route('frontend.payment') }}"  class="auto-btn btn shadow-none hvr-grow" class="hoverhand"
              onmouseout="sendMonyout()">
              <i class="fa fa-square"></i>Payment Gateway</a>
          </li>
          <li class="">
            <a href="{{ route('frontend.billpay') }}" class="auto-btn btn shadow-none hvr-grow " class="hoverhand" id="title2"
              onmouseout="billpayout()">
              <i class="fa fa-square"></i>Bill Payment</a>
          </li>
          <li class=" ">
            <a href="{{ route('frontend.mobile_recharge') }}" class="auto-btn btn shadow-none hvr-grow" class="hoverhand" id="title3"
              onmouseout="corporateout()">
              <i class="fa fa-square"></i>Mobile Recharge </a>
          </li>
       {{--    <li class="">
            <a href="{{ route('frontend.corporate') }}" class="auto-btn btn shadow-none hvr-grow" class="hoverhand" id="title4"
              onmouseout="marchentout()">
              <i class="fa fa-square"></i>Corporate Solution </a>
          </li>
          <li class="">
            <a href="{{ route('frontend.fund_transfer') }}" class="auto-btn btn shadow-none hvr-grow" class="hoverhand" id="title5"
              onmouseout="paymentgatewayout()">
              <i class="fa fa-square"></i>Fund Transfer </a>
          </li> --}}


          <!-- playpause -->
          <!-- <i class="fa fa-circle" title="pause"></i> -->
        </ol>
        <!-- controll -->
        <span class="controll active" style="display: none;"></span>
        <span class="controll" style="display: none;"></span>
        <span class="top-controll active" style="display: none;"></span>
        <span class="top-controll" style="display: none;"></span>
        <span class="bottom-controll active" style="display: none;"></span>
        <span class="bottom-controll" style="display: none;"></span>
      </div>

      <div class="col-md-2"></div>
    </div>
  </div>

  <!-- // Main section End -->

  <!-- // Start Social Icon -->

@include('frontend.layout.social')
  <!-- // End Social Icon -->

  <!-- // Home Popup section Start -->
  <section>
    <div class="container" id="cookieNotice">
      <div class="row">
        <div class="col-md-12">
          <div class="popup animate__animated animate__fadeInUp animate_slower" id="popup">
            <a id="close"> &times;</a>
            <p class="card-text">This website uses cookies to ensure you get the best experience on our website. We'll assume you're ok with this, but you can opt out if you wish. <a href="{{ route('frontend.cookie') }}" class="cookie-link" style="text-decoration:underline;color:#0e694b;font-size: 14px;">Cookie Policy</a>
            </p>
            <div class="button">
              <a  id="accept" class="btn btn-sm accept" onclick="acceptCookieConsent()">Accept</a>
              <a id="deny"  class="btn btn-sm deny"  onclick="toggle()" >Deny</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- // Home Popup section End -->

</section>
  {{-- @include('frontend.layout.subscription') --}}













<!-- partner section start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="partner col-md-9" id="partner">
          <h2 class="partnertitle">Our Partners</h2>

<!--test  partner section start -->

    <div class="brand-wheel">
      <div class="brand-slide">


        <div class="logo-div">
            <a {{-- href="#"  --}}class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Southeast Bank Limited.png" alt="" />
               </a>
        </div>

        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Islami_Bank.png" alt="" />
              </a>
        </div>



        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/nagad.png" alt="" />
              </a>
        </div>


        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/mcash.png" alt="" />
              </a>
        </div>

        <div class="logo-div">

            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/okwallet.png" alt="" />
           </a>
        </div>



        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Master_Card.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Visa.png" alt="" />
               </a>
        </div>

        {{-- ------------------------------------ --}}


        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Robi.png" alt="" />
           </a>
        </div>

        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Airtel.png" alt="" />
           </a>
        </div>

        <div class="logo-div">
            <a {{-- href="#"  --}}class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Southeast Bank Limited.png" alt="" />
               </a>
        </div>

        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Islami_Bank.png" alt="" />
              </a>
        </div>



        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/nagad.png" alt="" />
              </a>
        </div>


        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/mcash.png" alt="" />
              </a>
        </div>

        <div class="logo-div">

            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/okwallet.png" alt="" />
           </a>
        </div>



        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Master_Card.png" alt="" />
           </a>
        </div>
        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Visa.png" alt="" />
               </a>
        </div>

        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Robi.png" alt="" />
           </a>
        </div>

        <div class="logo-div">
            <a {{-- href="#" --}} class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Airtel.png" alt="" />
           </a>
        </div>

    </div>
  {{--   <div class="brand-slide delay">
        <div class="logo-div">
            <a href="#" class="slide">
                <img src="{{ URL::to('')}}/frontend/img/partner/Visa.png" alt="" />
               </a>
        </div>
    </div>
  </div> --}}

<!-- test partner section start -->
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>





<!-- partner section END -->

<!-- Button trigger modal -->

  <!-- Modal -->


<div style="margin-top:100px">

</div>

@include('frontend.layout.subscription')

@include('frontend.layout.cookie_popup')

<script>

    document.getElementById("sbtn").style.display = "none";

</script>



@endsection






