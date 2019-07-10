@extends('layouts.frontend-master')

@section('content')
<style>
	.icon{
		color: #3399FF;
	}
</style>
	
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">


				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="/frontendassets/images/wedding1.jpg" class="rounded" alt="" width="800" height="450"></div>
				</div>

				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title" font-style="italic"><marquee>Hall Name</marquee></div>
						<div class="col-lg-3">
							<div class="about_text">
								<label class="label_style"><i class="fa fa-map-marker icon"></i>  Location		:</label><br>
								<label class="label_style"><i class="fa fa-map-marker icon"></i> State		:</label><br>
								<label class="label_style"><i class="fa fa-map-marker icon"></i> City		:</label><br>
								<label class="label_style"><i class="fa fa-map-marker icon"></i>       Township		:</label><br>
								<label class="label_style"><i class="fa fa-phone icon"></i>       Contact		:</label><br>
								<label class="label_style"><i class="fa fa-clock-o icon"></i> Open Time 		:</label><br>
								<label class="label_style"><i class="fa fa-clock-o icon"></i> Close Time 		:</label>
							</div>
						</div>

						<div class="col-lg-4"></div>
					</div>
				</div>

			</div>
			
		
		</div>
	</div>


	<!-- Event -->
<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Events</div>
				</div>
			</div>
			<div class="row recent_row">
				<div class="col">
					<div class="recent_slider_container">
						<div class="owl-carousel owl-theme recent_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<a href="eventdetail" ><img src="../frontendassets/images/wedding3.jpg" alt="" width="600" height="350"></a>
											<div class="centered">Wedding</div>

										</div>
										
										<div class="recent_item_body">
											
												<div class="recent_item_title text-center"><a href="eventdetail" >View Event Detail</a></div>
												
										</div>
										
										
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<a href="eventdetail"><img src="../frontendassets/images/party1.jpg" alt="" width="600" height="350"></a>
											<div class="centered">Party</div>
										</div>
										<div class="recent_item_body">
											<div class="recent_item_title text-center"><a href="eventdetail" >View Event Detail</a></div>
											
											
										</div>
										
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<a href="eventdetail" ><img src="../frontendassets/images/seminar.jpg" alt="" width="600" height="350"></a>
											<div class="centered">Seminar</div>
										</div>
										<div class="recent_item_body">
											<div class="recent_item_title text-center"><a href="eventdetail" >View Event Detail</a></div>
											
											
										</div>
										
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="recent_item">
									<div class="recent_item_inner">
										<div class="recent_item_image">
											<a href="eventdetail" ><img src="../frontendassets/images/birthday.jpg" alt="" width="600" height="350"></a>
											<div class="centered">Birthday</div>
										</div>
										<div class="recent_item_body">
											<div class="recent_item_title text-center"><a href="eventdetail" >View Event Detail</a></div>
											
										</div>
										
									</div>
								</div>
							</div>

						</div>

						<div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
							<div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
						</div>
					</div>
					<!-- <div class="button recent_button"><a href="#">see more</a></div>
				</div> -->
			</div>
		</div>
	</div>
	
		
@endsection