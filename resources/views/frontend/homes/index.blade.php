

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
					<div class="home_slider_background" style="background-image:url(../frontendassets/images/balloon.jpg)"></div>
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

<div ng-app="myApp" ng-controller="myCtrl">
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="{{route('hall_search')}}" class="search_form d-flex flex-row align-items-start justfy-content-start" method="post">
                				@csrf
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select" name="eventType_id">
											<option >Event</option>
											@foreach($event as $event)
            								<option value="{{$event->id}}">{{$event->event_name}}</option>
            								@endforeach
										</select>
									</div>
									<div>
										<select class="search_form_select" name="state_id">
											<option>State</option>
											@foreach($state as $state)
            								<option value="{{$state->id}}">{{$state->state_name}}</option>
            								@endforeach
										</select>
									</div>
									<div>
										<select class="search_form_select" name="city_id">
											<option>City</option>
											@foreach($city as $city)
            								<option value="{{$city->id}}">{{$city->city_name}}</option>
            								@endforeach
										</select>
									</div>
									<div>
										<select class="search_form_select" name="township_id">>
											<option> Township</option>
											@foreach($township as $township)
            								<option value="{{$township->id}}">{{$township->township_name}}</option>
            								@endforeach
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto">search</button>
							</form>
						</div>
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
			<div class="row recent_row">
				<div class="col">
					<div class="recent_slider_container">
						<div class="owl-carousel owl-theme recent_slider">
						
							<!-- Slide -->
							<div class="owl-item" ng-repeat="x in halls">
								<div class="recent_item">
									<div class="recent_item_inner" >
										<div class="recent_item_image">
											<a href="eventdetail"><img src="<% x.image %>" alt="" width="600" height="350"></a>
											<div class="centered" ><% x.event_name %> </div>

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
					<!-- <div class="button recent_button"><a href="#">see more</a></div>
				</div> -->
			</div>
		</div>
	</div>
</div>
	<!-- Cities -->

	
 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script>
var states={!! json_encode($state) !!};
var cities={!! json_encode($city) !!};
var townships={!! json_encode($township) !!};

var app = angular.module('myApp', []);
app.config(function($interpolateProvider){
  $interpolateProvider.startSymbol('<%').endSymbol('%>');
});

app.controller('myCtrl', function($scope, $http) {

$scope.states= states;
$scope.cities = cities;
$scope.townships = townships;


$http({
          method : "GET",
          url : "/api/v1/get_city?state_id="+$scope.selectedState,
        }).then(function mySuccess(response) {
           $scope.cities = response.data.data;
          }, function myError(response) {

            $scope.cities = [];

        });

  $scope.selectChange = function(){

    $http({
          method : "GET",
          url : "/api/v1/get_city?state_id="+$scope.selectedState,
        }).then(function mySuccess(response) {
           console.log(response.data.data);
           $scope.cities = response.data.data;
           $scope.selectedCity = $scope.cities[0].id;
          }, function myError(response) {

            $scope.cities = [];

        });

  }


$http({
          method : "GET",
          url : "/api/v1/get_township?city_id="+$scope.selectedCity,
        }).then(function mySuccess(response) {
           $scope.townships = response.data.data;
          }, function myError(response) {

            $scope.townships = [];

        });

  $scope.selectChange = function(){

    $http({
          method : "GET",
          url : "/api/v1/get_township?city_id="+$scope.selectedCity,
        }).then(function mySuccess(response) {
           console.log(response.data.data);
           $scope.townships = response.data.data;
           $scope.selectedTownship = $scope.townships[0].id;
          }, function myError(response) {

            $scope.townships = [];

        });

  }

  $http({
          method : "GET",
          url : "/api/v1/get_event_hall?eventType_id=7&state_id=1&city_id=1&township_id=2",
        }).then(function mySuccess(response) {
           $scope.halls = response.data.data;
           console.log("hall Information"+$scope.halls);
          }, function myError(response) {

            $scope.halls = [];

        });

});

</script>
	
@endsection