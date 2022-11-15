
 @extends('frontend.layout.app')

 @section('title')
Career | EPS
 @endsection


 @section('maincontent')


     <!-- page header start -->
     <div class="container ">
         <div class="row">
             <div class="col-md-12  career-head ">
                 <h1>CAREER</h1>
                 <h5>Join with <span>Us</span> </h5>
                 <p><a href="{{ url('/') }}">home</a> / career</span>
             </div>
         </div>
     </div>
     <!-- page header END -->

   {{--   <div class="container careersec">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 careersearch">
				<form action="">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search Job"
							aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn  btn-danger shadow-none " type="button"><i
									class="fa-solid fa-magnifying-glass"></i></button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>

		</div>
	</div> --}}



	<div class="container careercat">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<h5>Category</h5>

                <div class="portfolio-menu">
                    <ul>
                        <li class="active" data-filter="*"> <i class="fa-solid fa-circle-chevron-right"></i> All</li>

                     @foreach ($career_cat as $ct )

                      <li data-filter=".{{ $ct->slug }}"><i class="fa-solid fa-circle-chevron-right"></i>{{ $ct->name }}</li>

                      @endforeach
                    </ul>
                </div>

			</div>
			<div class="col-md-7 jobblock">
            <div class="portfolio-item">
                @foreach ($career as $c )
				<div class="item {{ $c->cat_slug }} jobpost">
					<p>{{ $c->category }}</p>
					<h3>{{ $c ->title}}</h3>
					<h6><span>Jobs Type: {{ $c->job_type }}</span><span>Salary Range: {{ $c->salary }}</span> <span>Experiance:
                        {{ $c->experiance }}+</span></h6>
					<a href="{{ url('career-details',$c->id) }}" class="btn btn-success shadow-none"> Apply</a>
					<h6 class="jdate">Last Date: {{ $c ->apply_deadline}}</h6>


				</div>

                @endforeach







            </div>

			</div>
		</div>
	</div>







	<!-- // Start Social Icon -->


	@include('frontend.layout.social')

	<!-- // End Social Icon -->


	<!-- Footer  Start -->










@endsection
