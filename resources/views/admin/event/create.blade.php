@extends('layouts.admin-master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Event name</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Add Event </h4>
      </div>
  <div class="card-body">

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
         </ul></div><br/> 
    @endif
      

  <form method="post" action="{{ route('admin.event.store') }}">
     @csrf
  

 <div class="form-group row mb-4"><label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label><div class="col-sm-12 col-md-7">
  <input type="text" class="form-control" id="event_name" placeholder="Enter Event Name" name="event_name"></div></div>
<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
  <div class="col-sm-12 col-md-7"><button type="submit" class="btn btn-primary">Save</button>
  <input type="button" value="Cancle" class="btn btn-primary" onclick="clearText()" /> 
</div>
</div>

  </div>
  <div>
  </form>
  </div>
  </div>
  <script>
  function clearText() {
  document.getElementById('event_name').value="";
            // body...
   }
  </script>
@endsection
