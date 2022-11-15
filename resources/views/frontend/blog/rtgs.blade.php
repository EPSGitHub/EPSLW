@extends('frontend.layout.app')

@section('title')
Blog | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

	<!-- page heading  start-->


<!-- page header start -->
<div class="container-fluid pagehead" id="pagehed">
    <h3>Recent Published Post</h3>
    <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.blog')}}"> Blog </a>/ Blog Details</p>
</div>
<!-- page header END -->

	<!-- page heading  END-->

<div class=" container col-md-12 blogsec">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">

         <div class="row blogsingle">

            <img src="{{ URL::to('') }}/frontend/img/blog/rtgs.png" alt="">

            <h1>Real-Time fund transfer using RTGS
            </h1>
            <h6> — financial technology</h6>
            <div class="blogtext">

               <p> RTGS or BD-RTGS stands for Real-time Gross Settlement in its full form. What is RTGS? The simplest explanation is that it is an electronic fund settlement system that allows users to move funds from their own accounts to any other bank account holder or transfer funds seamlessly. </p>

                <p>The Bangladesh Bank launched the RTGS to the local payment ecosystems on December 19, 2015. Since then, RTGS has been able to open a new door to the country's banking sector and has been acknowledged as a safe and fast payment method.</p>

                <h3>RTGS Service Platforms:</h3>

                <p>The Real-Time Gross Settlement -RTGS system is an interbank payment system. It still operates within the parameters of the local region and uses local currencies. However, international currencies will be added to this payment method very soon.
                </p>

                <p>This payment procedure now connects more than 10,888 virtual branches from around 59 banking institutions.
                </p>

                <h3>Advantages of RTGS fund transfer:</h3>

             <ul>
                <li>The RTGS procedure might take a ranging from a few minutes to 30 minutes to complete. Users from one bank can effortlessly send large sums of money to anyone else's bank account, as well as receive remittances.</li>
                <li>RTGS may transfer any sum over one lakh in monetary money, however, it has no restrictions when it comes to government transactions.
                </li>
                <li>Aside from local transactions, customers can utilize the RTGS payment system to move international funds inside the area.
                </li>
                <li>The services that are available from the RTGS payment process are-
                    ·       Online VAT payment, customer duty payment, Automated Consignment System (ACS), and other services are available. All additional delayed Net Settlement Batch (DNSB) transactions, such as BACPS, BEFTN, or NPSB, can be settled via the RTGS system in addition to these interbank transaction services.  Not only that but the BD-RTGS system integrated into Bangladesh Bank's core banking solution.
                </li>

                <li>The sole disadvantage of the RTGS transaction method is that customers are not permitted to send funds less than one lakh taka.</li>

             </ul>

             <h3>RTGS vs BEFTN:</h3>
             <p>BEFTN may take one or two working days to execute a transaction, but the RTGS fund transfer system allows for real-time or immediate transfers.
            </p>

            <p>BEFTN usually has no restriction on the amounts of transactions you can do, however, the RTGS payment method has a limit of minimum one lac per transaction.</p>

            <h3>How to conduct the RTGS? </h3>

            <p>Through RTGS, a customer can make various types of transactions online or in person. A customer can go to the bank and do RTGS with the help of bank employees. However, in this age of FinTech, a customer will be able to perform RTGS from his smartphone at home. For this, the customer's phone only needs to have his bank's mobile app.
            </p>

          <h3>Information needed to operate RTGS: </h3>
         <ul>
            <li>The exact bank account name and number of the recipient.</li>
            <li>Recipient bank name, branch name, and bank routing number.</li>
            <li>Recipient's mobile number.</li>
            <li>Customer or sender's own name, address, voter ID card number, and mobile number.</li>
            <li>The purpose of the money transaction must be written.</li>
            <li>Lastly, the customer has to sign a letter of consent stating that he/she is not doing any kind of money laundering through this transaction. </li>
         </ul>

         <h3>Current Status of BD-RTGS Transactions in Bangladesh:</h3>

         <p>The total number of RTGS transactions between July and September 2021 was 11,54,98, with a financial value of Rs 5,61,843 crore. In the fiscal year 2019-2020, 1.92 million transactions of Rs. 12,220 billion were conducted using the Real Time Gross Settlement (RTGS) system. (Source: Bangladesh Bank)</p>

         <p>The Real-Time Gross Settlement (RTGS) system is one of the governments of Bangladesh's many initiatives to develop a cashless payment system.
        </p>









            </div>
         </div>




         {{-- <div class="rpost_title">
            <h4>Related Post</h4>
        </div>


         <div class="row blogpostrlt">
            <div class=" col-md-5  blogpostrlt ">
                <img src="{{ URL::to('') }}/frontend/img/blog/Fintech.jpg">
              <div class="bloginsec">
                <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                <h5>9 MINS READ   <a href=""> Read More</a> </h5>

              </div>
            </div>

            <div class=" col-md-5 blogpostrlt ">
                <img src="{{ URL::to('') }}/frontend/img/blog/Fintech.jpg">
                <div class="bloginsec">
                <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                <h5>9 MINS READ   <a href=""> Read More</a> </h5>
                </div>
            </div>

        </div> --}}



        </div>

        <div class="col-md-3">



            {{--   <div class="blogcat">
                <p>Category</p>
                <ul>
                    <li>
                        <a href=""> <i class="fa-solid fa-circle-chevron-right"></i> Economy</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Finance</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Business</a>
                    </li>
                    <li>
                        <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Development</a>
                    </li>
                </ul>
              </div> --}}

             {{--  <div class="blogsearch">
                <form action="" class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </form>

              </div> --}}


              <div class="rpost">
                <p>Recent Post</p>
                <ul>
                    <li>
                        <a href="{{ route('frontend.postlibaration') }}"> Post-liberation Economic Status of Bangladesh </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.idtp') }}"> IDTP: First Step Towards a cashless society</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.beftn') }}"> BEFTN: Bangladesh Electronic Funds Transfer Network</a>
                    </li>

                </ul>
              </div>



              <div class="offeradd">
                <img src="{{ URL::to('') }}/frontend/img/offerads.jpg" alt="">

              </div>




            </div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


