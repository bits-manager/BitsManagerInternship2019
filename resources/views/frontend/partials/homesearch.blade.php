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
						<div class="home_search_content">
							<form action="{{route('hall_search')}}" class="search_form d-flex flex-row align-items-start justfy-content-start" method="post">
                @csrf
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">

									<div id="a">
									
										<select class="search_form_select" name="eventType_id">
											<option >Event</option>
											@foreach($event as $event)
            								<option value="{{$event->id}}">{{$event->event_name}}</option>
            								@endforeach
										</select>
									</div>
									<div id="a">
										<select class="search_form_select" name="state_id">
											<option>State</option>
											@foreach($state as $state)
            								<option value="{{$state->id}}">{{$state->state_name}}</option>
            								@endforeach
										</select>
									</div>
									<div id="a">
										<select class="search_form_select" name="city_id">
											<option>City</option>
											@foreach($city as $city)
            								<option value="{{$city->id}}">{{$city->city_name}}</option>
            								@endforeach
										</select>
									</div>
									<div id="a">
										<select class="search_form_select" name="township_id">>
											<option> Township</option>
											@foreach($township as $township)
            								<option value="{{$township->id}}">{{$township->township_name}}</option>
            								@endforeach
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
$scope.selectedState = $scope.states[0].id;
$scope.selectedCity = $scope.cities[0].id;
$scope.selectedTownship = $scope.townships[0].id;

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
          url : "/api/v1/get_event_hall?eventType_id=2&state_id=1&city_id=1&township_id=2",
        }).then(function mySuccess(response) {
           $scope.halls = response.data.data;
          }, function myError(response) {

            $scope.townships = [];

        });

});

</script>