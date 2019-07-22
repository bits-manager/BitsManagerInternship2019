@extends('layouts.user-master')

@section('content')

<section class="section">
  <div class="section-header">

    <h1>Manage Events</h1>
  </div>
 <div class="card">
    <div class="card-header">
      <h4>Update Event</h4>
        <div class="card-header-action">
        <a href="{{ route('admin.event')}}" class="btn btn-primary">EventList</a></div></div>
  <div class="section-body">
   <div class="card">
    <div class="card-body">
    

    @if(Session::has('toasts'))
    @foreach(Session::get('toasts') as $toast)
    <div class="alert alert-{{ $toast['level'] }}">
      {{ $toast['message'] }}
    </div>
    @endforeach
    @endif

     @if($message=Session::get('info'))
    <div class="alert alert-info alert-block">
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
    
      <form method="put" action="{{ route('admin.event.update', ['id'=>$edit_event->id]) }}">
 
     <div class="form-group row mb-4">
            @csrf
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Event Name</label>
         <div class="col-sm-12 col-md-7">
         <input type="text" class="form-control" name="event_name" value="{{$edit_event->event_name}}"/>
       </div></div>
       
    

       <div class="form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
         <div class="col-sm-12 col-md-7">
          <button type="submit" class="btn btn-primary">Update Event </button>
        </div>
      </div>
      </form>
  </div>
</div>
</div></div>

</section>
@endsection