@extends('frontend.layout.app')

@section('title')
Blog | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

	<!-- page heading  start-->


<!-- page header start -->
<div class="container-fluid pagehead" id="pagehed">
    <h3>EPS Published Post</h3>
    <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.blog')}}"> Blog </a>/ Blog Details</p>
</div>
<!-- page header END -->

	<!-- page heading  END-->

<div class=" container col-md-12 blogsec">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">

         <div class="row blogsingle">

            <img src="{{ URL::to('') }}/frontend/img/blog/npsb.png" alt="">

            <h1>NPSB: National Payment Switch Bangladesh</h1>
            <h6> — financial technology</h6>
            <div class="blogtext">
              <p>The National Payment Switch Bangladesh (NPSB) is an electronic platform for financial transactions. In terms of card-based and internet-based financial transactions, it links Bangladesh's banks with one another. NPSB's major goal is to provide interbank services, which entails the exchange of services between two banks. Since December 26, 2012, Bangladesh Bank has begun working on the service.</p>

              <p>What is NPSB? To get the answer to this question, you need to know about 3 means of transaction through NPSB- ATM, POS and IBFT.
            </p>

            <h3>Area and types of service:</h3>

            <p>The National Payment Switch Bangladesh (NPSB) is currently working with three interbank transaction mediums. However, attempts are underway to put mobile financial services (MFS) providers under this service in near future.</p>

            <h3>1. Automated Teller Machine (ATM):</h3>
            <p>The Automated Teller Machine or ATM, is a machine that allows a bank customer to withdraw cash from his own bank account using a card. The ATM booths under NPSB are interoperable. As a consequence, users of one bank may use their cards to withdraw cash, transfer funds, check balances and print mini statements from ATMs of other banks as well as their own bank's ATM booths.
            </p>

            <p>As of May 2022, a total of 54 banks in the country are interconnected through NPSB and naturally their ATM booths are inter-operable. (List of Inter-operable Banks)</p>

            <h3>ATM Transaction limit:</h3>
            <p><b>Withdrawal Limit:</b> The cash withdrawal limit of ATM machines in Bangladesh is Tk 20,000 to Tk 40,000 per single transaction, depending on the bank. The daily ATM withdrawal limit is Tk 150,000 to Tk 200,000 per 24-hour cycle, again depending on the bank and whether your card type is Silver, Gold, Platinum, Signature, Infinity, etc.</p>

            <p><b>ATM Transaction Charge:</b> Customers must pay 15 tk for cash withdrawals from another bank's ATM and 5 tk for a mini statement. Getting these services via your bank's ATM, on the other hand, is free.</p>


            <h3>2. Point of Sales (POS):</h3>
            <p>A bank customer can pay for a product or service using a card at a point of sale (POS) system. In this instance, the POS of the banks that are member of the NPSB are likewise interoperable. As a consequence, a bank client can use the POS of another bank in addition to his own bank's POS to pay for any goods or services at numerous merchant outlets. A total of 53 banks are offering interoperable POS transaction services as of October 2021.
            </p>

            <p><b>POS Transaction Charge:</b> For POS transactions, bank cardholders are not charged separately.</p>



            <h3>3. Internet Banking Fund Transfer (IBFT):</h3>

            <p>A consumer can use the IBFT service to transfer money from one bank account or card to another via online banking. IBFT services are provided by a total of 30 inter-operable banks as of October 2021.
                Customers can use IBFT to pay utility bills, credit card bills, loan installment payments, insurance premium payments and other items via internet banking at home or at the bank.
                </p>


                <h3>Transaction Limit for IBFT:</h3>
                <p>IBFT transactions have distinct limits for individual and institutional trades.</p>

                <ul>
                    <li>Personal transactions have a maximum limit of tk 3 lakhs per transaction, a maximum of 10 transactions per day and a maximum transaction value of tk 10 lakhs.</li>
                    <li>Institutional or corporate clients have a maximum limit of tk 5 lakhs per transaction, a maximum of 20 transactions per day and a maximum transaction value of tk 25 lakhs.</li>

                </ul>
                <p>   Inter-operative banks must ensure two-factor authentication (2FA) for every online / e-commerce / inter-banking / card transaction in the event of IBFT transactions.</p>


                <h3>Special benefits:</h3>

                <p>Inter-operative banks are connected to each other through NPSB so that customers of a particular bank can avail themselves of services with another bank using ATM, POS, and IBFT. This saves customer’s valuable time.</p>

                <p>Overall, NPSB has reduced the risk of carrying cash and checkbooks. It is also relieving customers from the hassle of standing in line.
                </p>







            </div>
         </div>




        {{--  <div class="rpost_title">
            <h4>Related Post</h4>
        </div> --}}


         {{-- <div class="row blogpostrlt">
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


