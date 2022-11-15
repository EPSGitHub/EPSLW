@extends('frontend.layout.app')

@section('title')
Mobile Recharge | Services | EPS
@endsection


@section('maincontent')

@include('frontend.layout.social')

<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Mobile Recharge</h3>
		<p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ mobile recharge</p>
	</div>
	<!-- page header END -->

{{-- <div class="container-fluid service-single">


        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                   <div class="col-md-1"></div>
                   <div class="col-md-6 fundTransferService">

                    <div class="col-md-12 TraffifCal">

                        <h3>Cost Calculator of Mobile Recharge</h3>
                        <div class="row">

                            <div class="col-md-12  ">
                                <div class="row">
                                   <div class="col-md-12">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Select Operator</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>


                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                   <div class="col-md-6">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Recharge Type</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>
                                   <div class="col-md-6 ">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Sender Bank / MFS</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>

                                </div>

                            </div>

                            <div class="col-md-12 terrifcal">

                                <input type="text" class="form-control trafficimg" placeholder=" &#2547;  00,000.00 " >
                            </div>

                            <div class="col-md-12 terrifcalfield2services">

                                <p>Charge</p>
                                <p class="chargefee"> &#2547; 100</p>


                             </div>

                             <div class="col-md-12 terrifcalfield3services">

                                 <p>Total amount with Charge</p>
                                 <p class="totalchrges"> &#2547; 100.000</p>


                              </div>




                        </div>




                    </div>

                    <div class="col-md-12 fundtransferapp ">
                        <h4> To Get EPS Mobile Recharge Service <br> <a href="#" class=" message">Download EPS
                                App Now</a> </h4>

                    </div>


                </div>
                    <div class="col-md-3 servicerightimg">
                        <img src="{{ URL::to('') }}/frontend/img/service_single.png" alt="">
                    </div>
                    <div class="col-md-2 srvlist">
                        <ul style="margin-top: 175px">
                            <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}" > <i class="fa-solid fa-circle-chevron-right"></i> Robi</a></li>
                            <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Airtel</a></li>

                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-2">

            </div>

        </div>

</div> --}}

<div class="container-fluid service-single">


    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4 fundTransferService" >

                  {{--   <div class="col-md-12 TraffifCal">

                        <h3>Cost Calculator of Bill Pay</h3>
                        <div class="row">

                            <div class="col-md-12  ">
                                <div class="row">
                                   <div class="col-md-12">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Select Bill Type</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>


                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="row">
                                   <div class="col-md-6">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Biller Name</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>
                                   <div class="col-md-6 ">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected> Sender Bank / MFS</option>
                                        <option value="1">Bank to Bank</option>
                                        <option value="2">Bank to MFS</option>
                                        <option value="3">MFS to MFS</option>
                                        <option value="3">MFS to Bank</option>
                                    </select>
                                   </div>

                                </div>

                            </div>

                            <div class="col-md-12 terrifcal">

                                <input type="text" class="form-control trafficimg" placeholder=" &#2547;  00,000.00 " >
                            </div>

                            <div class="col-md-12 terrifcalfield2services">

                                <p>Charge</p>
                                <p class="chargefee"> &#2547; 100</p>


                             </div>

                             <div class="col-md-12 terrifcalfield3services">

                                 <p>Total amount with Charge</p>
                                 <p class="totalchrges"> &#2547; 100.000</p>


                              </div>




                        </div>




                    </div> --}}

                    <div class="service_hig_btn ">

                        <ul>

                            <li><i class="fa-solid fa-check"></i>Robi</li>
                            <li><i class="fa-solid fa-check"></i>Airtel</li>
                            {{-- <li><i class="fa-solid fa-check"></i>Invoice API</li> --}}
                            {{-- <li><i class="fa-solid fa-check"></i>E-Services</li> --}}

                        </ul>




                    </div>

                    <div class="col-md-12 fundtransferapp ">
                        <h4> To Get  EPS MObile Recharge Service <br> <a href="#" class=" message">Download EPS App Now</a> </h4>

                    </div>


                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3 servicerightimg">
                    <img src="{{ URL::to('') }}/frontend/img/slider/mobile.jpg" alt="">
                </div>

                  {{-- <div class="col-md-2 srvlist">
                  <ul>
                        <li class="hvr-grow"><a href="{{ route('frontend.service_single_details') }}" > <i class="fa-solid fa-circle-chevron-right"></i> Electricity Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Water Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Gas Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> InternetBill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> Telephone Bill</a></li>
                        <li class="hvr-grow"><a href="#" > <i class="fa-solid fa-circle-chevron-right"></i> E- Service</a></li>
                    </ul> --}}
                </div>
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
                <h3 style="font-size:24px;line-height:1.6">Make effortless mobile recharge through the EPS  </h3>

                <p>EPS makes mobile recharge easier. EPS removes barriers that make mobile recharge possible from your card, mobile wallet or bank account. Our partner telecommunication companies provide numerous services. But to avail of these services, one needs to recharge first. There come EPS! </p>

                <p>So, recharge from our partner operators and make EPS a part of your lifestyle! </p>



               {{-- <h2>How to Send Money</h2>
                <ul>
                        <li>1. Download App</li>
                        <li>2. Sing up/Log in </li>
                        <li>3. Choice the bank</li>
                        <li>4. Input receiver details.</li>
                        <li>5. Send</li>
                        <li>6. Input OTP</li>
                </ul>

                <iframe  src="https://www.youtube.com/embed/SSJrsPlNFp8" title="EPS Easy Payment System" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}

                <div class="col-md-12 pgsection">

                    <h4>Mobile Recharge Journey</h4>
                            <p>EPS removes barriers that make mobile recharge possible from your card, mobile wallet or bank account. EPS users can easily mobile recharge to their Robi and Airtel numbers.</p>
                    <div class="row">
                        <div class="col-md-6 pgsubsection" style="margin-top:5%">

                            <div class="pgsublists">

                         <p style="font-weight: 500">Customer journey</p>


                              <ul>
                                <li><i class="fa-solid fa-check"></i> Click on the “Mobile Recharge” option. </li>
                                <li><i class="fa-solid fa-check"></i> Enter “Mobile Number”, and Select “Mobile operator”.</li>
                                <li><i class="fa-solid fa-check"></i> Enter the amount or choose desired mobile recharge pack </li>
                                <li><i class="fa-solid fa-check"></i> Select “Prepaid/Postpaid”  </li>
                                <li><i class="fa-solid fa-check"></i> Now Choose a Payment Method and Click “Next” </li>
                                <li><i class="fa-solid fa-check"></i> Enter your Payment Method’s Account Number and PIN (of the payment method) and Click “Next”</li>


                              </ul>

                            </div>
                        </div>
                        <div class="col-md-6 billpayimgs" style="margin-top: 3%">
                            <img  src="{{ URL::to('') }}/frontend/img/services/mobilerecharge/mobile.png" alt="">
                        </div>
                    </div>

                    <p>After following these instructions, the User will receive an OTP in his/her registered mobile number and need to enter the OTP in the designated field for verification.</p>

                    <p>All details will be fetched, Customer will then be able to check the details and press the “Tap & hold” button to mobile recharge successfully. </p>

                    <p style="font-weight: 500">Customers can download the transaction receipt for their reference after all kinds of transactions.</p>



                </div>




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


<!-- // Start Social Icon -->



<!-- // End Social Icon -->


 @endsection


