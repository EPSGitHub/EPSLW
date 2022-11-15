@extends('frontend.layout.app')

@section('title')
Press Release | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>EPS Publications </h1>
				<h5>Press<span> Release</span> </h5>
                <p><a href="{{ url('/') }}">Home</a> / Press Release</span>
			</div>

		</div>
	</div>
</section>
@include('frontend.layout.social')

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 pressrelease">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="{{ URL::to('') }}/frontend/img/media/slider/business_s.png"  class="d-block w-100" alt="...">
                    <div class="carousel-caption  d-md-block ">
                        <h5>OSSL received PSO license from Bangladesh Bank</h5>
                        <p>Bangladesh Bank granted the Payment System Operator (PSO) license to technology solution provider Optimum Solution and Services Ltd. (OSSL) ...</p>
                        <a class="btn btn-md btn-success  shadow-none" style="left:-10%" href="{{ route('frontend.business_standard') }}">View Details</a>
                    </div>
                  </div>




                    <div class="carousel-item ">
                      <img src="{{ URL::to('') }}/frontend/img/media/slider/dailystar.png" class="d-block w-100" alt="...">
                      <div class="carousel-caption  d-md-block ">
                          <h5>OSSL received Payment System Operator (PSO) license from Bangladesh Bank</h5>
                          <p>Technology solution-providing company Optimum Solution and Services Ltd. (OSSL) received the Payment System Operator (PSO) license from Bangladesh Bank on 23 August...</p>
                          <a class="btn btn-md btn-success  shadow-none" style="left:-10%" href="{{ route('frontend.daily_star') }}">View Details</a>
                      </div>
                    </div>


                  <div class="carousel-item ">
                    <img src="{{ URL::to('') }}/frontend/img/media/slider/banglapost.png"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block ">
                        <h5>Bangladesh Bank granted Payment System Operator (PSO) license to Easy Payment System (EPS)</h5>
                        <p>Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO).</p>
                        <a class="btn btn-md btn-success  shadow-none" style="left:-10%" href="{{ route('frontend.businessdesk') }}">View Details</a>
                    </div>
                  </div>



                </div>
              </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<div class="col-md-12 pressdiv">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5" >
           <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">


                      {{--   <form action="">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control" placeholder="Type your Question"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn  btn-danger  shadow-none " type="button"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form> --}}



            </div>
           </div>


           <div class="col-md-12  pressblogdiv presspost1">
            <div class="col-md-12  ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10  pressblog">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ URL::to('') }}/frontend/img/media/bstandard11.png" alt="">
                        </div>
                        <div class="col-md-7">
                            <h6>Aug <span>23</span></h6>
                            <h4>OSSL received PSO license from Bangladesh Bank</h4>
                            <p>Bangladesh Bank granted the Payment System Operator (PSO) license to technology solution provider Optimum Solution and Services Ltd. (OSSL) ...</p>

                            <a href="{{ route('frontend.business_standard') }}" class="btn btn-success shadow-none">Read More</a>
                        </div>

                    </div>

                </div>

                <div class="col-md-1"></div>
            </div>
        </div>




        <div class="col-md-12  pressblogdiv">
            <div class="col-md-12  ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10  pressblog">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ URL::to('') }}/frontend/img/media/dailystar11.png" alt="">
                        </div>
                        <div class="col-md-7">
                            <h6>Aug <span>24</span></h6>
                            <h4>OSSL received Payment System Operator (PSO) license from Bangladesh Bank</h4>
                            <p>Technology solution-providing company Optimum Solution and Services Ltd. (OSSL) received the Payment System Operator (PSO) license from Bangladesh Bank on 23 August... </p>

                            <a href="{{ route('frontend.daily_star') }}" class="btn btn-success shadow-none">Read More</a>
                        </div>

                    </div>

                </div>



                <div class="col-md-1"></div>
            </div>
        </div>




        <div class="col-md-12  pressblogdiv">
            <div class="col-md-12  ">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10  pressblog">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ URL::to('') }}/frontend/img/media/bpost11.png" alt="">
                        </div>
                        <div class="col-md-7">
                            <h6>Aug <span>25</span></h6>
                            <h4>Bangladesh Bank granted Payment System Operator (PSO) license to Easy Payment System (EPS)</h4>
                            <p>Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). </p>

                            <a href="{{ route('frontend.businessdesk') }}" class="btn btn-success shadow-none">Read More</a>
                        </div>

                    </div>

                </div>



                <div class="col-md-1"></div>
            </div>
        </div>


















        <div class="col-md-2"></div>
    </div>
</div>




<!-- // Start Social Icon -->



<!-- // End Social Icon -->


 @endsection


