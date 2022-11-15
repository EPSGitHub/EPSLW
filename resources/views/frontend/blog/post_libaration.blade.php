

@extends('frontend.layout.app')

@section('title')
Blog | EPS
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

                <img src="{{ URL::to('') }}/frontend/img/blog/liberation.png" alt="">

                <h1>Post-liberation Economic Status of Bangladesh </h1>
                <h6> — Economy</h6>
                <div class="blogtext">
                  <p>After a violent 9-month liberation battle and the sacrifices of more than 3 million Bangladeshi patriots, the country has gained freedom and independence. </p>

                  <p>On December 16, 1971, more than 200 years of historical oppression for East Pakistanis came to an end. It was the end of a dark history spanning hundreds of years, the end of a hellish lifestyle, and the end of the Pakistani Army's daily torturing of East Pakistanis (Bengalis living in East Pakistan) and arrived independence being its sun of liberty into Bengalis lives. Pakistanis surrendered on December 16th, signed an agreement paper, and eventually left Bangladesh for good, recognizing Bangladesh's sovereignty. The country started to stand on its own and grow as a developing country in the world day by day. After 51 years of these developing journeys, Bangladesh has almost become a digitalized country having 74.68 percent of the global literacy rate at present, according to the macrotrends data.
                </p>

                <p>This long 51 years journey wasn’t easy at all regarding the reorganization of the economic condition of Bangladesh. There lies untold molded ups and downs to reach today’s state. The then West Pakistanis had almost broken Bengalis’ overall financial and structural condition from in and out. </p>

                <h3>An awful history that started from:
                </h3>

                <p>Bangladesh had just recovered from an extremely low and negative growth rate. Bangladesh's GDP growth rate in FY 1972-73 was merely 2.5 percent. This is due to the fact that the GDP at the time was barely 4 thousand 294 crores. The first five-year plan following independence established a target of 5% growth to overcome this negative and downward growth rate. The population rate has grown to unfathomable proportions. A larger part of the people who had migrated to India during the battle eventually returned to Bangladesh. Bangladesh did not have enough intellectuals at the time to take on the mission of shaping the country into a successful nation. To gain a place on the global map, it had to sacrifice millions of lives and lose Bengali scholars’ worth of hundreds of years of assets. Bengali’s bright history of successive achievements got demolished and the country lingered behind for hundreds of years.
                </p>

                <p>Bangladesh's economy was wrecked in no time as Pakistanis left no stone unturned in their efforts to destroy Bangladesh from the inside out. The transportation system was paralyzed as a result of the Pakistanis' attempts to destroy it. Due to Bangladesh's geographical location, no commerce was feasible without transportation, the country's prominent exportation sector—jute—was no longer able to trade, and the foreign trade sector was blunted. Without exports, there will be no foreign monetary assistance, no inbound remittances, and no national growth. The financial situation had deteriorated to the point that any form of agricultural expansion was difficult to design and implement. Agriculture's output fell down, and the government was unable to modernize the manufacturing and service industries' infrastructure. Because of the damaged national infrastructure, the country was forced to remain underdeveloped for a long time, and the initial status of the economy remained worse for a few years following the liberation struggle.
                </p>

                <p>Due to the country's destroyed economic structure, the then US Secretary of State Henry Kissinger subsequently labeled it a "Bottomless Basket" because it was also endowed with a relatively limited mineral resource (excluding natural gas) in comparison to its bigger population rate. Commercial exploitation brought additional curses with it as it moved from domestic to foreign trade. The supply chain was disrupted, affecting the fundamentals of industries and commerce, resulting in an increase in inflation and an excessive imbalance in economic supply and demand forces. The laborers’ availability finally resulted in material shortages. The country had a difficult time adapting to residential management. Engineers, physicians, teachers, professors, and many more intellectuals were mercilessly massacred by Pakistanis, leaving the nation in a low and impoverished state. In addition, the Bengalis who had migrated had to deal with not having a place to live.
                </p>

                <p>
                    Various sectors of the economy almost stopped contributing anymore. Shaken infrastructure badly affected its profitable segments. Agricultural & industrial sectors might have been starting to shape after 1971, having a very slow and steady growth of the service sector compared with others, the most destroyed sector was the banking & monetary which was totally unreliable and displaced. It took Bangladesh quite a long time to set up a stable banking system.
                </p>

                <h3>Endurance of the distress continues:</h3>

                <p>In the middle of the suffering and crisis, the East Pakistanis' history was once again crushed. The 1970 Bhola Cyclone had just passed through the continent, making it the scariest tropical cyclone on record and one of the world's worst catastrophes. In the aftermath of the storm, an estimated 500,000 people died, largely as a result of the coastal flooding that swamped much of the Ganges Delta's low-lying islands. East Pakistanis were only trying to dodge the tortures when calamity hit, worsening their miseries for a longer period of time, compounding the distressing level of the economy of Bangladesh (the then East Pakistan).
                </p>

                <p>Bangladesh, although being a part of the Indian subcontinent, previously boasted a huge array of economic resources that were very important in the global economy. Pakistanis attempted to snatch its glorifying assets and were brutally successful in shattering the country's foundation—this was the driving force behind the people of Bangladesh's desire to free their country from those enemies, and Bangladesh eventually ended up as a resourceless country wearing the crown of triumph. They struggled to protect their mother language and gave their lives in order to give birth to Bangladesh, an independent nation. From a crippled economy to one of the most remarkable economies in the whole world, Bengalis’ journey towards a glorious history wasn’t a piece of cake at all. In terms of the global economy, it is now one of the most profound countries on earth. It is now regarded as a developing economic country.
                </p>

                <p>
                    In 2021, it has become the world's 33rd largest economy in terms of nominal GDP, with RMG manufacturing contributing 84 percent of Bangladesh's exports. In the 50 years since independence, Bangladesh's GDP has grown 281 times and its per capita income has climbed about 301 times. Bangladesh's GDP in FY 2020-21 is 416 billion, and per capita income is 2,591. (according to BBS).
                    Despite the fact that the pandemic of 2020 has eroded the country's economic development, consistent and steady improvement in other areas of the economy has helped the country to prosper to a large extent.

                </p>

                </div>
             </div>




        {{--  <div class="rpost_title">
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

        </div> --}}



        </div>

        <div class="col-md-3">



            {{--   <div class="blogcat">
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
              </div> --}}

             {{--  <div class="blogsearch">
                <form action="" class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                </form>

              </div> --}}


              <div class="rpost">
                <p>Related Post</p>
                <ul>
                    <li>
                        <a href="{{ route('frontend.npsb') }}">NPSB: National Payment Switch Bangladesh</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.idtp') }}"> IDTP: First Step Towards a cashless society</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.beftn') }}"> BEFTN: Bangladesh Electronic Funds Transfer Network</a>
                    </li>

                </ul>
              </div>



              <div class="offeradd">
                <img src="{{ URL::to('') }}/frontend/img/offerads.jpg" alt="">

              </div>




            </div>
    </div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection















