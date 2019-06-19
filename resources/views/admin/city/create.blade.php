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
        <h4>City Form</h4>
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
      <form  method="post" action="{{route('admin.city.store')}}">
          
          <div class="form-group">
              @csrf
              <label for="name">State Name:</label>
              <select name="state_id">
                @foreach($statedata as $state)
                <option value ="{{$state->id}}">
                  {{$state->state_name}}
                </option>
                @endforeach
              </select>
          </div> 
           
          
          <div class="form-group">
              @csrf
              <label for="name">City Name:</label>
               <input type="text" class="form-control" id="city_name" name="city_name" placeholder="Enter City"/>
          </div>
       
          
         
            <button type="submit" class="btn btn-primary">Save</button>
            <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>
             
        
      </form>
  </div>
</div>
<script>
  function clearText(){
    document.getElementById('city_name').value="";
  }
</script>
@endsection

