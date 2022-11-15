@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

	<!-- page heading  start-->


<!-- page header start -->
<div class="container-fluid pagehead" id="pagehed">
    <h3>Recent Published Post</h3>
    <p><a href="{{ url('/') }}">home<a> / <a href="{{ route('frontend.blog')}}"> Blog </a>/ Blog Details</p>
</div>
<!-- page header END -->

	<!-- page heading  END-->

<div class=" container col-md-12 blogsec">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">

         <div class="row blogsingle">
            <h5>Account, Payment -  10 MINS READ</h5>
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</h2>
            <div class="blogtext">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur eius sunt tenetur voluptatem explicabo qui ad voluptas similique molestiae a, consectetur laborum beatae veniam soluta dolores perferendis? Porro vero quos a, excepturi iste impedit iure illum molestiae quasi fuga ex amet tempora. Esse consequatur ex dolorum exercitationem cum fugit consequuntur voluptate enim accusamus culpa rerum ratione odio officia laboriosam sequi velit maxime cumque, debitis autem incidunt saepe animi consectetur. Voluptates quae aut quam nobis animi deleniti! Consequatur rem dignissimos distinctio explicabo maiores ab animi voluptatum enim, mollitia facilis libero et tenetur, quas incidunt nostrum numquam inventore voluptas dolor quo voluptatem!</p>
            </div>
         </div>




         <div class="rpost_title">
            <h4>Related Post</h4>
        </div>


         <div class="row blogpostrlt">
            <div class=" col-md-5  blogpostrlt ">
                <img src="{{ URL::to('') }}/frontend/img/blog/Fintech.jpg">
              <div class="bloginsec">
                <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                <h5>9 MINS READ   <a href=""> Read More</a> </h5>

              </div>
            </div>

            <div class=" col-md-5 blogpostrlt ">
                <img src="{{ URL::to('') }}/frontend/img/blog/Fintech.jpg">
                <div class="bloginsec">
                <h2>Lorem ipsum dolor sit amet, consectetur...</h2>
                <h5>9 MINS READ   <a href=""> Read More</a> </h5>
                </div>
            </div>

        </div>



        </div>

        <div class="col-md-3">



          <div class="blogcat">
            <p>Category</p>
            <ul>
                <li>
                    <a href=""> <i class="fa-solid fa-circle-chevron-right"></i> Economy</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Finance</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Business</a>
                </li>
                <li>
                    <a href=""><i class="fa-solid fa-circle-chevron-right"></i> Development</a>
                </li>
            </ul>
          </div>

          <div class="blogsearch">
            <form action="" class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
            </form>

          </div>


          <div class="rpost">
            <p>Recent Post</p>
            <ul>
                <li>
                    <a href=""> Economy Vs Finanace</a>
                </li>
                <li>
                    <a href=""> Finance Vs Economy</a>
                </li>
                <li>
                    <a href=""> Business Development</a>
                </li>

            </ul>
          </div>



          <div class="offeradd">
            <img src="{{ URL::to('') }}/frontend/img/offerad.jpg" alt="">

          </div>




        </div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


