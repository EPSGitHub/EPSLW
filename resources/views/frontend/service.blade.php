@extends('frontend.layout.app')

@section('title')
Services | EPS
@endsection


@section('maincontent')




<!-- // Start Code From Here -->
<div class="container ">
    <div class="row">
        <div class="front_banner  ">
            <h1>OUR SERVICES</h1>
            <h5>Our Application <span>Features</span> </h5>
            <p><a href="{{ url('/') }}">home</a> / service</span>
        </div>
    </div>
</div>
<!-- page heading  END-->

{{-- Slider start --}}

<div class="container-fluid serviceslide">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 serviceslider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
             {{--      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button> --}}
                </div>
                <div class="carousel-inner">



                  <div class="carousel-item active " data-bs-interval="5000">

                    <div class="carousel-caption">

                     <div class="row">
                        <div class="col-md-6">
                            <h5 class=" Service_title_text  " >PAYMENT<span class="Service_title_text_span">GATEWAY</span></h5>
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                           <ul>
                                <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#paymentgateway"><i class="fa-solid fa-check"></i> E-Commerce Payment</a></li>


                            </ul>




                        </div>
                        <div class="col-md-6">
                            <div class="slimg">
                                <div class="rotate top cirshape"></div>
                               <div class="div">
                                <div class="slimgp">
                                    <p></p>
                                </div>

                                <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/paymentgateway.jpg" alt="">
                               </div>

                            </div>

                        </div>


                        </div>
                     </div>

                    </div>




                    <div class="carousel-item  " data-bs-interval="9000">

                        <div class="carousel-caption">

                         <div class="row">
                            <div class="col-md-6">
                                <h5 class=" Service_title_text " >BILL<span class=" Service_title_text_span">PAYMENT</span></h5>
                                <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                               <ul>
                                    <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#billpay"><i class="fa-solid fa-check"></i> Electricity Bill </a></li>
                                    <li class="animate__animated animate__fadeInLeft delay-2"><a href="#billpay"><i class="fa-solid fa-check"></i> Water Bill </a></li>
                                    {{-- <li class="animate__animated animate__fadeInLeft delay-3 "><a href="#billpay"><i class="fa-solid fa-check"></i> Gas Bill </a></li> --}}
                                    <li class="animate__animated animate__fadeInLeft delay-4 "><a href="#billpay"><i class="fa-solid fa-check"></i> E - Services </a></li>

                                </ul>




                            </div>
                            <div class="col-md-6">
                                <div class="slimg">
                                    <div class="rotate top cirshape"></div>
                                   <div class="div">
                                    <div class="slimgp">
                                        <p></p>
                                    </div>

                                    <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/Bill-Pay.jpg" alt="">
                                   </div>

                                </div>

                            </div>


                            </div>
                         </div>

                        </div>






                        <div class="carousel-item  " data-bs-interval="7000">

                            <div class="carousel-caption">

                             <div class="row">
                                <div class="col-md-6">
                                    <h5 class="Service_title_text " >MOBILE<span class="Service_title_text_span">RECHARGE</span></h5>
                                    <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                                   <ul>
                                        <li class="animate__animated animate__fadeInLeft delay-1 "> <a href="#mobilerecharge"><i class="fa-solid fa-check"></i> Robi </a></li>
                                        <li class="animate__animated animate__fadeInLeft delay-2"> <a href="#mobilerecharge"><i class="fa-solid fa-check"></i> Airtel </a></li>

                                    </ul>




                                </div>
                                <div class="col-md-6">
                                    <div class="slimg">
                                        <div class="rotate top cirshape"></div>
                                       <div class="div">
                                        <div class="slimgp">
                                            <p></p>
                                        </div>

                                        <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/mobile.jpg" alt="">
                                       </div>

                                    </div>

                                </div>


                                </div>
                             </div>

                        </div>







                       {{--  <div class="carousel-item  " data-bs-interval="9000">

                            <div class="carousel-caption">

                             <div class="row">
                                <div class="col-md-6">
                                    <h5 class="Service_title_text " >CORPORATE<span class="Service_title_text_span">SOLUTION</span></h5>
                                    <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                                   <ul>
                                        <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#corporate"> <i class="fa-solid fa-check"></i> Salary Disbursement  </a></li>
                                        <li class="animate__animated animate__fadeInLeft delay-2"><a href="#corporate"> <i class="fa-solid fa-check"></i> Utility Bill Payment </a></li>
                                        <li class="animate__animated animate__fadeInLeft delay-3 "><a href="#corporate"> <i class="fa-solid fa-check"></i> Corporate Other payments </a></li>
                                        <li class="animate__animated animate__fadeInLeft delay-4 "><a href="#corporate"> <i class="fa-solid fa-check"></i>Vendor & Supplier Payment </a></li>

                                    </ul>




                                </div>
                                <div class="col-md-6">
                                    <div class="slimg">
                                        <div class="rotate top cirshape"></div>
                                       <div class="div">
                                        <div class="slimgp">
                                            <p></p>
                                        </div>

                                        <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/Corporate.jpg" alt="">
                                       </div>

                                    </div>

                                </div>


                                </div>
                             </div>

                        </div> --}}







