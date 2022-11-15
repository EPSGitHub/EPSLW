@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<div class="container-fluid pagehead" id="pagehed">
    <h3>EVENT TITLE</h3>
    <p><a href="{{ url('/') }}">home</a> / <a href="{{ route('frontend.event')}}">event</a> / event details</p>
</div>
<!-- page header END -->

<div class="container ">
    <div class="row">
        <div class="col-md-12 job_details">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7 job_details_page ">

                    <img class="event_details_info" src="img/eventblog.png" alt="">




                    <h4>Event Title</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, fugiat?</p>


                    <h4>Event Description</h4>
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
                        <h4>Job Summary</h4>
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

                    <div class="job_details_side">
                        <h4>Subscription for Event Notification</h4>
                        <form action="" class="form-group mt-3">
                            <input type="text" class="form-control" placeholder="Email">

                        </form>


                    </div>


                    <div class="job_apply_side">
                        <a href="" data-bs-toggle="modal" data-bs-target="#jobapply"
                            class="btn btn-sm btn-success  shadow-none">Event Registration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<!-- Modal start-->
<div class="modal fade  " id="jobapply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body mbody jobapp">
                <div class="container col-md-12">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-11 jobform_head">
                                    <h3>Event Regitration </h3>
                                    <span>Bangladesh Finanace Institute </span>

                                </div>
                                <div class="col-md-1 jobform_head_close">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 jobform">
                            <form action="" class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control">

                                <label for="">Email</label>
                                <input type="text" class="form-control">

                                <label for="">Phone Number</label>
                                <input type="text" class="form-control">

                                <label for="">Address</label>
                                <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>


                                <label for="">Transection ID</label>
                                <input type="text" class="form-control">

                                <input type="submit" class="form-control bg-success text-white mt-2" value="Submit">

                            </form>
                        </div>


                    </div>
                </div>


            </div>
            <!-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> -->
        </div>
    </div>
</div>
<!-- Modal End -->




<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


