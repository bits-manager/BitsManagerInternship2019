 @extends('layouts.admin-master')

@section('title')
Manage Townships
@endsection

@section('content')
<div ng-app="myApp" ng-controller="myCtrl">
<section class="section">
   <div class="section-header">
    <h1>Manage Townships</h1>
  </div>
<div class="section-body">
      <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Township form</h4>
      </div>
      <!-- card body -->
            <div class="card-body"> 

                 @if(Session::has('toasts'))
                   @foreach(Session::get('toasts') as $toast)
                  <div class="alert alert-{{ $toast['level'] }}">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    {{ $toast['message'] }}
                  </div>
                  @endforeach
                 @endif
                @if($message = Session::get('info'))
                  <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{$message}}</strong>
                  </div>
                @endif  


                @if ($errors->any())
                 <div class="alert alert-danger">
                   <ul>
                        @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                   </ul>
                 </div><br />
               @endif
                  <form method="post" action="{{ route('admin.townships.store') }}">
                     <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">State Name</label>
                      <div class="col-sm-12 col-md-7">
                    <select ng-model="selectedState" name="state_id" value="selectedState" ng-change="selectChange()" ng-options="state.id as state.state_name for state in states" class="form-control">
                    </select></div>


                    </select>
                      </div>

                     </div>
                   <div class="form-group row mb-4">

                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">City Name</label>
                      <div class="col-sm-12 col-md-7">
                        <select ng-model="selectedCity" name="city_id" value="selectedCity"  ng-options="city.id as city.city_name for city in cities" class="form-control" >
                    </select>
                      </div>
                   </div> 
                     <div class="form-group row mb-4">
                         @csrf
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Township Name:</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" id="township_name" placeholder="Enter Township Name" name="township_name">
                      </div>
                    </div>

                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                     <div class="col-sm-12 col-md-7">
                     <button type="submit" class="btn btn-primary">Save</button>
                       <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>
                     </div>
                 </div>
                  </form>
             </div>
          <!-- card footer -->
      <div class="card-footer">
      </div>
  </div>
 </div>
</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script>
var states={!! json_encode($statedata) !!};
var cities={!! json_encode($citydata) !!};

var app = angular.module('myApp', []);
app.config(function($interpolateProvider){
  $interpolateProvider.startSymbol('<%').endSymbol('%>');
});

app.controller('myCtrl', function($scope, $http) {

$scope.states= states;
$scope.cities = cities;
$scope.selectedState = $scope.states[0].id;
$scope.selectedCity = $scope.cities[0].id;

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


});

</script>
@endsection