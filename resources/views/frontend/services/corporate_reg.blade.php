@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>Corporate</h3>
        <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.service')}}"> services </a>/ <a  href="{{ route('frontend.corporate')}}">Corporate</a></p>
	</div>
	<!-- page header END -->



<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 merchantform">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                            <h2>Submit Request</h2>
                    <p>Fill the form & Submit to know details about EPS Corporate solution. Our Relationship Specialist will get back to you.</p>

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                     @endif

                    <form action="{{ route('corporate.registration.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="company_name" class="form-control" placeholder="Enter Your Company Name">
                            @if ($errors->has('company_name'))
                            <span class="text-white">{{ $errors->first('company_name') }}</span><br>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <select name="employee_number" class="form-control" id="">
                                <option value="">Select Number of Employees</option>
                                <option value="1-10">1-10</option>
                                <option value="11-20">11-20</option>
                                <option value="21-30">21-30</option>
                                <option value="31-40">31-40</option>
                                <option value="41-50">41-50</option>
                                <option value="51-60">51-60</option>
                                <option value="61-70">61-70</option>
                                <option value="70-120">70-120</option>
                                <option value="120-200">120-200</option>
                                <option value="200 +"> 200 +</option>
                            </select>
                            @if ($errors->has('employee_number'))
                            <span class="text-white">{{ $errors->first('employee_number') }}</span><br>
                        @endif
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="contact_person" class="form-control" placeholder="Contact Person Name">
                            @if ($errors->has('contact_person'))
                            <span class="text-white">{{ $errors->first('contact_person') }}</span><br>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="email" class="form-control" placeholder="Email Address">
                            @if ($errors->has('email'))
                            <span class="text-white">{{ $errors->first('email') }}</span><br>
                        @endif
                        </div>


                        <div class="col-md-4">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                            @if ($errors->has('phone'))
                            <span class="text-white">{{ $errors->first('phone') }}</span><br>
                        @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="website" class="form-control" placeholder="Company Website">
                            @if ($errors->has('website'))
                            <span class="text-white">{{ $errors->first('website') }}</span><br>
                        @endif
                        </div>
                        </div>


                        <div class="col-md-12">
                        <textarea name="company_details" id="" cols="30" rows="5" class="form-control"  placeholder="Tell Us  About Your Query"></textarea>
                        @if ($errors->has('company_details'))
                        <span class="text-white">{{ $errors->first('company_details') }}</span>
                         @endif

                        </div>





                        <div class="col-md-12">
                        <input type="submit" value="submit" class="btn btn-danger btn-md shadow-none merchantsubmit">
                        </div>

                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>



<div class="container servicequery">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h3>Still Have a question?</h3>
            <p>If you cannot find answer to your question in our <a href="{{ route('frontend.faq') }}">FAQ</a>, you can always  <a
                    href="{{ route('frontend.contact') }}">contact us</a> . We will answer to you shortly!</p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <div class="col-md-2"></div>

    </div>
</div>














<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


