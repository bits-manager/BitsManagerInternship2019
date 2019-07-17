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
										 <select ng-model="selectedCity"  value="selectedCity"  ng-change="select()" ng-options="city.id as city.city_name for city in cities" class="form-control" >
										 </select>
									</div>
									
									<div>
										<select ng-model="selectedTownship" name="township_id" value="selectedTownship"  ng-options="township.id as township.township_name for township in townships" class="form-control">
											
										</select>

										
									</div>

								</div>
								<button  id="a" class="search_form_button ml-auto">search</button>
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
//$scope.event = $scope.events[0].id;

//console.log($scope.selectedEvent);


$http({
          method : "GET",
          url : "/api/v1/get_cities?state_id="+$scope.selectedState,
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
          url : "/api/v1/get_cities?state_id="+$scope.selectedState,
        }).then(function mySuccess(response) {
           $scope.cities = response.data.data.city;
           $scope.selectedCity = $scope.cities[0].id;
           
           $scope.townships=response.data.data.township;
           $scope.selectedTownship = $scope.townships[0].id;
          }, function myError(response) {

            $scope.cities = [];
           $scope.townships=[];

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
});
</script>