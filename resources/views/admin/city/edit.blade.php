<!-- edit.blade.php -->

@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit City
  </div>
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

      <form method="Patch" action="{{ route('admin.city.update',['id'=>$edit_states->id])}}">

            <div class="form-group">
              @csrf
              <label for="name">State Name:</label>
              <select name="state_id">
                @foreach($statedata as $state)
                <option value="{{$state->id}}" {{ $state->id === $edit_states->state_id ? 'selected' : '' }} >
                  {{$state->state_name}}
                </option>
                @endforeach
              </select>
          </div> 
          
          <div class="form-group">
             @csrf
              <label for="name">City Name:</label>
              <input type="text" class="form-control" name="city_name" value="{{$edit_states->city_name}}"/>
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Update City</button>
        </div>
      </form>
  </div>
</div>
@endsection

