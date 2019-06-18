@extends('layouts.admin-master')

@section('content')

<section class="section">
  <div class="section-header">
<<<<<<< HEAD
    <h1>Edit Event list</h1>
  </div>
 <div class="card">
      <div class="card-header">
        <h4>Event List</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.event')}}" class="btn btn-primary">List<i class="fas fa-plus"></i></a></div>
      </div>
    <div class="card-body">
=======
    <h1>Manage Event Name</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Edit Event</h4>
      </div>
 
  <div class="card-body">
    
>>>>>>> 739c5cefb4258be9f3928156339b2583f14aa46a
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