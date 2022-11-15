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
            <img src="{{ URL::to('') }}/frontend/img/blog/idtp.png" alt="">

            <h1>IDTP: First Step Towards a cashless society</h1>
            <h6> — finance</h6>
            <div class="blogtext">
                <p>The Interoperable Digital Transaction Platform (IDTP) is an initiative of the Bangladesh government; whose primary objective is to bring the general people online to deliver digital financial services connected to financial transactions.
                </p>

                <p>It will serve as a bridge between a variety of financial service providers, including banks, non-banking financial institutions, merchants and enterprises, and usual clients. Bangladesh Bank will manage the IDTP platform.
                </p>

                <p>"IDTP will allow real-time and low-cost transfer of funds in the financial sector," stated State Minister for ICT, Junaid Ahmed Palak.
                </p>

                <h3>Area and type of service:</h3>
                <ul>
                    <li>
                        The Interoperable Digital Transaction Platform (IDTP) will be a service whose application programming interface (API) will be used by the country's Fintech companies and will enable digital money transactions, e-commerce, m-commerce, bill payments, merchant payments, exchange of remittances, machine-to-machine payments and other transactions are possible through it.

                    </li>

                    <li>Simply, the inter-operative digital transaction platform is a new means to move money from one mobile financial service (MFS) to another MFS, as well as from MFS to banks and other payment service providers (PSPs). This implies that all financial service providers will be grouped together.</li>

                    <li>
                        For example, a bKash user will be able to effortlessly transfer money to a Nagad user; once the IDTP platform is enabled.

                    </li>

                    <li>
                        IDTP registered clients can scan the QR code (Quick Response Code)  to pay for goods in any store or shop, in addition to digital transactions. By the implementation of IDTP clients will be able to conduct financial transactions with more convenience. Because, each transaction will be protected by Two Factor Authentication (2FA).

                    </li>

                    <li>
                        Money transaction through NID card- Because all of a customer's transactions will be done through his or her National Identity Card Number (NID), the number of issues such as money laundering, financial fraud, and illegal funding should be reduced.

                    </li>
                </ul>

            <h3>Implementation of IDTP:</h3>

            <p>In the conference room of the Information and Communication Technology Department at ICT Tower, Agargaon, a Memorandum of Understanding (MoU) was signed in 2019 between the Information and Communication Technology Department and Bangladesh Bank for the implementation of the Inter-Operative Digital Transaction Platform (IDTP). The goal of the effort is to boost fintech and digital financial inclusion.
            </p>

            <p> On behalf of the Information and Communication Technology Department, Syed Mojibul Haque, Director (Additional Secretary), Idea Project; and on behalf of Bangladesh Bank, Mesbaul Haque, General Manager, Payment Systems Department, signed the MoU.
            </p>

            <p>"Interoperability would have a good influence on the financial industry and will enable financial services providers to understand the nature of clients by evaluating data on interbank MFS transactions," said Atiur Rahman, former central bank governor.
            </p>

            <h3>
                Cashless economy:

            </h3>

            <p>In Bangladesh, IDTP technology will play a crucial role in the development of a cashless society. One of the most essential components is the Inter-Operative Digital Transaction Platform (IDTP) to achieve the goal of the Bangladesh Government’s ‘Digital Bangladesh’.
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
                        <a href="{{ route('frontend.npsb') }}"> NPSB: National Payment Switch Bangladesh</a>
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


