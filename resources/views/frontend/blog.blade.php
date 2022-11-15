@extends('frontend.layout.app')

@section('title')
Blog | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

	<!-- page heading  start-->


	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner  ">
				<h1>RECENT PUBLISHED</h1>
				<h5>Blog<span> Post</span> </h5>
				<p><a href="{{ url('/') }}">Home</a> / Blog</span>
			</div>
		</div>
	</div>

	<!-- page heading  END-->

<div class=" container  blogsec">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">

            <div class="col-md-12 blogcard">
              <div class="row">
                <div class="col-md-5">
                    <img src="{{ URL::to('') }}/frontend/img/blog/fintech1.png">
                </div>
                <div class="col-md-7 blogcard_details">
                    <h5>Financial Technology </h5>
                    <h2>Fintech: A Prominent Revamp in Bangladesh</h2>
                    <p>Fintech is a term that has recently become a buzzword throughout the world. Everyone is now adopting modern financial services...</p>
                    <a href="{{ route('frontend.fintech') }}"> Read More</a>
                </div>
              </div>
            </div>


          <div class="col-md-12 blogcard2">
            <div class="row">
                <div class="col-md-6 ">
                    <img src="{{ URL::to('') }}/frontend/img/blog/liberation1.png">
                  <div class="bloginsec">
                    <h2>Post-liberation Economic Status of Bangladesh </h2>
                    <h5>Economy <a href="{{ route('frontend.postlibaration') }}"> Read More</a> </h5>

                  </div>
                </div>

                <div class="col-md-6">
                    <img src="{{ URL::to('') }}/frontend/img/blog/idtp1.png">
                    <div class="bloginsec">
                    <h2>IDTP: First Step Towards a cashless society</h2>
                    <h5>Finance   <a href="{{ route('frontend.idtp') }}"> Read More</a> </h5>
                    </div>
                </div>

            </div>
          </div>



            <div class="col-md-12 blogcard">
                <div class="row">
                  <div class="col-md-5">
                      <img src="{{ URL::to('') }}/frontend/img/blog/beftn1.png">
                  </div>
                  <div class="col-md-7 blogcard_details">
                      <h5>Account</h5>
                      <h2>BEFTN: Bangladesh Electronic Funds Transfer Network</h2>
                      <p>BEFTN stands for Bangladesh Electronic Funds Transfer Network, however, it is now simply known as Electronic Funds Transfer</p>
                      <a href="{{ route('frontend.beftn') }}"> Read More</a>
                  </div>
                </div>
              </div>


              <div class="col-md-12 blogcard">
                <div class="row">
                  <div class="col-md-5">
                      <img src="{{ URL::to('') }}/frontend/img/blog/npsb1.png">
                  </div>
                  <div class="col-md-7 blogcard_details">
                      <h5>Finance</h5>
                      <h2>NPSB: National Payment Switch Bangladesh</h2>
                      <p>The National Payment Switch Bangladesh (NPSB) is an electronic platform for financial transactions. In terms of ...</p>
                      <a href="{{ route('frontend.npsb') }}"> Read More</a>
                  </div>
                </div>
              </div>



          <div class="col-md-12 blogcard2">
            <div class="row">
                <div class="col-md-6  ">
                    <img src="{{ URL::to('') }}/frontend/img/blog/rtgs1.png">
                  <div class="bloginsec">
                    <h2>Real-Time fund transfer using RTGS</h2>
                    <h5>Finance  <a href="{{ route('frontend.rtgs') }}"> Read More</a> </h5>

                  </div>
                </div>

                <div class="col-md-6 ">
                    <img src="{{ URL::to('') }}/frontend/img/blog/swift1.png">
                    <div class="bloginsec">
                    <h2>What you need to know about SWIFT</h2>
                    <h5>Finance  <a href="{{ route('frontend.swift') }}"> Read More</a> </h5>
                    </div>
                </div>

            </div>
          </div>




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
        <div class="col-md-1"></div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


