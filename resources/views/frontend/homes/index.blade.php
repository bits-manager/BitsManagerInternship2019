<style>

	.container {
  position: relative;
  text-align: center;
  color: white;
	}
 </style>

@extends('layouts.frontend-master')

@section('content')
<!-- Header -->
 <header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="header_content d-flex flex-row align-items-center justify-content-start">

						 <div>
							<a href="#"><img src="../frontendassets/images/hallmyanmar.png" alt="" style="width: 200px"></a>

						</div> 
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="homes">{{trans('sentence.home')}}</a>
								</li>
								<li><a href="about">{{trans('sentence.about')}}</a></li>


									<li><a href="contact">{{trans('sentence.contact')}}</a></li>
                                  
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{trans('sentence.language')}}<span class="caret"></span>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item has-icon text-primary"  href="lang/en"><img src="{{asset('assets/img/us.png')}}" width="30px" height="20x"> English</a>
                                
                                 <a class="dropdown-item has-icon text-primary"  href="lang/my"><img src="{{asset('assets/img/my.png')}}" width="30px" height="20x"> Myanmar</a>
                                
                            </div>
                        </li>
                  
								
								<li class="upper-links dropdown show-on-hover"><a class="links dropdown-toggle" 
									data-toggle="dropdown" href="#"> {{trans('sentence.account')}}</a>
								  <ul class="dropdown-menu" role="menu" id="ul">

								  	@if(Auth::check())
								  	
                                    <li>Hi, {{ Auth::user()->name }}</li>
                                        <li><a href="{{route('admin.dashboard')}}" class="dropdown-item has-icon text-primary" >
                                           Dashboard</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"></i> Logout
                                        </a></li>
                                    @else
                                        <li ><a href="{{route('admin.dashboard')}}" style="color: #000"> Login</a></li>
                                    @endif 
          						  </ul> 
								</li>
							</ul>
							
						</nav>
						
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
 </header>

<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(../frontendassets/images/mainhall.jpg)"></div>
					
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

							<form class="search_form d-flex flex-row align-items-start justfy-content-start"> 
								@csrf
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										 <select ng-model="event" name="event_id" value="event"  ng-options="event.id as event.event_name for event in events" class="search_form_select">
										 
										</select>
										
									</div>

									<div>
										<select ng-model="selectedState" name="state_id" value="selectedState" ng-change="selectChange()" ng-options="state.id as state.state_name for state in states" class="search_form_select" >
										</select>
									</div>

									<div>
										 <select ng-model="selectedCity" name="city_id" value="selectedCity"  ng-change="select()" ng-options="city.id as city.city_name for city in cities" class="search_form_select" >
										 </select>
									</div>
									
									<div>
										<select ng-model="selectedTownship" name="township_id" value="selectedTownship"  ng-options="township.id as township.township_name for township in townships" class="search_form_select">
											
										</select>

										
									</div>

								</div>
								<button class="search_form_button ml-auto" 
								ng-click="clickChange()"> search </button> 
								
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
			
			<div ng-if="halls.length != 0">
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
												<a href="eventdetail?id=<%x.id%>"><img src="../images
													/<% x.image %>" alt="" width="" height="350"></a>

											</div>
											
											<div class="recent_item_body">
												<div class="item_title text-center">
													<a href="hallabout?hall_id=<%x.hall_id%>"><% x.hall_name %></a>
													</div>
													<div class="text-center" style="color: #515A5A;font-weight: 600;font-style: italic;"><% x.event_name %></div>
													<div class="item_title text-center"><a href="eventdetail?id=<%x.id%>">View Detail</a></div>
													
											</div>
											
											
										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
			<div ng-if="halls.length == 0">
				<div class="section_title animated shake">Sorry!<br><br> There is no halls.</div>
			</div>
		</div>
	</div>


<!-- Cities -->

	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Popular halls in these cities</div>
					<div class="section_subtitle">Search your dream hall</div>
				</div>
			</div>
		</div>
	  
	  <div class="row cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
         @foreach($popularhalls as $popularhalls)
			<!-- City -->


			<div class="city">
				<img src="{{URL::to('/')}}/images/{{$popularhalls->hall_image}}" style="width:450px;height: 300px;">
				<div class="city_overlay">
					<a class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title">{{$popularhalls->hall_name}}</div>
						<div class="city_subtitle">{{$popularhalls->address}}</div>
					</a>	
				</div>
			</div>

		@endforeach
	   </div>
	</div>
 </div>

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