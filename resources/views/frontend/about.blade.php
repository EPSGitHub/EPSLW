@extends('frontend.layout.app')

@section('title')
About Us | EPS
@endsection




@section('maincontent')

	<!-- // Start Code From Here -->


	<!-- page heading  start-->


	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner  ">
				<h1>ABOUT US</h1>
				<h5>What We <span>Do</span> </h5>
				<p><a href="{{ url('/') }}">Home</a> / About Us</span>
			</div>
		</div>
	</div>

	<!-- page heading  END-->


	<section>
		<div class="container details">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<h6>About EPS</h6>
					<h3>Wind of Change in Digital Transaction</h3>


					<p>
						Easy Payment System is an innovative payment solution permitted by Bangladesh Bank as a Payment
						System Operator (PSO). Developed by a global technology solution provider Optimum Solution and
						Services Ltd. (OSSL), EPS aims to provide Fintech solutions for all financial Institutions.
					</p>

                    <p>

                        Customers from all financial platforms can use EPS. The aim is to serve users with the ease of Digital Payment including Payment Gateway, Bill Payment, Mobile Recharge etc.

                    </p>

					<p>
						Our Vision is to provide a financial ecosystem to its users so that they are capable of connecting multiple accounts and manage all kinds of transactions accordingly. And that is why the main theme of EPS has been determined-<b> Easy Solution for All Transactions.</b>

					</p>
				</div>
				<div class="col-md-5">
					<ul>

                        <li><h4 class="abtincep">The Inception Story:</h4></li>
                        <li>
                            <p>
                                EPS was born under the supervision and support of A2I and Bangladesh Bank, and finally got its approval to run as a Payment System Operator (PSO) after the successful completion of the piloting phase. EPS is developed by a global technology solution provider. Having a customer base in Bangladesh and different continents, it is emerging as one of the fastest growing technology solution providers. The inception story of EPS also strengthens its backbone.

                            </p>

                            <p class="abtinceplast">
                                EPS strives to make digital transactions effortless by enabling mass people with an easy and instant payment system.
                            </p>

                        </li>


						<li><img src="{{ URL::to('') }}/frontend/img/vision.png" alt=""> <span>Vision</span>
							<p>To create a brand that adds value to the digital financial ecosystem. </p>
						</li>

						<li class="abimission"><img src="{{ URL::to('') }}/frontend/img/mission.png" alt=""> <span>Mission</span>
							<p>To minimize the barriers of digital transactions, and support financial institutions by facilitating their customers/clients with digital payment services.</p>
						</li>

					</ul>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</section>


	<!-- Client Section  start-->

