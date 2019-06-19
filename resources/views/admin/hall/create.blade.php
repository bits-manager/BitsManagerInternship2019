@extends('layouts.admin-master')

@section('title')
Manage Users
@endsection
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Halls</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">

        <!-- card title -->
        <h4>Add a New Hall</h4>
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
      <div class = "alert alert-info alert-block">
      <button type = "button" class="close" data-dismiss = "alert">x</button>
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
      <form  method="post" action="{{route('admin.hall.store')}}">
        <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Name:</label>
              <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" id="hall_name" name="hall_name" placeholder="Enter Hall Name"/>
          </div></div>

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Phone No:</label>
              <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" id="phone_no" 
               name="phone_no" placeholder="Enter Phone No"/>
          </div></div>

            <div class="form-group row mb-4">
              @csrf
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="open">Open Time</label>
            <div class="col-sm-12 col-md-7">
            <input class="form-control" type="time" id="open_time" name="open_time" >
          </div></div>

          <div class="form-group row mb-4">
              @csrf
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="close">Close Time</label>
            <div class="col-sm-12 col-md-7">
            <input class="form-control" type="time" id="close_time" name="close_time">
          </div></div> 

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">State Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="state_id">
                @foreach($statedata as $state)
                <option value ="{{$state->id}}">
                  {{$state->state_name}}
                </option>
                @endforeach
              </select>
          </div></div>

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">City Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="city_id">
                @foreach($citydata as $city)
                <option value ="{{$city->id}}">
                  {{$city->city_name}}
                </option>
                @endforeach
              </select>
          </div></div> 

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Township Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="township_id">
                @foreach($townshipdata as $township)
                <option value ="{{$township->id}}">
                  {{$township->township_name}}
                </option>
                @endforeach
              </select>
          </div> </div>
           
          
          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Address:</label>
              <div class="col-sm-12 col-md-7">
               <textarea class="form-control" id="address" name="address" placeholder="Enter Hall Address"/></textarea> 
             </div></div>
             
          <div class="form-group row mb-4">
              @csrf
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
            <button type="submit" class="btn btn-primary">Save</button>
            <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/></div></div>
             
        
      </form>
  </div>
</div>
<script>
  function clearText(){
    document.getElementById('hall_name').value="";
    document.getElementById('phone_no').value="";
    document.getElementById('open_time').value="";
    document.getElementById('close_time').value="";
    document.getElementById('address').value="";

  } 
</script>
@endsection

