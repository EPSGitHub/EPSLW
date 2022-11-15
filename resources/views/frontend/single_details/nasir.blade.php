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
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/nasir-uddin.png" alt="">
			<div class="sing_text">
				<h4>Md. Nasir Uddin </h4>
				<span>Director</span>
                <p> Optimum Solutions and Services Limited (OSSL)</p>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">Mr. Md. Nasir Uddin is a Director of ‘Optimum Solutions and Services Limited (OSSL).’ With an extensive grasp of garment manufacturing, marketing, planning, and policymaking management, Mr. Nasir Uddin holds an experience of 11+ years in this competitive industry. </p>
			<p class="full_des">In addition, Mr. Nasir Uddin has been playing the following vital roles:</p>

            <ol style="margin-bottom: 50px;margin-top:20px">
                <li>•	Director – Optimum Solution and Services Ltd.</li>
                <li>•	Vice-president – BGMEA </li>
                <li>•	Managing Director – Sadma Fashion Wear Limited.</li>
                <li>•	Chairman – N.K. Sweaters Limited.</li>
                <li>•	Managing Director – Mahadi International Limited.</li>
                <li>•	Director – Mouchak Knit Composite Limited.</li>
                <li>•	Director – Nupami BD Limited. </li>

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


