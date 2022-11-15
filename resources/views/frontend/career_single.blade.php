@extends('frontend.layout.app')

@section('title')
Career Details | EPS
@endsection


@section('maincontent')


	<!-- page header start -->
	<div class="container-fluid pagehead" id="pagehed">
		<h3>{{ $careers->title }}</h3>
        <p><a href="{{ url('/') }}">home</a> / <a href="{{ route('frontend.career') }}">Career</a> / Job details</p>

	</div>
	<!-- page header END -->
	<div class="container ">
		<div class="row">
			<div class="col-md-12 job_details">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-7 job_details_page">

						<h3>{{ $careers->title }}</h3>
                        <p>{{ $careers->category }}</p>
						{{-- <h6><span>Jobs Type: {{ $careers->job_type }}</span><span>salary Range: {{ $careers->salary }}</span> <span>Experiance:
                            {{ $careers->experiance }}+</span></h6> --}}
						<hr>

                        {!! htmlspecialchars_decode($careers->description) !!}







					</div>

					<div class="col-md-3 ">

						<div class="job_details_side">
							<h4>Job Summary</h4>
							<div class="job_side_item">
								<p>Published On</p>
								<span>{{ $careers->created_at }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Vacancy</p>
								<span>{{ $careers->vacancy }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>employment Status</p>
								<span>{{ $careers->job_type }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Experiance</p>
								<span>{{ $careers->experiance }}Yrs +</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Job location</p>
								<span>{{ $careers->location }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Salary</p>
								<span>{{ $careers->salary }}</span>
								<hr>
							</div>
							<div class="job_side_item">
								<p>Application deadline</p>
								<span>{{ $careers->apply_deadline }}</span>

							</div>
						</div>




						<div class="job_apply_side">
							<a href="{{ url('job-application',$careers->id) }}"
								class="btn btn-lg btn-success shadow-none">Apply</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection












