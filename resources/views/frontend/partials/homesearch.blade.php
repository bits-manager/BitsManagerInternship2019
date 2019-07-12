<style>
#a{
	width: 25%;
}
</style>
<!-- Home Search -->
<div ng-app="myApp" ng-controller="myCtrl">
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start"> 
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
										 <select ng-model="selectedCity"  value="selectedCity"  ng-options="city.id as city.city_name for city in cities" class="form-control" >
										 </select>
									</div>
									
									<div>
										<select class="search_form_select" class="form-control" >
										<option disabled selected>Township</option>
										@foreach($township as $township)
										<option>{{$township->township_name}}</option>
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

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script>

var states = {!! json_encode($state) !!};
var cities = {!! json_encode($city) !!};
var events= {!! json_encode($event) !!};


var app = angular.module('myApp', []);
app.config(function($interpolateProvider){
  $interpolateProvider.startSymbol('<%').endSymbol('%>');
});

app.controller('myCtrl', function($scope, $http) {


$scope.states = states;
$scope.cities = cities;
$scope.events = events;


$scope.selectedState = $scope.states[0].id;
$scope.selectedCity = $scope.cities[0].id;
//$scope.event = $scope.events[0].id;

//console.log($scope.selectedEvent);





$http({
		  method : "GET",
		  url : "/api/v1/get_city?state_id="+$scope.selectedState,
		}).then(function mySuccess(response) {
		   $scope.cities = response.data.data;
		  },function myError(response) {

			$scope.cities = [];

		});


$scope.selectChange = function(){

	$http({
		  method : "GET",
		  url : "/api/v1/get_city?state_id="+$scope.selectedState,
		}).then(function mySuccess(response) {
		   //console.log(response.data.data);
		   $scope.cities = response.data.data;
		   $scope.selectedCity = $scope.cities[0].id;
		  }, function myError(response) {

			$scope.cities = [];

		});
	}
});
</script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                