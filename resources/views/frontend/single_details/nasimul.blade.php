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
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/Nasimul-Hasin.png" alt="">
			<div class="sing_text">
				<h4>Mr. Nasimul Hasin </h4>
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
			<p class="full_des">Mr. Nasimul Hasin is a Director of ‘Optimum Solutions and Services Limited (OSSL).’ He is a young and successful businessman. His diversified skill sets made him achieve today’s position where he is. </p>
			<p class="full_des">Besides OSSL, Mr. Nasimul Hasin is successfully playing the following key roles:</p>
            <ol style="margin-bottom: 30px; margin-top:0px">
                {{-- <li>•	Director – Optimum Solution and Services Ltd.</li> --}}
                <li>•	Director – Romo Food and Beverage Ltd.</li>
                <li>•	Proprietor – Mona Fashion Ltd. </li>


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


