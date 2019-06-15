@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   <h1> Manage Event Name</h1>
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
          <div class="form-group">
              @csrf
              <label for="name">Event Name:</label>
              <input type="text" id="event_name" class="form-control" name="event_name"/>
         </div><button type="submit" class="btn btn-primary">Save</button>
               
               <input type="button" value="Cancle" class="btn btn-primary" onclick="clearText()" /> 
              <a href="{{route('admin.event.index')}}" class="btn btn-primary">List </a>
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
