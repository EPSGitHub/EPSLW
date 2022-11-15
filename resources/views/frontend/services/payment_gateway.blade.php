@extends('frontend.layout.app')

@section('title')
    Payment Gateway | Services | EPS
@endsection


@section('maincontent')
    <!-- // Start Code From Here -->


    <!-- page header start -->
    <div class="container-fluid pagehead" id="pagehed">
        <h3>Payment Gateway</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service') }}"> services </a>/ payment gateway</p>
    </div>
    <!-- page header END -->

    <div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 service_hig_btn ">

                        <ul>

                            <li><i class="fa-solid fa-check"></i>Easy Documentation</li>
                            <li><i class="fa-solid fa-check"></i>Easy Integrations</li>
                            <li><i class="fa-solid fa-check"></i>Invoice API</li>
                            <li><i class="fa-solid fa-check"></i>Create Sandbox Account</li>

                        </ul>

                        <a href="{{ route('frontend.contact') }}" class="btn btn-success">Get Started</a>



                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 pgimg">
                        <img src="{{ URL::to('') }}/frontend/img/desktop1.png" alt="">
                    </div>
                    {{-- <div class="col-md-2 srvlist">
                        <ul style="margin-top: 200px">

                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}"> <i
                                        class="fa-solid fa-circle-chevron-right"></i> Bank to Bank</a></li>
                        </ul>

                    </div> --}}
                </div>

            </div>
            <div class="col-md-2">

            </div>

        </div>

    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 sin_ser_headline">
                        <h3 style="font-size:24px;line-height:1.6">Upgrade your business with one of the finest payment gateways in Bangladesh</h3>
                        <p>Use EPS Payment Gateway for cost-effective and effortless payment collection</p>
                        <p>EPS Payment Gateway is a one-stop solution for every business in Bangladesh looking for easy, and effortless payment collection at the lowest cost in the market. </p>
                        <p>Irrespective of the business type, if it needs to receive payments digitally, choose EPS Payment gateway happily. It can be e-commerce (grocery, pharmacy, fashion, electronics, cosmetics, bookshop, any service provider etc.), e-learning, donation platform, school, college, university, training center, hospital, transportation and so on. All it needs is a gateway to automate its payment collection so that the customers can enjoy maximum flexibility with security and trust. Even if your business does not have a website or mobile app, do not hesitate to contact us, we may have an awesome solution for you! </p>

                        <div class="pglist col-md-12">
                            <h5 style="font-size:20px">Our payment options: </h5>
                        {{-- <i class="fa-solid fa-circle" style="font-size:8px;margin-right:5px"></i>Cards: VISA, Master, Union Pay --}}
                        <div class="row">
                            <div class="col-md-4">
                                <li style="font-size:17px; font-weight:500;margin-left: 7%;">Cards</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> VISA</li>
                            <li><i class="fa-solid fa-check"></i> Master Card</li>
                          </ul>

                          <li style="font-size:17px; font-weight:500;margin-left: 7%;">Internet banking</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> IBBL</li>
                            {{-- <li><i class="fa-solid fa-check"></i> SEBL</li> --}}
                          </ul>

                          <li style="font-size:17px; font-weight:500;margin-left: 7%;">Mobile banking</li>
                          <ul>
                            <li><i class="fa-solid fa-check"></i> Ok Wallet</li>
                            <li><i class="fa-solid fa-check"></i> Nagad</li>
                          </ul>
                            </div>
                            <div class="col-md-8">
                                <img src="{{ URL::to('') }}/frontend/img/services/pg/payment_option.svg" alt="">
                            </div>
                        </div>
                        </div>




                        <div class="col-md-12 pgsection">

                            <h4>Features of EPS Payment Gateway:</h4>
                                    <p>Every business requires a fast and easy system to process daily business transactions. Easy Payment System provides some of the most wholesome features for the payment gateway. Each of these features ensures a quality experience in the journey of business transactions.</p>
                            <div class="row">
                                <div class="col-md-6 pgsubsection" style="margin-top: 10%">

                                    <div class="pgsublists">

                                 <p style="font-weight: 500">EPS Payment Gateway ensures:</p>


                                      <ul>
                                        <li style="text-align: left"><i class="fa-solid fa-check"></i> Easy integration processes for business onboarding. </li>
                                        <li><i class="fa-solid fa-check"></i> Responsive payment gateway platform.</li>
                                        <li><i class="fa-solid fa-check"></i> An easily usable developer-friendly platform to ensure the best developer experience.</li>
                                        <li><i class="fa-solid fa-check"></i> A powerful dashboard that gives total control of all the business payments.</li>


                                      </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{ URL::to('') }}/frontend/img/services/pg/feature.png" alt="">
                                </div>
                            </div>

                        </div>


                        <div class="col-md-12 pgsection">

                            <h4>Register as a Merchant</h4>
                                    <p>Experience the all-in-one EPS Dashboard to speed up your business transactions. Register to access the most updated dashboard technology and up to date features. </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <img src="{{ URL::to('') }}/frontend/img/services/pg/registration.png" alt="">
                                </div>

                                <div class="col-md-6 pgsubsection">

                                    <div class="pgsublists">


                                      <ul>
                                        <li><i class="fa-solid fa-check"></i> Step 1: Visit the Registration Page</li>
                                        <li><i class="fa-solid fa-check"></i> Step 2: Apply with your Business Information</li>
                                        <li><i class="fa-solid fa-check"></i> Step 3: Get Verified</li>
                                        <li><i class="fa-solid fa-check"></i> Step 4: Integrate with your Ecommerce Platform and/or Mobile Application</li>
                                        <li style="text-align: left"><i class="fa-solid fa-check"></i> Step 5: Enjoy the best in Class Payment Gateway Service for your Business</li>
                                        <a href="{{ route('frontend.contact') }}" class="btn btn-success shadow-none" style="margin-top:5%;margin-left:-2%"> Register Here</a>


                                      </ul>
                                    </div>
                                </div>

                            </div>

                        </div>











                        <div style="margin-top: 5%">
                            <p>We are growing every day. Walk towards success with us!
                       Our <a href="{{ route('frontend.contact') }}" style="font-weight:600;color:#006A4E;text-decoration:underline;text-underline-offset:3px; font-size:18px"> Pricing </a> and offers are designed to help you stay motivated, and focus more on your business growth.</p>





                        </div>




                      {{--   <h2>How to Send Money</h2>
                        <ul>
                            <li>1. Download App</li>
                            <li>2. Sing up/Log in </li>
                            <li>3. Choice the bank</li>
                            <li>4. Input receiver details.</li>
                            <li>5. Send</li>
                            <li>6. Input OTP</li>
                        </ul>

                        <iframe src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> --}}



                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>

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


   {{--  <div class="container servicequery">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h3>Still Have a question?</h3>
                        <p>If you cannot find answer to your question in our FAQ, you can always <a
                                href="{{ route('frontend.contact') }}">contact us</a> . We will answer to you shortly!</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
 --}}

    <!-- // Start Social Icon -->

    @include('frontend.layout.social')

    <!-- // End Social Icon -->
@endsection
