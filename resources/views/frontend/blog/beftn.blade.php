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

            <img src="{{ URL::to('') }}/frontend/img/blog/beftn.png" alt="">

            <h1>BEFTN: Bangladesh Electronic Funds Transfer Network</h1>
            <h6> — financial technology</h6>
            <div class="blogtext">
               <p>BEFTN stands for Bangladesh Electronic Funds Transfer Network, however, it is now simply known as Electronic Funds Transfer or EFT in the workplace. A consumer can use BEFTN to conduct financial transactions with another bank's customer from his bank account.
            </p>

            <p>To make the paper-based financial transaction system more safe and dynamic, the introduction of paperless fund transfer technology is the key.
            </p>

            <p>On February 26, 2011, Bangladesh Bank began operations in BEFTN. This technology is currently accessible in the majority of the country's public and commercial banks.
            </p>

            <h3>

                BEFTN’s Area of Services:
            </h3>

            <ul>
                <li>Any sort of credit transfer, such as international or domestic remittance, interest and principal of savings certificates, retirement benefits, monthly salary-allowance, dividend, interest, and so on can be done by using EFT credit.</li>
                <li>In addition, EFT debit can be used to recover utility costs such as electricity, water and gas bills, loan installments and insurance premiums from a customer's bank account.</li>
                <li>The electronic fund transfer option is now available twice a day in the latest update of BACH. During bank holidays, this service will not be offered in banks or online.</li>
                <li>BEFTN Fee: There is presently no fee for using BEFTN to transfer funds.</li>
                <li>Transferring money via BEFTN takes only one Working day. Money can now be moved day by day if you can transact before 10 a.m. at the correct time.</li>
            </ul>



            <h3>How to use BEFTN:</h3>

            <p>Customers may use BEFTN to conduct a variety of transactions online or in person. Customers can go to the bank and complete BEFTN with the assistance of bank employees. However, in the age of Fintech, a consumer may do BEFTN from his own home using his smartphone. The customer's phone merely has to have his bank's mobile app for this to work.</p>

            <h3>Information required for BEFTN transaction:</h3>

          <p>
            1. The exact bank account name and number of the recipient.<br>
            2. Recipient bank name, branch name and bank routing number.<br>
            3. Recipient's mobile number.<br>
            4. Customer or sender's own name, address, voter ID card number and mobile number.<br>
            5. The purpose of the money transaction must be written.<br>
            6. Lastly, the customer has to sign a letter of consent stating that he is not doing any kind of money laundering through this transaction.<br>
          </p>

          <h3>BEFTN's current status:</h3>

          <p>You'll be amazed to learn that in the financial year 2019-2020, a total of 50.44 million credit transactions worth 2458.54 billion taka were made in the country through BEFTN! And a total of 3.83 million debt transections worth 229.60 billion taka. This pace of transactions is a good indicator of BEFTN's popularity.</p>

          <h3>Where to report any transaction issues:</h3>
          <p>If a client has a problem with a BEFTN transaction, he or she should first contact his or her bank branch. If the problem is not fixed, the complaint should be forwarded to Bangladesh Bank's General Manager's e-mail address (gm.psd@bb.org.bb).</p>









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
                        <a href="{{ route('frontend.rtgs') }}">Real-Time fund transfer using RTGS</a>
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


