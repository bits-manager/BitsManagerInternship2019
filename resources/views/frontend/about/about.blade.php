@extends('layouts.frontend-master')

@section('content')

<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/frontendassets/images/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">About</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="homes">Home</a></li>
									<li>About us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	 @include('frontend.partials.homesearch')
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title">A few words about us</div>
						<div class="section_subtitle">Search your dream home</div>
						<div class="about_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Donec in tempus leo. Aenean ultricies mauris sed quam lacinia lobortis. Cras ut vestibulum enim, in gravida nulla. Curabitur ornare nisl at sagittis cursus. Sed mattis, eros non vulputate luctus, erat dui dapibus augue, eu fringilla tortor ante id mi. Sed a enim libero. Vestibulum pharetra aliquam convallis. </p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="/frontendassets/images/abouthall.jpg" alt=""></div>
				</div>
			</div>
			<div class="row milestones_row">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="/frontendassets/images/milestones_1.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="651">0</div>
							<div class="milestone_text">Properties Sold</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="/frontendassets/images/milestones_2.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="1256">0</div>
							<div class="milestone_text">Happy Clients</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="/frontendassets/images/milestones_3.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="124">0</div>
							<div class="milestone_text">Buildings Sold</div>
						</div>
						
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="/frontendassets/images/milestones_4.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="25">0</div>
							<div class="milestone_text">Awards Won</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Realtors -->

	<div class="realtors">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">The Realtors</div>
					<div class="section_subtitle">Search your dream home</div>
				</div>
			</div>
			<div class="row realtors_row">
				
				<!-- Realtor -->
				<div class="col-lg-2 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/hninwai.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Hnin Wai Wai</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-2 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/htayhtay.jpeg" alt=""  width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Htay Htay Aung</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/waimi.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Wai Mi Aung</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
                 <!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/khaing.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Khaing Zin Tun</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
				<!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/hmn.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Htet Myat Noe</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
				<!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/hninthu.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Hnin Thu</div>
								<div class="realtor_subtitle">Senior Realtor</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection