@extends('layouts.frontend-master')

@section('content')

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

	.section_title_service{
	font-style: italic;
	text-align: center;
}
</style>

<div class="about">
		<div class="container">
			<div class="row">


				<!-- About Image -->
				<div class="col-lg-6">
  
  					<div id="myCarousel" class="carousel slide" data-ride="carousel">
    					<!-- Indicators -->
    					<ol class="carousel-indicators">
      						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      						<li data-target="#myCarousel" data-slide-to="1"></li>
      						<li data-target="#myCarousel" data-slide-to="2"></li>
    					</ol>

    					<!-- Wrapper for slides -->
    					<div class="carousel-inner">

	      					<div class="item active">
	        					<img src="/frontendassets/images/wedding1.jpg" alt="" style="width:100%;">
	        				</div>

	      					<div class="item">
	        					<img src="/frontendassets/images/wedding4.jpg" alt="" style="width:100%;">
	        				</div>
	    
	      					<div class="item">
	        					<img src="/frontendassets/images/wedding5.jpg" alt="" style="width:100%;">
	        				</div>
  
    					</div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span>
					    </a>
					</div>
					
				</div>

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title  section_title_service" >Service</div>
						
					</div>
				</div>

			</div>
			
		
		</div>
	</div>

@endsection