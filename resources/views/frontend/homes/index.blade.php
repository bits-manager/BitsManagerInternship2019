

@extends('layouts.frontend-master')

@section('content')
<style>
.container {
  position: relative;
  text-align: center;
  color: white;
}

</style>
<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(../frontendassets/images/hallshome.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- Home Search -->

	 @include('frontend.partials.homesearch')

	<!-- Recent -->

	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find Your Need</div>
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
												<div class="recent_item_title text-center">
												<a href="hallabout" >Hall Information</a>
											</div>
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
											<div class="recent_item_title text-center">
											<a href="hallabout" >Hall Information</a></div>
											
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
											<div class="recent_item_title text-center">
											<a href="hallabout" >Hall Information</a></div>
											
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
											<div class="recent_item_title text-center">
											<a href="hallabout" >Hall Information</a></div>
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
					<div class="button recent_button"><a href="#">see more</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cities -->

	<!-- <div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find properties in these cities</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

			
			<div class="city">
				<img src="../frontendassets/images/city_1.jpg" alt="https://unsplash.com/@dnevozhai">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

		
			<div class="city">
				<img src="../frontendassets/images/city_2.jpg" alt="https://unsplash.com/@lachlanjdempsey">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="../frontendassets/images/city_3.jpg" alt="https://unsplash.com/@hellolightbulb">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="../frontendassets/images/city_4.jpg" alt="https://unsplash.com/@justinbissonbeck">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="../frontendassets/images/city_5.jpg" alt="https://unsplash.com/@claudiotrigueros">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="../frontendassets/images/city_6.jpg" alt="https://unsplash.com/@andersjilden">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

		
			<div class="city">
				<img src="../frontendassets/images/city_7.jpg" alt="https://unsplash.com/@sawyerbengtson">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>

			
			<div class="city">
				<img src="../frontendassets/images/city_8.jpg" alt="https://unsplash.com/@mathewwaters">
				<div class="city_overlay">
					<a href="#" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">Ibiza Town</div>
						<div class="city_subtitle">Rentals from $450/month</div>
					</a>	
				</div>
			</div>
		</div>
	</div> -->
 

	
@endsection