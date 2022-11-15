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
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/Faruq-Ahmed.png" alt="">
			<div class="sing_text">
				<h4>Mr. Faruq Ahmed</h4>
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
			<p class="full_des">Mr. Faruq Ahmed is a Director of ‘Optimum Solutions and Services Limited (OSSL).’ He also holds an experience in the readymade garments sector. He completed his Bachelor of Commerce in 1993. </p>
			<p class="full_des">In addition, Mr. Faruq Ahmed has been successfully running the following businesses:</p>
            <ol style=" margin-top:10px; margin-bottom:30px" >
                <li>•	Director – Optimum Solution and Services Ltd.</li>
                <li>•	Managing Director, Modemakers Ltd.</li>
                <li>•	Managing Director, Teen Age Modern Fashion Ltd. </li>
                <li>•	Managing Director, Trimtex Ltd. </li>
                <li>•	Managing Director, Modemakers Impression Ltd.</li>
                <li>•	Proprietor, 3S Knitwear</li>

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


