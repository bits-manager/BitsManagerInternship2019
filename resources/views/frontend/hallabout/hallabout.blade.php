@extends('layouts.frontend-master')

@section('content')
<style>
.icon{
	color: #E74C3C;
}

* {
  box-sizing: border-box;
}

img{

	width: 100%;
	height: 100%;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  color: #17202A;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}


</style>
	
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">


				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="/frontendassets/images/wedding1.jpg" class="rounded" alt="" width="700" height="450"></div>
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

	<div class="main">

		<h2>Events</h2>
		<p>Resize the browser window to see the responsive effect.</p>

		<!-- Portfolio Gallery Grid -->
		<div class="row">
  			<div class="column">
    			<div class="content">
      			<a href="eventdetail"><img src="/frontendassets/images/wedding1.jpg" alt=""></a>
      			<p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    			</div>
			</div>
  			<div class="column">
    			<div class="content">
    			<a href="eventdetail"><img src="/frontendassets/images/birthday.jpg" alt=""></a>
      			
      			<p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    			</div>
  			</div>
  			<div class="column">
				<div class="content">
				<a href="eventdetail"><img src="/frontendassets/images/party.jpg" alt=""></a>
      			
      			<p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    			</div>
  			</div>
  			<div class="column">
				<div class="content">
				<a href="eventdetail"><img src="/frontendassets/images/party.jpg" alt=""></a>
      			
      			<p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    			</div>
  			</div>
  			
		<!-- END GRID -->
		</div>

	<!-- END MAIN -->
	</div>
		
@endsection