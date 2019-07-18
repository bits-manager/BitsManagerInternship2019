<!-- edit.blade.php -->

@extends('layouts.admin-master')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage City Name</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Edit Form</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.city')}}" class="btn btn-primary">List</a></div>
      </div>
     
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

      <form method="Patch" action="{{ route('admin.city.update',['id'=>$edit_states->id])}}">

           <div class="card-body">
          <div class="form-group row mb-4">
              @csrf
              <label class = "col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">State Name:</label>
               <div class="col-sm-12 col-md-7">
              <select name="state_id" class="form-control">
                @foreach($statedata as $state)
                <option value="{{$state->id}}" {{ $state->id === $edit_states->state_id ? 'selected' : '' }} >
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
              <input type="text" class="form-control" name="city_name" value="{{$edit_states->city_name}}"/>
          </div>
        </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name"></label>
              <div class ="col-sm-12 col-md-7">
              <button type="submit" class="btn btn-primary">Update City</button>
        </div>
      </div>
      </form>
  </div>
</div>
@endsection

