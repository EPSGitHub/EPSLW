<div class="col-md-12 navbg sticky-top">
    <div class="col-md-3 topmenu1">
      {{-- <a class="search"  onclick="searchboxshow()"><i class="fa-solid fa-magnifying-glass" style="color:#666666"></i></a> --}}
      <button class="btn btn-success shadow-none hddownbtn" class="rgb-border-content" type="submit" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Download App</button>
     {{--  <button class="btn btn-sm btn-danger shadow-none hddownbtn" type="submit">English</button> --}}
    </div>

    <nav class="navbar navbar-expand-lg hd" style="position: relative;">


      <div class="container-fluid">
        <div class="logo1 col-md-2">
          <a href="{{ url('/') }}"><img src="{{ URL::to('') }}/frontend/img/logo/eps-logo.svg" class="" alt=""></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nv" id="collapsibleNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ui">
              <a class="nav-link " aria-current="page" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-grid-fill" viewBox="0 0 16 16">
                  <path
                    d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                </svg> Home </a>
            </li>
           {{--  <li class="nav-item offeritem">
              <a class="nav-link " aria-current="page" href="{{ route('frontend.offer') }}">
                <img src="{{ URL::to('') }}/frontend/img/eps_gif_image.gif" width="26px"  alt="">
                <span>Offers</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('frontend.service') }}">
                <i class="fa-solid fa-hand-holding-medical"></i> Services </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('frontend.blog') }}">
                <i class="fa-solid fa-file-signature"></i> Blog </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('frontend.faq') }}">
                <i class="fa-solid fa-circle-question"></i> FAQ </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('frontend.aboutus') }}">
                <i class="fa-solid fa-circle-info"></i> About Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('frontend.contact') }}">
                <i class="fa-solid fa-envelope-circle-check"></i> Contact Us </a>
            </li>
          </ul>
        </div>
      </div>


      <div class="col-md-3 header_buttons topmenu2">
      {{--   <a class="search" onclick="searchboxshow()"><i class="fa-solid fa-magnifying-glass"
            style="color:#666666;cursor: pointer;"></i></a> --}}
        <button class="btn btn-success shadow-none hddownbtn" class="rgb-border-content" type="submit"
          data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="searchboxhidden()">Download App</button>
        {{-- <button class="btn btn-sm btn-danger shadow-none hddownbtn" type="submit">English</button> --}}
      </div>


    </nav>
  </div>




    <!--  App Download Modal Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:99999999">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
          <div class="modal-content appdownloads" style=" background-color: transparent;   border: 0px solid rgba(0,0,0,.2);">



              <div class="col-md-12" >
                <div class="row">
                  <div class="col-md-4 dwnsec">
                    <a class=""  data-bs-dismiss="modal"  >&times;</a>
                    <img src="frontend/img/appdwnimg.png" class="modalimg" alt="">



                  </div>
                  <div class="col-md-8 dwndes">

                    <h4>Download <img src="frontend/img/appseclogo.png"  alt=""> App</h4>
                    <p style="">EPS App is forthcoming with exciting services to make your lifestyle Secure, Simple, and Fast! {{-- <a href="{{ route('frontend.app_details') }}"> More Details</a> --}}</p>

                    <div class="appicon">
                        <a><img src="frontend/img/googleplay.png" class="googleplay" alt=""></a>
                    <a><img src="frontend/img/appstore.png" class="appstore" alt=""></a>
                    </div>

                  </div>

                </div>
              </div>


          </div>
        </div>
      </div>


      <!--  App Download Modal Modal -->
{{-- 	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999" >
		<div class="modal-dialog  appmodal modal-dialog-centered">
			<div class="modal-content">

				<div class="modal-body dwnappmodal">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-11"></div>
							<div class="col-md-1">
                                <button type="button" class="btn-close xpose  newdwnclose"  data-bs-dismiss="modal" ></button>
							</div>
						</div>
					</div>

					<div class="col-md-12 Appsection ">
						<div class="row">
							<h4>Download EPS App</h4>

							<div class="col-md-12 playstore">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-2 ">


                                        <svg width="21" height="26" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.53627 8.42187C1.10879 8.42187 0.745565 8.57801 0.447381 8.89067C0.149197 9.20323 0 9.57817 0 10.0156V16.7347C0 17.1824 0.149144 17.5626 0.447381 17.8751C0.745565 18.1877 1.10858 18.3437 1.53611 18.3437C1.96374 18.3437 2.32414 18.1877 2.61742 17.8751C2.9109 17.5626 3.05754 17.1824 3.05754 16.7347V10.0156C3.05754 9.57801 2.90829 9.20306 2.6101 8.89067C2.31187 8.57818 1.95377 8.42187 1.53627 8.42187ZM3.65443 19.1253C3.65443 19.6044 3.81355 20.0106 4.13169 20.344C4.44988 20.6771 4.83755 20.8437 5.29507 20.8437H6.39879L6.41383 24.3907C6.41383 24.8387 6.56298 25.2186 6.86122 25.5312C7.1594 25.8438 7.51745 26 7.935 26C8.36274 26 8.72555 25.8438 9.02389 25.5312C9.32223 25.2186 9.47127 24.8387 9.47127 24.3907V20.8437H11.5294V24.3907C11.5294 24.8387 11.6784 25.2186 11.9766 25.5312C12.2752 25.8438 12.6381 26 13.0657 26C13.493 26 13.8559 25.8438 14.1541 25.5312C14.4523 25.2186 14.6012 24.8387 14.6012 24.3907V20.8437H15.72C16.1671 20.8437 16.5501 20.6774 16.8682 20.344C17.1864 20.0106 17.3456 19.6044 17.3456 19.1253V8.71872H3.65443V19.1253ZM13.8856 2.39068L14.9443 0.343675C15.014 0.208276 14.9889 0.104128 14.8699 0.0312844C14.7404 -0.0312702 14.6411 -2.0264e-05 14.5717 0.125089L13.4976 2.18753C12.553 1.75003 11.5541 1.53128 10.4999 1.53128C9.44604 1.53128 8.44669 1.75003 7.50204 2.18753L6.4282 0.125144C6.35883 3.44605e-05 6.25926 -0.0312155 6.13002 0.0313391C6.01065 0.104183 5.98594 0.208331 6.05552 0.343729L7.11447 2.39068C6.04048 2.96353 5.18563 3.76306 4.54909 4.7891C3.91275 5.81521 3.59451 6.93769 3.59451 8.15627H17.3908C17.3908 6.93769 17.0726 5.81515 16.4362 4.7891C15.7995 3.76306 14.9499 2.96347 13.8856 2.39068ZM7.76308 5.36715C7.64883 5.487 7.51218 5.54688 7.35305 5.54688C7.19393 5.54688 7.05978 5.48706 6.95028 5.36715C6.84105 5.24746 6.78625 5.10418 6.78625 4.93753C6.78625 4.77083 6.84105 4.62755 6.95028 4.50769C7.05962 4.38784 7.19398 4.32807 7.35305 4.32807C7.51197 4.32807 7.64868 4.38778 7.76308 4.50769C7.87749 4.62755 7.93464 4.77083 7.93464 4.93753C7.93464 5.10423 7.87749 5.24729 7.76308 5.36715ZM14.0499 5.36715C13.9403 5.487 13.806 5.54688 13.6469 5.54688C13.4878 5.54688 13.3514 5.48706 13.237 5.36715C13.1226 5.24746 13.0656 5.10418 13.0656 4.93753C13.0656 4.77083 13.1226 4.62755 13.237 4.50769C13.3514 4.38784 13.4878 4.32807 13.6469 4.32807C13.806 4.32807 13.9403 4.38778 14.0499 4.50769C14.1589 4.62755 14.2139 4.77083 14.2139 4.93753C14.2139 5.10423 14.1591 5.24729 14.0499 5.36715ZM20.5524 8.88279C20.2542 8.57555 19.8913 8.42187 19.4637 8.42187C19.0462 8.42187 18.6883 8.57555 18.3901 8.88279C18.0918 9.19015 17.9425 9.56783 17.9425 10.0156V16.7347C17.9425 17.1824 18.0918 17.5626 18.3901 17.8751C18.6883 18.1877 19.0462 18.3437 19.4637 18.3437C19.8913 18.3437 20.2542 18.1877 20.5524 17.8751C20.851 17.5626 21 17.1824 21 16.7347V10.0156C21 9.56778 20.851 9.19009 20.5524 8.88279Z" fill="#006B4F"/>
                                         </svg>




                                    </div>
									<div class="col-md-4">
										<p>Play Store</p>
									</div>
									<div class="col-md-5"> <a href="{{ route('frontend.apk') }}" class="dwnbutton">Download</a></div>
								</div>
							</div>
							<div class="col-md-12 Appstore">
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-2">

                                        <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.7316 16.9639C17.0711 16.0416 16.741 15.0025 16.741 13.8476C16.741 12.7948 17.0525 11.8303 17.6742 10.9546C18.0092 10.4795 18.5549 9.92997 19.3111 9.30564C18.8134 8.70955 18.3157 8.24372 17.8177 7.90823C16.918 7.30274 15.8985 7 14.7595 7C14.0801 7 13.252 7.1583 12.2759 7.47528C11.3378 7.79203 10.6533 7.95057 10.2228 7.95057C9.89716 7.95057 9.23682 7.81092 8.24136 7.53128C7.23635 7.25174 6.38919 7.11209 5.70004 7.11209C4.0537 7.11209 2.6945 7.78297 1.62251 9.12444C0.540902 10.4847 0 12.2269 0 14.3511C0 16.6057 0.703686 18.9487 2.11065 21.3804C3.53673 23.7933 4.97734 25 6.43224 25C6.92039 25 7.55216 24.8416 8.32736 24.5248C9.1028 24.2176 9.78235 24.0637 10.3663 24.0637C10.9883 24.0637 11.7111 24.2127 12.5342 24.5107C13.4051 24.8086 14.0753 24.9577 14.5443 24.9577C15.7694 24.9577 16.9995 24.0446 18.2341 22.2186C19.038 21.0541 19.6267 19.8895 20 18.7249C19.1481 18.4731 18.3921 17.8862 17.7316 16.9639Z" fill="#006B4F"/>
                                            <path d="M13.482 4.74749C14.1131 4.1165 14.5788 3.42531 14.8794 2.67424C15.1697 1.92306 15.3146 1.24188 15.3146 0.63083C15.3146 0.59089 15.3125 0.540742 15.3071 0.480595C15.3025 0.420501 15.2998 0.370563 15.2998 0.330465C15.2897 0.300365 15.2773 0.24527 15.2624 0.165233C15.2474 0.0851947 15.235 0.0300997 15.2247 0C13.4619 0.410871 12.21 1.152 11.4688 2.22375C10.7178 3.30549 10.327 4.59241 10.2969 6.08477C10.968 6.02462 11.4886 5.93964 11.8593 5.82939C12.4006 5.64906 12.9408 5.28834 13.482 4.74749Z" fill="#006B4F"/>
                                            </svg>


                                    </div>
									<div class="col-md-4">
										<p>App Store</p>
									</div>
									<div class="col-md-5"> <a href="{{route('frontend.ios') }}" class="dwnbutton">Download</a></div>
								</div>
							</div>

                            <a href="{{ route('frontend.app_details') }}" class="abtapp">About App</a>


						</div>
					</div>

				</div>

			</div>
		</div>
	</div> --}}
	<!--  App Download Modal Modal End -->


      <!--  App Download Modal Modal End -->

      <!-- Search Area Design -->
      <div class="searchbox" id="searchdiv">
        <div class="row">
          <div class=" col-md-12 srcimg ">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3"></div>
              <div class="col-md-7"></div>
              <div class="col-md-1">
                <button type="button" onclick="searchboxhidden();" class="btn-close btn-close-white"
                  aria-label="Close"></button>
              </div>
            </div>
          </div>


          <div class="col-md-12 searchform">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <form action="">
                  <div class="input-group">
                    <input type="text" class="form-control " placeholder="Type Words and Hit Enter"
                      aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn  btn-danger " type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>


        </div>
      </div>
      <!-- Search Area Design -->


{{--
      <script>

        const currentLocation = location.href;
        const menuTItem = document.querySelectorAll('ul li a');
        const menuLength = menuTItem.length
        for (let i=0;i<menuLength;i++){
        if(menuTItem[i].href === currentLocation){

        menuTItem[i].className = " nav-link active"

        }
        }

     </script> --}}


