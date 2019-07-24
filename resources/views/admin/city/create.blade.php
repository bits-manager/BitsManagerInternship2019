@extends('layouts.admin-master')

@section('title')
Manage Users
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Cities</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">

        <!-- card title -->

        <h4>Add a New City</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.city')}}" class="btn btn-primary">CityList</a>
        </div>

      </div>
      
      <!-- card body -->
     

    @if(Session::has('toasts'))
  @foreach(Session::get('toasts') as $toast)
    <div class="alert alert-{{ $toast['level'] }}">
      {{ $toast['message'] }}
    </div>
  @endforeach
@endif

    @if($message = Session::get('info'))
      <div class = "alert alert-info alert-block">
      <strong>{{$message}}</strong>
      </div>
    @endif  

@if($message = Session::get('error'))
      <div class = "alert alert-danger alert-block">
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
      <form  method="post" action="{{route('admin.city.store')}}">
           <div class="card-body">
          <div class="form-group row mb-4">
              @csrf
              <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">State Name:</label>
              <div class="col-sm-12 col-md-7">
              <select name="state_id" class="form-control">
                @foreach($statedata as $state)
                <option value ="{{$state->id}}">
                  {{$state->state_name}}
                </option>
                @endforeach
              </select>
          </div> 
           </div>
          
          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">City Name:</label>
              <div class ="col-sm-12 col-md-7">
               <textarea class="form-control" rows="5" id="city_name" name="city_name" placeholder="Enter City"/></textarea>
             </div>
          </div>
       
          
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name"></label>
            <div class ="col-sm-12 col-md-3">

            <button type="submit" class="btn btn-primary">Save</button>
            <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>
         </div>
          </div> 
        </form>
  </div>
</div></div></div>
<script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
<script>
  function clearText(){
    document.getElementById('city_name').value="";
  }
</script>

@endsection

