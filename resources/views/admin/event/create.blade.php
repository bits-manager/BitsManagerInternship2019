@extends('layouts.admin-master')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Events</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <h4>Add a New Event</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.event')}}" class="btn btn-primary">EventList</a>
        </div>
      </div>
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
      </div><br/> 
    @endif
      

 
    <form method="post" action="{{route('admin.event.store')}}">

    
  <div class="form-group row mb-4">
    @csrf
 
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label><div class="col-sm-12 col-md-7">
  <input type="text" class="form-control" id="event_name" placeholder="Enter Event Name" name="event_name">
  </div></div>
  
  <div class="form-group row mb-4">
  @csrf
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
  <div class="col-sm-12 col-md-7"><button type="submit" class="btn btn-primary">Save</button>
  <input type="button" value="Cancle" class="btn btn-danger" onclick="clearText()" /> 
</div></dv>

  </div>

  </form>
  </div> 
  </div>
</div>
  <script>
  function clearText() {
  document.getElementById('image').value="";
  document.getElementById('event_name').value="";
   }
  </script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>
</section>
@endsection
