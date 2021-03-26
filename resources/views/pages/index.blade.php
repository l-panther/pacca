@extends('layouts.app')

@section('main-content')

	<!-- Banner -->
	<div id="home">
		<!-- Banner -->
		<div id="banner">

			<!-- Small image -->
			<div class="w3-row w3-hide-medium w3-hide-large">
				<div class="w3-col s12 w3-grey">
					<img src="images/website/banner/index-small.png" alt="Portrait" class="w3-hide-small">
				</div>
				<div class="w3-col s12">
					<img src="images/website/banner/index-small.png" alt="Portrait">
				</div>
			</div>

			<!-- Large image -->
			<img src="images/website/banner/index-large.png" alt="Portrait" class="w3-hide-small">
		</div> <!-- End banner -->

		<!-- Page background -->
		<div class="main-content spacing-l">
			<div class="w3-container">
				<p>At Pacca Out of School Club we believe gentle nurturing help provide the next generation with the essential  confidence, interpersonal and social skills required to grow to become the leaders of tommorrow.</p>
				<p>We are determined to improve  the environment that the  patrons of the club live in, and provide a safe heathen for all children. Childcare can be an essential service for parents who need to work and need help with the demands of the school run. We provide a caring environment for children while focus on  while.</p>
					
				<p>Our <b>breakfast</b> and <b>after-school</b> club allows you focus on your day. The after-school club currently has activities which include 
				
				@if(count($activities) > 0)
					@foreach ($activities as $activity)
						
						{{$activity->name.","}}	
						 
					@endforeach
				@else
					No activities found
				@endif
				</p>

				<div class="w3-row main-content service">
					<div class="w3-col s12 m6 l6 school">	
						<div class="w3-card" id="breakfast-club">
							
							<dl>
								<dt id="breakfastclub">
									Breakfast Club
								</dt>
								<dd aria-labelledby="schoolclub">
									<img src="images/website/main/breakfast.jpg" alt="Pencils and arts equipment">
								</dd>
								<dd class="w3-light-grey w3-center">Price per child</dd>
								<dd class="w3-center price">£10</dd>
								<dd><i class="fa fa-check"></i>Child drop-off</dd>
								<dd><i class="fa fa-check"></i>Breakfast</dd>
								<dd><i class="fa fa-check"></i>Walk to school</dd>
								<dd><i class="fa fa-check"></i>Fun</dd>
							</dl>
							
							<!-- <button type="button" class="w3-bar w3-center w3-btn">More</button> -->
						</div> <!-- End article 2 -->
					</div>

					<div class="w3-col s12 m6 l6 school">	
						<div class="w3-card" id="school-club">
							
							<dl>
								<dt id="schoolclub">
									After-school Club
								</dt>
								<dd aria-labelledby="schoolclub">
									<img src="images/website/main/school.jpg" alt="Pencils and arts equipment">
								</dd>
								<dd class="w3-light-grey w3-center">Price per child</dd>
								<dd class="w3-center price">£10</dd>
								<dd><i class="fa fa-check"></i>Pick-up</dd>
								<dd><i class="fa fa-check"></i>Dinner</dd>
								<dd><i class="fa fa-check"></i>Activities</dd>
								<dd><i class="fa fa-check"></i>Fun</dd>
							</dl>
							
							<!-- <button type="button" class="w3-bar w3-center w3-btn" data-toggle="modal" data-target="#activityModal">More</button> -->
						</div> <!-- End article 2 -->
					</div>
				</div>
			</div>
		</div> <!-- End home -->


		<!-- Summer -->
		<div id="summer" class="spacing">
			<div class="main-content">
				<section class="container">
					<h2 class="w3-center">Summer Club</h2>

					<!-- Check us out -->
					<p class="w3-padding-bottom">During Easter, Summer break and the numerous half terms, the Pacca team are always ready to welcome back your child. 
					During these periods, your child will be given breakfast, lunch and a warm evening meal to finish the day.</p>

					<p>Our summer club is packed with events to keep your child active and entertained all summer.</p>

					<p class="w3-margin-bottom">We always arrange exciting events packed with fun, enjoyment and laughter. Check out what we do below.</p>

					<div class="w3-animate-bottom" id="events">
						<div id="eventCarousel" class="carousel slide w3-border " data-ride="carousel">
						
							<!-- Wrapper for slides 
							<div class="carousel-inner" id="eventsList">
							</div> -->

							@if(count($events) > 0)
								@foreach ($events as $event)
								
								@if($event->id == 1)  
									<div class='carousel-item active'>
								@else 
									<div class='carousel-item'>
								@endif
										
										<img src="../../images/website/events/{{$event->name}}.png">
										<div class="w3-white w3-center" id="{{$event->name}}">
											<h2>{{ucfirst($event->name)}}
											</h2>
											<dl>
												<dt class="sr-only">{{ucfirst($event->name)}}
												</dt>

												<dd aria-labelledby='price' class='w3-center price'>
													@if($event->price > 0)
														£{{$event->price}}.00
													@else
														Free
													@endif
												</dd>
												<dd class="w3-center">Price per child</dd>
											</dl>
											<ul class="w3-ul w3-margin-top w3-text-white">
												<li>
													<i class="fa fa-check"></i>{{$event->includes}}
												</li>

											</ul>
											

										</div>
										
										<div class="w3-col s12 m7 l7">
											
											
											
										</div>

									</div>
								@endforeach

								<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#eventCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#eventCarousel" data-slide-to="1"></li>
								<li data-target="#eventCarousel" data-slide-to="2"></li>
								<li data-target="#eventCarousel" data-slide-to="3"></li>
								<li data-target="#eventCarousel" data-slide-to="4"></li>
								<li data-target="#eventCarousel" data-slide-to="5"></li>
								<li data-target="#eventCarousel" data-slide-to="6"></li>
							</ol>
										
							
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#eventCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#eventCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							@else
								<p class="w3-center">No activities found</p>
							@endif

						</div>
						<!-- <div class="w3-row-padding" id="eventsList"></div> -->

					</div> <!-- End row -->
					
				</section> 
			</div>
		</div>
		<!-- End summer -->


		 <!-- About -->
		 <div id="about" class="w3-container">
			 <div class="main-content spacing">
				 <h2>The Team</h2>

				<p>Pacca Out of School Club has been in operation for over 30 years, based originally  in Myatts Fields Estate, we  are now located on Akerman Road.</p>
				<p class="w3-margin-top">Whilst the location has moved and times have changed, its mission and values have remained the same: to provide the next generation with a soft nurturing space to become the leaders of tomorrow. </p>
				 
			 <div class="w3-animate-zoom main-content" id="staff">
				<div class="w3-row-padding" id="staffList">
					@if(count($staff) > 0)
						@foreach ($staff as $employee)
							<div class="w3-col s12 m6 l4 staff-containerw3-center">
								<div class="w3-card-4 staff">

									<dl>
										<dt class="sr-only">Staf</dt>
									@if ($employee->staff_fname != "May")
										<dd><img src="images/website/main/male.png" alt="Portrait of male employee" /></dd>
									@else
										<dd><img src="images/website/main/female.png" alt="Portrait of female employee" /></dd>
									@endif
										<dd>{{$employee->staff_fname}}</dd>
										<dd>{{$employee->role}}</dd>
									</dl>
								</div>
							</div>
						@endforeach
					@else
						<p class="w3-center">No staff found</p>
					@endif
				</div>
			</div> <!-- End row -->
		</div>
		</div>
		<!-- End about -->


		<!-- Contact background -->
		<div id="contact">

			<article class="w3-center spacing">
				<h2>Contact us</h2>
				<p>Check out the many ways to get in touch with us.

			<!-- Row -->
			<div class="w3-container w3-row-padding main-content">

				<!-- Article -->
				<div class="w3-container w3-col s12 m12 l6 w3-row-padding details">

					<!-- Phone -->
					<div class="w3-col s12 m12 12 w3-center w3-animate-left">
						<dl> <!-- Contact details-->
							<dt id="phone">
								<div class="w3-badge" title="Call us"><i class="fa fa-phone w3-block"></i></div><br>
								<span>PHONE</span>
							</dt>
							<dd aria-labelledby="phone"><a href="tel:+02071234567">0207 123 4567</a></dd>
							<dd aria-labelledby="phone"><a href="tel:+07956123456">07956 123 456</a></dd>
						</dl>
					</div> <!-- End phone -->

					<!-- Email -->
					<div class="w3-col s12 m12 l12 w3-center w3-animate-left">
							<dl>
								<!-- Email details-->
								<dt id="email">
									<div class="w3-badge"><i class="fa fa-envelope w3-block" title="Email us"></i>
									</div><br><span>EMAIL</span>
								</dt>
								<dd aria-labelledby="email" id="mail"><a href="mailto:andre.thompson25@gmail.com">andre.thompson25@gmail.com</a></dd>
							</dl>
					</div> <!-- End email -->     
				</div> <!-- End article -->

				<!-- Article -->
				<div class="w3-col s12 m12 l6" id="findus">

					<!-- Map container -->
					<div id="map-container">

						<!-- Map -->
						<div id="map-canvas"></div>
						<p id="nogeolocation"></p>
					</div> <!-- End map-->
				</div> <!-- End article -->
			</div> <!-- End row -->
			</article>
		</div> <!-- End contact background -->
	</div> <!-- End contact background -->
@endsection
