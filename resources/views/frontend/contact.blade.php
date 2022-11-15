@extends('frontend.layout.app')

@section('title')
Conatact Us | EPS
@endsection


@section('maincontent')


	<!-- // Start Code From Here -->

	<!-- page header start -->
	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner  ">
				<h1 sty>CONTACT US</h1>
				<h5>Get in <span>Touch</span> </h5>
				<p><a href="{{ url('/') }}">Home</a> / Contact Us</span>
			</div>
		</div>
	</div>

	<!-- page header END -->

	<div class="frmst">

		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4261153278258!2d90.38741071481776!3d23.87450408452829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c56159ed9f25%3A0x1eaccd1117a4a3c7!2sEPS%20-%20Easy%20Payment%20System!5e0!3m2!1sen!2sbd!4v1650696340227!5m2!1sen!2sbd"
			width="100%" height="400" style="border:0;" allowfullscreen=""
			referrerpolicy="no-referrer-when-downgrade">
		</iframe>

	</div>



	<div class="container mfrm">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-7 frm ">
				<form action="{{ route('contact.us.store') }}" method="POST" >
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
					<h5>Have a question?</h5>
					<div class="col-md-12 form-group">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="name"  placeholder="Full Name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Email Address" name="email" class="form-control" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<textarea  name="message" placeholder="Message" class="form-control" name="" id="" cols="30"
							rows="10"></textarea>
                            @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
					</div>


					<input type="submit" class="btn btn-md btn-success sbt shadow-none" value="Submit" >

				</form>
			</div>
			<div class="col-md-4 adr contact_adrs">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">
						<i class="fa-solid fa-location-dot"></i>
					</div>

					<div class="col-md-9 ">
						<h5>Address</h5>
						<p>38, Sonargaon Janapath Road, Sector-11, Uttara, Dhaka-1230, Bangladesh</p>

					</div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">
						<i class="fa-solid fa-phone-volume"></i>
					</div>

					<div class="col-md-9 aadr">
						<h5>Contact</h5>
						<a href="tel:+09614-770066">09614-770066</a>
						<a href="mailto:support@eps.com.bd">support@eps.com.bd</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">
						<i class="fa-solid fa-headset"></i>
					</div>

					<div class="col-md-9">
						<h5>Support Hours</h5>
						<p>24/7</p>
					</div>
				</div>

                <div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1 mscl">
						<i class="fa-regular fa-share-from-square"></i></i>
					</div>

					<div class="col-md-9 mscl">
						<h5>Follow us on</h5>
					</div>
				</div>




				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-1">

					</div>

					<div class="col-md-9 mscl ">

						<h5>    </h5>
						<div class="contact_social scl">
							<ul>
								<li><a href="https://www.facebook.com/EPSpay"  target="_blank" class="active"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="https://www.linkedin.com/company/epspay" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
								<li><a href="https://twitter.com/EpsPay" target="_blank"><i class="fa-brands fa-twitter" ></i></a></li>
								<li><a href="https://www.youtube.com/channel/UC2AHw4Dlwfy56ifCPTbPlOw" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>





							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


@endsection