{{--
                                <div class="carousel-item  " data-bs-interval="5000">

                                    <div class="carousel-caption">45x

                                     <div class="row">
                                        <div class="col-md-6">
                                            <h5 class=" Service_title_text  " >FUND<span class="Service_title_text_span">TRANSFER</span></h5>
                                            <h3 class="animate__animated animate__fadeIn animate__delay-2s animate__slower	2s seasy">EASY <br> PAYMENT <br> SYSTEM</h3>
                                           <ul>
                                                <li class="animate__animated animate__fadeInLeft delay-1 "><a href="#fundtransfer"><i class="fa-solid fa-check"></i> Bank to Bank</a></li>


                                            </ul>




                                        </div>
                                        <div class="col-md-6">
                                            <div class="slimg">
                                                <div class="rotate top cirshape"></div>
                                               <div class="div">
                                                <div class="slimgp">
                                                    <p></p>
                                                </div>

                                                <img class="animate__animated animate__slideInUp animate__slower	2s" src="{{ URL::to('')}}/frontend/img/slider/fundtransfer.jpg" alt="">
                                               </div>

                                            </div>

                                        </div>


                                        </div>
                                     </div>

                                    </div> --}}













                </div>




              </div>


        </div>
        <div class="col-md-1"></div>
    </div>
</div>


{{-- Slider End --}}

{{-- <div class="col-md-12" style="margin-top: 50px; background:white ;position:absolute; top:75%">
    <p style="margin-top: 20px"></p>
</div> --}}


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class=" col-md-9 choice_service">

         <div class="row">

            <div class="col-md-12">




                <p>Easy Payment System (EPS) provides a number of unique services that enable effortless financial transactions for every sector of our daily lives. With a promise to enable a user-friendly, all-in-one financial ecosystem, EPS comes with a low-cost, secure, simple and fast solution in Bangladesh.</p>

                <p>For business or personal usage, EPS has covered them all. Any merchants can receive their payments using EPS Payment Gateway. Corporates can avail of EPS corporate services to make their day-to-day transactions fast and easy. Individuals can pay their bills and fees, recharge their mobiles, and soon will be able to send and receive money using EPS fund transfer service.  </p>
            </div>

         </div>






        </div>
        <div class="col-md-1"></div>
    </div>
</div>






<div class="container">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 our_service ">
            <div class="row">

                <div class="col-md-4 servicelist" id="paymentgateway">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Payment <span> Gateway</span></h3>
                    <p>Use EPS Payment Gateway for cost-effective and effortless payment </p>
                    <a href="{{ route('frontend.payment') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                     <ul>
                        <li {{-- class="hvr-grow" --}}><i class="fa-solid fa-check"></i> E-Commerce Payment</li>



                     </ul>
                </div>

                <div class="col-md-4 servicelist" id="billpay">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Bill <span> Payment </span></h3>
                    <p>EPS introduces the easiest way to pay all your bills from a single application</p>
                    <a href="{{ route('frontend.billpay') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> Electricity Bill</li>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> Water Bill</li>
                        {{-- <li class="hvr-grow"> <i class="fa-solid fa-check"></i> Gas Bill</li> --}}
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> E-Services</li>

                     </ul>
                </div>

                <div class="col-md-4 servicelist" id="recharge">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Mobile <span> Recharge</span></h3>
                    <p>Make effortless mobile recharge through the EPS Mobile Recharge </p>
                    <a href="{{ route('frontend.mobile_recharge') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li {{-- class="hvr-grow" --}}> <i class="fa-solid fa-check"></i> Robi</li>
                        <li {{-- class="hvr-grow" --}}><i class="fa-solid fa-check"></i> Airtel</li>

                     </ul>
                </div>


            </div>

        </div>

        <div class="col-md-1"></div>





    </div>

</div>



{{-- <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class=" col-md-8 service_banner">
            <img src="frontend/img/service_page/application-banner.png" alt="">

        </div>
        <div class="col-md-2"></div>
    </div>
</div> --}}



<div class="container">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 our_service ">
            <div class="row">
                <div class="col-md-2"></div>
                {{-- <div class="col-md-4 servicelist" id="corporate">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Corporate <span> Solution</span></h3>
                    <p>Get along with the new EPS corporate service for better financial transactions</p>
                    <a href="{{ route('frontend.corporate') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                     <ul>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Salary Disbursement</li>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Utility Bill Payment </li>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Corporate Other Payments</li>
                        <li class="hvr-grow"><i class="fa-solid fa-check"></i> Vendor & Supplier Payment</li>
                     </ul>
                </div> --}}

               {{--  <div class="col-md-4 servicelist" id="fundtransfer">
                    <img src="{{ URL::to('') }}/frontend/img/service_page/sendmoney.png" alt="">
                    <h3>Fund  <span> Transfer</span></h3>
                    <p>Transfer funds using EPS in a simple, secure and fast method</p>
                    <a href="{{ route('frontend.fund_transfer') }}"> Read More <i class="fa-solid fa-chevron-right"></i></a>
                    <ul>
                        <li class="hvr-grow" ><i class="fa-solid fa-check"></i> Bank to Bank</li>


                     </ul>
                </div> --}}
                <div class="col-md-2"></div>

            </div>

        </div>

        <div class="col-md-1"></div>





    </div>

</div>


<div class="container servicequery">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Still have a question?</h3>
            <p>If you cannot find  the answers of your questions in our <a href="{{ route('frontend.faq') }}">FAQ</a>, you can always  <a
                    href="{{ route('frontend.contact') }}">Contact Us</a> . We will get back to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>



<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


