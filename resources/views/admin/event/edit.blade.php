@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit event
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

     @if($message=Session::get('info'))
    <div class="alert alert-info alert-block">
    <button type ="button" class="close" data-dismiss="alert">x</button>
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
    <form method="put" action="{{route('admin.event.update',['id'=>$edit_event->id])}}">
          <div class="form-group">
              @csrf
              <label for="name"> Event Name:</label>
              <input type="text" class="form-control" name="event_name" value="{{$edit_event->event_name}}"/>
          </div>
         
          <button type="submit" class="btn btn-primary">Update Event Name</button>
      </form>
  </div>
</div>
@endsection