@extends('layouts.admin-master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Event Form</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->

        <h4>Add Event </h4>
<<<<<<< HEAD
        <h4>Add New Event</h4>

=======

        <h4>Add New Event</h4>

      </div>
>>>>>>> 7a33e9893be932a9ad0c36c686fa243909a27270
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
      </div><br/> 
    @endif
      

  <form method="post" action="{{ route('admin.event.store') }}">

  <div class="form-group">
  @csrf
  <label for="name">Event Name:</label>
  <input type="text" class="form-control" id="event_name" placeholder="Enter Event Name" name="event_name">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()" /> 
  
  </div>

  </form>
  </div> 
  </div>
</div>
  <script>
  function clearText() {
  document.getElementById('event_name').value="";
   }
  </script>
</section>
@endsection