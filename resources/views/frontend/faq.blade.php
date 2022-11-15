
 @extends('frontend.layout.app')

 @section('title')
FAQ | EPS
 @endsection


 @section('maincontent')



	<!-- // Start Code From Here -->

<!-- page heading  start-->
	<div class="container ">
		<div class="row">
			<div class="col-md-12  front_banner  ">
				<h1>FAQ</h1>
				<h5>Frequently Asked <span>Questions</span> </h5>
				<p><a href="{{ url('/') }}">home</a> / faq</p>
			</div>
		</div>
	</div>
	<!-- page heading  END-->




	<div class="container faqdivision">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div id="faq-links" style="position: sticky;top:10%;">
					<div id="All" class="faq-selected"> <i class="fa-solid fa-circle-chevron-right"></i> ALL</div>
					<div id="general"><i class="fa-solid fa-circle-chevron-right"></i> General</div>
					<div id="Account"><i class="fa-solid fa-circle-chevron-right"></i> Account</div>
					<div id="ftransfer"><i class="fa-solid fa-circle-chevron-right"></i> Transaction</div>
				{{-- 	<div id="features">Corporate</div>
					<div id="mobile">Marchant</div> --}}
				</div>
			</div>
			<div class="col-md-7">
                <div class="faqsearch">
              {{--       <form action="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type your Question"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn  btn-danger " type="button"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form> --}}
                </div>

				<div id="faq-wrapper" class="about-All">

					<!--faq-group-->
					<div class="slide-left">
						<div class="faq">
							<ul class="faq-accordion">

								<li>
									<a href="#">What is EPS?</a>
									<ul class="faq-content">
										<li>
											<div>
												<p>EPS is a Payment System Operator (PSO) licensed by the Bangladesh Bank. EPS provides Digital Transaction solutions for end users. EPS is authorized to provide services for personal/individual usage and for business/merchant/organizational usage.</p>
											</div>
										</li>
									</ul>
								</li>


								<li>
									<a href="#">What are the EPS Services?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>EPS Services include  </p>
                                                <ul style="margin: 0px 0px 10px">
                                                    <li style="list-style: disc">Payment Gateway</li>
                                                    <li style="list-style: disc">Bill Payment (Government & Private)</li>
                                                    <li style="list-style: disc"> Mobile Recharge</li>
                                                </ul>
                                                Multiple account management from a single dashboard, and many more.<br><br>
											</div>
										</li>
									</ul>
								</li>


								<li>
									<a href="#">How can I open an EPS account?</a>
									<ul class="faq-content">
										<li>
											<div>
												<p>If you are an individual who wants to use EPS for personal usage, download the EPS app (click here to download) and create your account using your phone number & NID card.</p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">What are the documents needed to open an EPS account?</a>
									<ul class="faq-content">
										<li>
											<div>
												<p>For a personal account your NID card and phone number are good enough to open an account.
                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Is EPS a free online transaction service?</a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Depending on the Service type, EPS has a few services that are completely FREE to use. Other Services include Service Charges that are very affordable.


                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">Is my transaction safe over online?</a>
									<ul class="faq-content">
										<li>
											<div>
												<p>EPS uses Multiple Layers of Security to protect your data & actions over the internet. EPS adapts the latest FinTech Technologies to make sure that you have a safe & hassle-free environment for any online transaction.


                                                </p>
											</div>
										</li>
									</ul>
								</li>




                                <li>
									<a href="#">How do I contact EPS for any dispute/complaint?</a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can reach our customer support via phone, & email.<br>
                                                    Contact
                                                    Number: 09614-770066 <br>
                                                    E-mail: support@eps.com.bd <br>

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">When someone pays you through EPS, how do you get the money?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p> Money can be received both in Bank A/C and MFS Wallet.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">When someone sends you money on EPS, does it go to your bank account?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Yes. It is instantly transferred to the received bank A/C via EPS network.

                                                </p>
											</div>
										</li>
									</ul>
								</li>

                                <li>
									<a href="#">Does EPS have a monthly fee for transaction?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Apart from the EPS corporate solution, we do not have any monthly transaction charge.

                                                </p>
											</div>
										</li>
									</ul>
								</li>

                                <li>
									<a href="#">How can I download EPS app?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can get it from the play store (Google), App Store (Apple) or via direct repository from EPS website.



                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">How can I recover EPS account password?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can reset your PIN using the EPS app or via contacting EPS support.


                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Do I need to open an account to use EPS services?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Yes! To access all EPS services, users have to open an EPS account.


                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">Who can open an account for EPS?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>End users & businesses.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">Where shall I go to open an EPS account?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can open an account using the EPS mobile app or EPS web application (Merchant).

                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Can I make transactions 24/7 using EPS?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Yes.

                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Is there any charge to opening an EPS account?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>No.

                                                </p>
											</div>
										</li>
									</ul>
								</li>

                                <li>
									<a href="#">How shall I be notified after each transaction?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Via EPS app notification & SMS.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">What happens If I enter the wrong PIN multiple times?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Your EPS account will be locked temporarily & you'll have to contact support to reset your PIN & activate your EPS account.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">What will be the process if the transaction ID is required but confirmation SMS is unavailable?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can check your app history or reach our customer support.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">How long does it take to complete a transaction?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>EPS transactions are Instantaneous. Based on EPS partner system policy and availability, a transaction takes more time.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">How do I keep my account secure?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>DO NOT share your EPS PIN with anyone. EPS support staff will never ask for your PIN under any circumstances.

                                                </p>
											</div>
										</li>
									</ul>
								</li>

                                <li>
									<a href="#">What happens to my EPS account if I change my mobile number or account?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can re-login to your EPS account using the EPS app.

                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Is there any charge If I call EPS helpline number?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Standard call charges will be applied by your mobile operator.
                                                </p>
											</div>
										</li>
									</ul>
								</li>





                                <li>
									<a href="#">How will Eps charge for each transaction?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>EPS service charges will be shown to the user before final confirmation (If any charges are applicable for the service).

                                                </p>
											</div>
										</li>
									</ul>
								</li>




                                <li>
									<a href="#">How do I delete my EPS account?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can delete your EPS account through EPS App. Contact our Support if you need more assistance.
                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">What shall I do if my mobile is lost or stolen?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>In that event, contact EPS support immediately to lock & reset your EPS account.

                                                </p>
											</div>
										</li>
									</ul>
								</li>


                                <li>
									<a href="#">Can I have more than one EPS account?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>You can have multiple banks and MFS in EPS but you can open only one account as you have one identity NID card.

                                                </p>
											</div>
										</li>
									</ul>
								</li>







                                <li>
									<a href="#">Can I get any account transaction statements?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Yes, you can access & download the transaction statement from your mobile app.

                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Are there any hidden charges?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>All service charges are disclosed to the user before transaction event. EPS does not have any hidden charges.

                                                </p>
											</div>
										</li>
									</ul>
								</li>



                                <li>
									<a href="#">Is there any charge for accessing EPS through USSD?

                                    </a>
									<ul class="faq-content">
										<li>
											<div>
												<p>Currently, EPS services are not available through USSD

                                                </p>
											</div>
										</li>
									</ul>
								</li>

							</ul>
						</div>
					</div>
				</div>




                <div class="about-general faq-hide">



					<div class="slide-left">
						<ul class="faq-accordion">

							<li>
								<a href="#">What is EPS?</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>A PSO approved by the Bangladesh Bank to operate as a Payment System Operator. EPS provides Digital Transaction Solution for the end users. EPS is authorized to provide services for personal/individual usage and for business/merchant/organizational usage.</p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">What are the EPS Services? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>EPS Services include  </p>
                                                <ul style="margin: 0px 0px 10px">
                                                    <li style="list-style: disc">Payment Gateway</li>
                                                    <li style="list-style: disc">Bill Payment (Government & Private)</li>
                                                    <li style="list-style: disc"> Mobile Recharge</li>
                                                </ul>
                                                Multiple account management from a single dashboard, and many more.<br><br>

										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">Is EPS a free online transaction service?</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Depending on the Service type, EPS has a few services that are completely FREE to use. Other Services include Service Charges that are very affordable. </p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">How do I contact EPS for any dispute/complaint?</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can reach our customer support via phone, & email.<br>
                                                Contact Number: 09614-770066<br>
                                                E-mail: support@eps.com.bd   </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">When someone pays you through EPS, how do you get the money? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Money can be received both in Bank A/C and MFS Wallet.</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">When someone sends you money on EPS, does it go to your bank account? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Yes. It is instantly transferred to the received bank A/C via EPS network.  </p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">How can I download EPS app?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can get it from the play store (Google), App Store (Apple) or via direct repository from EPS website.   </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Do I need to open an account to use EPS services?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Yes! To access all EPS services, users have to open an EPS account.</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Can I make transactions 24/7 using EPS?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Yes.   </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Is there any charge If I call EPS helpline number?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Standard call charges will be applied by your mobile operator.</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Is there any charge for accessing EPS through USSD?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Currently, EPS services are not available through USSD </p>
										</div>
									</li>
								</ul>
							</li>

						</ul>

					</div>

				</div>

				<div class="about-Account faq-hide">



					<div class="slide-left">
						<ul class="faq-accordion">

							<li>
								<a href="#">How can I open an EPS account?</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>If you are an individual who wants to use EPS for personal usage, download the EPS app (click here to download) and create your account using your phone number & NID card.</p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">What are the documents needed to open an EPS account?</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>For a personal account your NID card and phone number are good enough to open an account. </p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">Does EPS have a monthly fee for transaction? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Apart from the EPS corporate solution, we do not have any monthly transaction charge.</p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">How can I recover EPS account password? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can reset your PIN using the EPS app or via contacting EPS support. </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Who can open an account for EPS?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>End users & businesses.  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Where shall I go to open an EPS account?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can open an account using the EPS mobile app or EPS web application (Merchant).  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Is there any charge to opening an EPS account?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>No  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">What happens If I enter the wrong PIN multiple times?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Your EPS account will be locked temporarily & you'll have to contact support to reset your PIN & activate your EPS account.  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">How do I keep my account secure?    </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>DO NOT share your EPS PIN with anyone. EPS support staff will never ask for your PIN under any circumstances.  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">What happens to my EPS account if I change my mobile number or account?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can re-login to your EPS account using the EPS app.   </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">How do I delete my EPS account?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p> You can delete your EPS account through EPS App. Contact our Support if you need more assistance. </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">What shall I do if my mobile is lost or stolen? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>In that event, contact EPS support immediately to lock & reset your EPS account.  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Can I have more than one EPS account?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can have multiple banks and MFS in EPS but you can open only one account as you have one identity NID card.</p>
										</div>
									</li>
								</ul>
							</li>



						</ul>

					</div>

				</div>


				<div class="about-ftransfer faq-hide">


					<div class="slide-left">
						<ul class="faq-accordion">

							<li>
								<a href="#">How shall I be notified after each transaction? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Via EPS app notification & SMS. </p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">How long does it take to complete a transaction? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>EPS transactions are Instantaneous. Based on EPS partner system policy and availability, a transaction takes more time. </p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">What will be the process if the transaction ID is required but confirmation SMS is unavailable? </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>You can check your app history or reach our customer support. </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">How will Eps  charge for each transaction?  </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>EPS service charges will be shown to the user before final confirmation (If any charges are applicable for the service).  </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Can I get any account transaction statements?   </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Yes, you can access & download the transaction statement from your mobile app.   </p>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<a href="#">Are there any hidden charges?    </a>
								<ul class="faq-content">
									<li>
										<div>
											<p>All service charges are disclosed to the user before transaction event. EPS does not have any hidden charges.   </p>
										</div>
									</li>
								</ul>
							</li>

						</ul>
					</div>

				</div>

				<div class="about-features faq-hide">


					<div class="slide-left">
						<ul class="faq-accordion">

							<li>
								<a href="#">Veggie ipsum</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Bacon ipsum dolor sit amet ham beef ribs pork, sirloin tail meatball
												filet mignon pancetta strip steak. T-bone swine turducken fatback beef
												ribs andouille meatball. Corned beef short ribs ribeye, hamburger
												brisket venison capicola boudin filet mignon drumstick shankle bacon
												beef. Shoulder shank filet mignon, kevin meatball beef ribs short loin
												shankle kielbasa jowl pancetta. Biltong shank tri-tip prosciutto sirloin
												pastrami. Turkey swine pork loin ground round pig chicken kielbasa
												sausage kevin ham hock.</p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">Wine Ipsum</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>ester saccharification mead lambic draft (draught), hand pump cask.
												brewing ale balthazar hops, " bitter becher craft beer keg alpha acid."
												crystal malt racking mouthfeel mash, barrel ale; malt! brewpub; biere de
												garde balthazar acid rest alcohol carbonation. wit beer krug brew mash
												hop back? shelf life, balthazar hand pump.</p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">Woody ipsum</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Alrighty then it's because i'm green isn't it! here she comes to wreck
												the day. alrighty then kinda hot in these rhinos. i just heard about
												evans new position,good luck to you evan backstabber, bastard, i mean
												baxter. your entrance was good, his was better. we're going for a ride
												on the information super highway. we're going for a ride on the
												information super highway. look at that, it's exactly three seconds
												before i honk your nose and pull your underwear over your head. brain
												freeze. we got no food we got no money and our pets heads are falling
												off! haaaaaaarry.</p>
										</div>
									</li>
								</ul>
							</li>

						</ul>
					</div>

				</div>



				<div class="about-mobile faq-hide">


					<div class="slide-left">
						<ul class="faq-accordion">

							<li>
								<a href="#">Bacon ipsum</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Bacon ipsum dolor sit amet ham beef ribs pork, sirloin tail meatball
												filet mignon pancetta strip steak. T-bone swine turducken fatback beef
												ribs andouille meatball. Corned beef short ribs ribeye, hamburger
												brisket venison capicola boudin filet mignon drumstick shankle bacon
												beef. Shoulder shank filet mignon, kevin meatball beef ribs short loin
												shankle kielbasa jowl pancetta. Biltong shank tri-tip prosciutto sirloin
												pastrami. Turkey swine pork loin ground round pig chicken kielbasa
												sausage kevin ham hock.</p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">Beer Ipsum</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>ester saccharification mead lambic draft (draught), hand pump cask.
												brewing ale balthazar hops, " bitter becher craft beer keg alpha acid."
												crystal malt racking mouthfeel mash, barrel ale; malt! brewpub; biere de
												garde balthazar acid rest alcohol carbonation. wit beer krug brew mash
												hop back? shelf life, balthazar hand pump.</p>
										</div>
									</li>
								</ul>
							</li>


							<li>
								<a href="#">Carey ipsum</a>
								<ul class="faq-content">
									<li>
										<div>
											<p>Alrighty then it's because i'm green isn't it! here she comes to wreck
												the day. alrighty then kinda hot in these rhinos. i just heard about
												evans new position,good luck to you evan backstabber, bastard, i mean
												baxter. your entrance was good, his was better. we're going for a ride
												on the information super highway. we're going for a ride on the
												information super highway. look at that, it's exactly three seconds
												before i honk your nose and pull your underwear over your head. brain
												freeze. we got no food we got no money and our pets heads are falling
												off! haaaaaaarry.</p>
										</div>
									</li>
								</ul>
							</li>

						</ul>
					</div>

				</div>

			</div>



			<div class="col-md-1"></div>
		</div>
	</div>


	<div class="container faqquery">
		<div class="row">

			<div class="col-md-12">
				<h3>Still have a question?</h3>
				<p>If you can not find the answers of your questions in our FAQ, you can always  <a
						href="{{ route('frontend.contact') }}">contact us</a> . We will get back to you shortly!</p>
			</div>

		</div>
	</div>










	<!-- // Start Social Icon -->


	@include('frontend.layout.social')

	<!-- // End Social Icon -->


	<!-- Footer  Start -->










@endsection