{{-- 	<section id="client">

		<div class="container ">
			<div class="row">

				<div class="col-md-12  front_banner  ">
					<h1>OUR CLIENTS</h1>

				</div>

			</div>
		</div>
		<div class="container mt-2">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="customer-logos slider" style="margin-top: 50px;">
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/IBBL.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/City_Bank 1.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
						<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>


					</div>

				</div>
				<div class="col-md-1"></div>



			</div>


		</div>

		</div>

	</section> --}}

	<!-- Client Section END-->

	<!-- Team Section  start-->
	<section id="team_head">
		<div class="container ">
			<div class="row">

				<div class="col-md-12  front_banner  ">
					<h1>OUR BOARD MEMBERS</h1>
					<h5>Board of <span>Directors</span> </h5>

				</div>

			</div>
		</div>
	</section>

	<section id="gallery">

		<div class="container">
			<div class="row">

		        <div class="col-md-1 tag">
					<h4> {{-- — Management —  --}}</h4>
				</div>


				<div class="col-md-11">
					<div class="row">

						<div class="col-md-2"></div>
						<div class="col-md-7">
							<div class="row">
								<!-- ------------------------------------------- -->
								<div class="col-md-6 sigdiv hvr-grow">
									<a href="#"   data-bs-toggle="modal" data-bs-target="#mohsin" ><img
											src="{{ URL::to('') }}/frontend/img/team/Mohammad-Mohsin.png" alt=""></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#mohsin">
											<h6>Mr. Mohammad Mohsin</h6>
										</a>
										<p>Chairman</p>
									</div>
								</div>
								<!-- ----------------------------------------------------- -->
								<div class="col-md-6 sigdiv hvr-grow">
									<a href="#" data-bs-toggle="modal" data-bs-target="#shahalam" ><img src="{{ URL::to('') }}/frontend/img/team/Md-Shah-Alam.png" alt=""></a>
									<div class="dtl">
										<a href="" data-bs-toggle="modal" data-bs-target="#shahalam"><h6>Md. Shah Alam</h6></a>
										<p>Managing Director</p>
									</div>
								</div>

							</div>
						</div>
						<div class="col-md-3"></div>


					</div>
				</div>


				<div class="col-md-1"></div>
			</div>
		</div>


		<div class="container">
			<div class="row">

			<div class="col-md-1 tag">
					<h3>{{--  — Directors — --}} </h3>
				</div>


				<div class="col-md-11">
					<div class="row">

						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<!-- ------------------------------------------- -->
								<div class="col-md-4 sigdiv hvr-grow">
									<a href="#" data-bs-toggle="modal" data-bs-target="#nasir"><img src="{{ URL::to('') }}/frontend/img/team/Nasir-Uddin.png" alt=""></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#nasir">
											<h6>Md. Nasir Uddin</h6>
										</a>
										<p>Director</p>
									</div>
								</div>
								<!-- ----------------------------------------------------- -->

                                <div class="col-md-4 sigdiv hvr-grow">
									<a href="#"  data-bs-toggle="modal" data-bs-target="#faruq"><img src="{{ URL::to('') }}/frontend/img/team/Faruq-Ahmed.jpg" alt=""></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#faruq">
											<h6>Mr. Faruq Ahmed</h6>
										</a>
										<p>Director</p>
									</div>
								</div>

                                <div class="col-md-4 sigdiv hvr-grow">
									<a href="#" data-bs-toggle="modal" data-bs-target="#nasimul"><img src="{{ URL::to('') }}/frontend/img/team/Nasimul-Hasin.png" alt=""></a>
									<div class="dtl">
										<a href="#" data-bs-toggle="modal" data-bs-target="#nasimul">
											<h6>Mr. Nasimul Hasin </h6>
										</a>
										<p>Director</p>
									</div>
								</div>


							</div>
						</div>
						<div class="col-md-1"></div>


					</div>
				</div>


				<div class="col-md-1"></div>
			</div>
		</div>


		<div class="container teambtn" style="margin-bottom:100px">

			{{-- <a href="{{ route('frontend.team') }}" class="btn btn-md btn-success"> View All</a> --}}
		</div>


	</section>

<!-- Team section end -->


<!-- EPS Official Logo -->


	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner">
				<h1>OUR OFFICIAL LOGO </h1>
				<h5> EPS Logo <span></span> </h5>
			</div>
		</div>
	</div>


	<div class="container epslogo">
		<div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8">
            <img src="{{ URL::to('') }}/frontend/img/logo-png.png" alt="">
            <a href="{{ URL::to('') }}/frontend/img/epslogo.jpg"class="btn btn-success shadow-none"  download="epslogo"> <i class="fa-solid fa-cloud-arrow-down"></i> Download</a>
           </div>
           <div class="col-md-2"></div>


		</div>

	</div>
	</div>

<!-- EPS Official Logo END -->


<!-- EPS Achievement Start -->

{{-- 	<section id="achivement">
		<div class="container ">
			<div class="row">
				<div class="col-md-12  front_banner  ">
					<h1>OUR ACHIEVEMENTS </h1>
					<h5> Certification <span></span> </h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class=" col-md-10 customer-logos slider" style="margin-top: 50px;">
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/IBBL.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/City_Bank 1.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/dachbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/easternbank.png"></a></div>
					<div class="slide"><a href=""><img src="{{ URL::to('') }}/frontend/img/partner/eximbank.png"></a></div>


				</div>
				<div class="col-md-1"></div>
			</div>
		</div> --}}


<!-- EPS Achievement END -->


@include('frontend.layout.modal')



	</section>
	<!-- // Start Social Icon -->


    @include('frontend.layout.social')

	<!-- // End Social Icon -->




@endsection














