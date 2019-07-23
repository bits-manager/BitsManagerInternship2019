<style>
	#a{
		width: 25%;
	}
</style>

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
					
				</div>

			</div>
		</div>
	</div>
	<!-- Home Search -->
<div ng-app="myApp" ng-controller="myCtrl">
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
							<form class="search_form d-flex flex-row align-items-start justfy-content-start"> 
								@csrf
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										 <select ng-model="event" name="event_id" value="event"  ng-options="event.id as event.event_name for event in events" class="form-control">
										 
										</select>
										
									</div>

									<div>
										<select ng-model="selectedState" name="state_id" value="selectedState" ng-change="selectChange()" ng-options="state.id as state.state_name for state in states" class="form-control" >
										</select>
									</div>

									<div>
										 <select ng-model="selectedCity" name="city_id" value="selectedCity"  ng-change="select()" ng-options="city.id as city.city_name for city in cities" class="form-control" >
										 </select>
									</div>
									
									<div>
										<select ng-model="selectedTownship" name="township_id" value="selectedTownship"  ng-options="township.id as township.township_name for township in townships" class="form-control">
											
										</select>

										
									</div>

								</div>
								<button  id="a" class="search_form_button ml-auto" 
								ng-click="clickChange()"> search </button> 
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- Recent -->
	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find Your Need</div>
				</div>

			</div>
			<div class="row recent_row" >
				<div class="col-sm-4" ng-repeat="x in halls">
					
						
						
							<!-- Slide -->
							<div >

								<div class="recent_item">
									<div class="recent_item_inner" >
										<div class="recent_item_image">
											<a href="eventdetail"><img src="../image
												/<% x.image %>" alt="" width="300" height="350"></a>
											<div class="centered" ><% x.event_name %> </div>

										</div>
										
										<div class="recent_item_body">
												<div class="recent_item_title text-center"><a href="eventdetail?eventType_id=<%x.eventType_id%>">View Event Detail</a></div>
												<div class="recent_item_title text-center">
												<a href="hallabout?hall_id=<%x.hall_id%>" >Hall Information</a>
												</div>
										</div>
										
										
									</div>
								</div>
							</div>

							
							 <!-- <div class="owl-item">
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
							</div> -->
 
						

						<!-- <div class="recent_slider_nav_container d-flex flex-row align-items-start justify-content-start">
							<div class="recent_slider_nav recent_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
							<div class="recent_slider_nav recent_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
						</div> -->
					
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Cities -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script>

var states = {!! json_encode($state) !!};
var cities = {!! json_encode($city) !!};
var events= {!! json_encode($event) !!};
var townships={!! json_encode($township) !!};

var app = angular.module('myApp', []);
app.config(function($interpolateProvider){
  $interpolateProvider.startSymbol('<%').endSymbol('%>');
});

app.controller('myCtrl', function($scope, $http) {


$scope.states = states;
$scope.cities = cities;
$scope.events = events;
$scope.townships=townships;

$scope.selectedState = $scope.states[0].id;
$scope.selectedCity = $scope.cities[0].id;
$scope.selectedTownship = $scope.townships[0].id;
$scope.event=$scope.events[0].id;


	$http({
	          method : "GET",
	          url : "/api/v1/get_all?state_id="+$scope.selectedState,
	        }).then(function mySuccess(response) {
	           $scope.cities = response.data.data.city;
	          $scope.townships=response.data.data.township;
	          }, function myError(response) {
	            $scope.cities = [];
	           $scope.townships=[];

	        });

	$scope.selectChange = function(){

	    $http({
	          method : "GET",
	          url : "/api/v1/get_all?state_id="+$scope.selectedState,
	        }).then(function mySuccess(response) {
	           $scope.cities = response.data.data.city;
	           $scope.selectedCity = $scope.cities[0].id;
	           console.log("$scope.selectedCity");
	           $scope.townships=response.data.data.township;
	           $scope.selectedTownship = $scope.townships[0].id;
	          }, function myError(response) {

	            $scope.cities = [];
	           $scope.townships = [];

	        });

	  }
  
	  $http({
	          method : "GET",
	          url : "/api/v1/get_township?state_id="+$scope.selectedState+"&city_id="+$scope.selectedCity,
	        }).then(function mySuccess(response) {
	           $scope.townships = response.data.data;
	          }, function myError(response) {

	            $scope.townships = [];

	        });

  

	 $scope.select = function(){

	    $http({
	          method : "GET",
	          url : "/api/v1/get_township?state_id="+$scope.selectedState+"&city_id="+$scope.selectedCity,
	          
	        }).then(function mySuccess(response) {
	           $scope.townships = response.data.data;
	           $scope.selectedTownship = $scope.townships[0].id;
	          }, function myError(response) {

	            $scope.townships = [];
	        });
	  }

    $http({
	          method : "GET",
	          url : "/api/v1/get_event_hall?eventType_id="+$scope.event+"&state_id="+$scope.selectedState+"&city_id="+$scope.selectedCity+"&township_id="+$scope.selectedTownship,
	        }).then(function mySuccess(response) {
	           $scope.halls = response.data.data;
	           console.log("hall Information"+$scope.halls);
	          }, function myError(response) {

	            $scope.halls = [];

	        });

	$scope.clickChange = function(){

		$http({
	          method : "GET",
	          url : "/api/v1/get_event_hall?eventType_id="+$scope.event+"&state_id="+$scope.selectedState+"&city_id="+$scope.selectedCity+"&township_id="+$scope.selectedTownship,
	        }).then(function mySuccess(response) {
	           $scope.halls = response.data.data;
	           console.log("hall Information"+$scope.halls);
	          }, function myError(response) {

	            $scope.halls = [];

	        });
	}


});
</script>
	
 
	
@endsection