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

            <img src="{{ URL::to('') }}/frontend/img/blog/swift.png" alt="">

            <h1>What you need to know about SWIFT</h1>
            <h6> — financial technology</h6>
            <div class="blogtext">


                <p>In 2021, banks and other financial institutions used SWIFT to conduct 4.2 million financial transactions per day throughout the world. In comparison to daily transactions in 2020, the transaction rate is 11.4% greater now. This sort of information was just added to the official website of SWIFT, a company that provides financial messaging services or financial data transactions.
                </p>

                <p>SWIFT added on its website that the highest-ever message traffic (communication through communication system) was recorded on November 30, 2021. It was about 5.3 million numbers of messages that occurred on that day. On the previous day, this traffic rate was 8.5% lower than the aforementioned day. </p>

                <p>The average amount of financial messages through using the SWIFT channel was 4.6 million in the year 2020. SWIFT keeps updating its website data regarding its financial message traffic on a regular basis. (www.swift.com)
                </p>

                <p>By going through these astonishing numbers regarding transactions via SWIFT, now it is very clear how much it is important to understand the financial sectors from an international perspective.</p>

                <p>Let’s have a glimpse of this well-known “atomic bomb’’ of the financial sector- SWIFT, a financial messaging platform, and get to know the ins and outs of this super-burning topic across the nations.</p>

                <h3>What is SWIFT?</h3>

                <p>The full form of SWIFT is Society Interbank Financial Telecommunication which is basically a global financial messaging platform. The most important aim of developing SWIFT is to create a faster network between banks and financial institutions worldwide and deliver financial messages and information from one network to another.
                </p>

                <p> This SWIFT is also known as Worldwide Interbank Financial Telecommunication. </p>

                <h3>SWIFT: When, Where, and Where</h3>
                <p>In its initial phase, SWIFT started its journey in 239 banks from 15 different countries. Its headquarters is situated in La Hulpe, Belgium. SWIFT started its journey right after telex technology was getting exchanged with SWIFT in 1977, although the beginning phase of SWIFT started in 1973. Usually, creating a more reliable messaging service was the main aim of working behind the leading objective. </p>

                <p>Among 22 countries, 518 financial institutions got connected with the SWIFT messaging service in 1977. In the later years, this messaging service has been globally defined as an important segment of the financial sector.
                </p>

                <p>At present, SWIFT has been working for more than 200 countries of the world where it is connected with more than 1.1k financial institutions. Currently, SWIFT has 16 offices worldwide.</p>

                <h3>Who Controls SWIFT</h3>
                <p>Basically, the United States and European banks founded this Belgian-based institution. SWIFT is a partnership network corporation that has roughly 2000 banks and other financial institutions as stockholders.
                </p>

                <p>These shareholders elect a board of 25 independent directors, representing banks around the world. They basically manage Swift and oversee the management of the company. A team of full-time employees led by the CEO serves as the executive committee.
                </p>

                <p>All major G-10 central banks, including the Federal Reserve Bank of the United States and the Bank of England, oversee Swift's operations. In addition, the National Bank of Belgium oversees Swift's operations. (G-10 Central Banks are as follows- Belgium, Canada, France, Germany, Italy, Japan, Netherlands, United Kingdom, United States, Switzerland, and Sweden)
                </p>

                <h3>How the SWIFT is operated? </h3>
                <p>As it is not a payment system, no money can be transacted directly through SWIFT. However, trillions of dollars of transaction information are exchanged using SWIFT every year. SWIFT is basically a messaging platform, whose main function is to instantly inform users about any transaction that occurred.</p>
                <p>Banks use the SWIFT channel to pay merchants for cross-border transactions. Not only traders but also the governments of different countries have started transacting through the SWIFT network. In this case, the transactions are done through the central banks or commercial banks of the countries</p>

                <h3>The SWIFT Code</h3>
                <p>The Swift Code is a special code approved by the Swift Platform that identifies a specific organization name, country name, city name, and branch name. Swift code is required only when a person or organization wants to send money to an account abroad.
                </p>

                <p>A unique code of 8 or 11 characters is assigned to each organization in the Swift Network. This is called the Business Identifier Code (BIC). This BIC code is the Swift code we were discussing above.
                </p>

                <p>
                    This code has received recognition by the following three names: <br>
                    1. The Business/ Bank Identifier Code <br>
                    2. SWIFT Code <br>
                    3. SWIFT ID or ISO 9362 Code <br>

                </p>

                <p>By whatever names this SWIFT code or SWIFT ID or ISO 9362 got its recognition, this BIC is a standard format of those Business Identifier Codes approved by the Internation Organization for Standardization (ISO). Such unique codes are used to facilitate the automatic processing of information of all financial and non-financial institutions.
                </p>


                <p>There are two types of BIC codes for SWIFT networks. One is the Connected BIC Codes Connected BICs) with which SWIFT is connected. The other is non-connected BIC codes (Non-connected BICs) with which SWIFT is not connected, it is used for reference only.
                </p>

                <p>Now the major point of discussion is what do 8 characters and 11 characters of codes actually indicate?</p>

                <h3>What are the elements found in a code which consists of 8 characters?</h3>

                <p>The first 4 characters of the 8-character Swift code can be used to identify the initial name of the bank or business organization, the next 2 to identify the country, and the last 2 to identify the city.
                </p>

                <p>
                    Example: <br>
                    The SWIFT Code of Islami Bank Bangladesh Limited- IBBLBDDH. <br>
                    Here, the first four characters imply the bank code- IBBL= Islami Bank Bangladesh Limited<br>
                    The next two characters signify the country code- BD= Bangladesh<br>
                    Finally, the last two characters imply the city code- DH= Dhaka<br>

                </p>

                <h3>What do you mean by a SWIFT code that consists of 11 characters?</h3>

                <p>The first 8 of the 11-character Swift code identify the bank's initial name, country, and city in the same way. The next 3 characters or numbers can be used to identify a particular branch of a bank or organization. However, 3 characters are optional, transactions can be done without them too.
                </p>

                <p>Example: <br>
                    The SWIFT Code of Islami Bank Bangladesh Limited's Barisal Branch- IBBLBDDH111. Here-<br>
                    The first four characters imply the bank code- IBBL= Islami Bank Bangladesh Limited<br>
                     The next two characters signify the country code- BD= Bangladesh<br>
                     The latter two characters imply the city code- DH= Dhaka<br>
                     And finally, the last three characters signify the branch identifier code- 111= Barisal Branch<br>
                    </p>


                <h3>How can we transact via a SWIFT code?</h3>

                <p>Let's say you want to transfer money from your City bank account to a buddy who lives in the US and has a Bank of America account at a particular location. To conduct the transactions with that friend financially, all you have to do is- <br>

                    That friend's Bank of America account number <br>
                    Your friend’s name <br>
                    SWIFT code of the specific branch of the bank <br>

                </p>

                <p>Once City Bank has been given proper information, City Bank will use the SWIFT Network to issue a request for a money transfer to that specific Bank of America branch. The money is credited to your friend's account after being validated and cleared that are received by Bank of America from that specific branch.</p>


                <h3>Is it possible to transact overseas without using SWIFT Code?</h3>

                <p>A bank that has a SWIFT code works with institutions that don't have one to conduct financial transactions. This third bank serves as a bridge for financial transactions. Bangladesh, like the majority of other countries and financial institutions, is linked to the Swift network.
                </p>

                <p>Overseas transactions can also be done with IBAN code instead of SWIFT code. The full form of IBAN is - the International Bank Account Number (IBAN). IBAN code is another standard format of business identifier code, similar to SWIFT code or BIC code, which is approved by the International Organization for Standardization (ISO).
                </p>
























            </div>
         </div>




       {{--   <div class="rpost_title">
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


