@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>Details View of </h1>
				<h5>Team<span> Member</span> </h5>
                <p><a href="{{ url('/') }}">Home</a> / <a href="{{ route('frontend.aboutus') }}">About Us</a></p>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_img">
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/Mohammad-Mohsin.png" alt="">
			<div class="sing_text">
				<h4>Mr. Mohammad Mohsin</h4>
				<span>Chairman</span>
                <p>Optimum Solutions and Services Limited (OSSL)</p>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">Mr. Mohammad Mohsin is the Chairman of Optimum Solutions and Services Limited (OSSL), a cutting-edge Fintech company with a long track record. </p>
			<p class="full_des">Mr. Mohsin is also an accomplished businessman. He made a significant contribution to the industry with his 20 years of experience in the RMG and FMCG sectors. Additionally, he has years of experience in some of the most competitive fields, including trading, security services, and IT & ITES. In 1992, Mr. Mohammad Mohsin earned his postgraduate degree in business studies from the Islamic University of Kustia.</p>
			<p class="full_des">Besides OSSL, Mr. Mohammad Mohsin has been successfully running the following businesses:</p>

			<ol style="margin-bottom: 30px">
                <li>•	Chairman – Romo Fashion Today Ltd.</li>
                <li>•	Chairman - Romo Food and Beverage Ltd</li>
                <li>•	Chairman – Romo International.</li>
                <li>•	Managing Partner – Romo Corporation.</li>
                <li>•	Chairman – S4 Global Security.</li>
                <li>•	Chairman – Beacontech Limited.</li>
            </ol>


		</div>
		</div>


		<div class="col-md-3"></div>
	</div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


