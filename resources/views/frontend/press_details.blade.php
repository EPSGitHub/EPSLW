@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>Publications</h3>
    <p><a href="{{ url('/') }}">home</a> / <a href="{{ route('frontend.press_release') }}">Press Release</a> / Press details</p>
</div>
<!-- page header END -->

<div class="container ">
    <div class="row">
        <div class="col-md-12 job_details">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7 job_details_page ">

                    <img class="event_details_info" src="img/eventblog.png" alt="">




                    <h4>News Title</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, fugiat?</p>


                    <h4>News Description</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quas vero minus, error odio
                        dolore quidem perspiciatis illo quibusdam eveniet harum cumque eligendi, obcaecati dolores
                        eum nulla fugit corporis voluptas facere quos aliquam omnis reiciendis accusamus. Quae porro
                        rerum mollitia reiciendis, voluptatum commodi eaque nesciunt iusto sequi ad qui aperiam esse
                        saepe expedita rem animi beatae itaque quisquam odio? Ea voluptas praesentium ducimus
                        veritatis voluptates nam reprehenderit, reiciendis dolorem natus.</p>

                    <img src="img/eventblog.png" alt="" width="300px" class="mb-2">
                    <img src="img/eventblog.png" alt="" width="300px" class="mb-2">
                    <img src="img/eventblog.png" alt="" width="300px">
                    <img src="img/eventblog.png" alt="" width="300px">




                    <h4>The applicants should have experience in the following business area(s):</h4>
                    <p>Software Company</p>
                    <p>Additional Requirements</p>
                    <p>1-2 years working experience in designing a range of digital products (apps, websites, and
                        software) across platforms (mobile, tablet, desktop), ideally for a large audiences or
                        similar role with proven track records.</p>
                    <p>Proficiency in design software including industry standard design tools (e.g. Figma,
                        Balsamiq, Adobe Photoshop, Adobe Illustrator, Adobe XD, etc. with an interest in exploring
                        new tools and processes)</p>
                    <p>Familiar with iOS/Android design specifications.</p>
                    <p>Skills and knowledge in front-end development/web development technologies such as
                        HTML/HTML5, CSS, JavaScript, and Responsive Web Design will be an added advantage.</p>
                    <p>Research and showcase knowledge in the industrys latest trends and technologies.</p>

                    <hr>








                </div>

                <div class="col-md-3 ">

                    <div class="job_details_side">
                        <h4>Publication Overview</h4>
                        <div class="job_side_item">
                            <p>Published On</p>
                            <span>14 May 2022</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Event Topic</p>
                            <span>Dhaka Traffic </span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Event Date</p>
                            <span>22 June 2022</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Speaker</p>
                            <span>Mr. XYZ</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Event location</p>
                            <span>Uttara, Dhaka</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Registration Price</p>
                            <span>Free</span>
                            <hr>
                        </div>
                        <div class="job_side_item">
                            <p>Registration deadline</p>
                            <span>10 June 2022</span>

                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
















<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


