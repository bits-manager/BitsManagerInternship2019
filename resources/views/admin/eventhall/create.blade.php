@extends('layouts.admin-master') 

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">

   
<section class="section">
  <div class="section-header">
    <h1>Manage Hall_Events</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">

        <!-- card title -->
        <h4>Hall_Event Form</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.eventhall')}}" class="btn btn-primary">HallEventList</a>
        </div>
      </div>
      <!-- card body -->
      <div class="card-body">

      @if(Session::has('toasts'))
      @foreach(Session::get('toasts') as $toast)
      <div class="alert alert-{{ $toast['level'] }}">
      {{ $toast['message'] }}
      </div>
      @endforeach
      @endif

      @if($message = Session::get('info'))
      <div class = "alert alert-info alert-block">
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
     
         <form  method="post" action="{{route('admin.eventhall.store')}}" enctype="multipart/form-data">
          
          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" id="hallname" name="hall_id">
                @foreach($halldata as $hall)
                <option value ="{{$hall->id}}">
                  {{$hall->hall_name}}
                </option>
                @endforeach
              </select>
            </div>
          </div> 
           
           <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Event Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" id="eventname" name="eventType_id">
                @foreach($eventdata as $event)
                <option value ="{{$event->id}}">
                  {{$event->event_name}}
                </option>
                @endforeach
              </select>
              </div>
          </div> 
         <div class="form-group row mb-4">
  @csrf
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Image:</label>
  <div class="col-sm-12 col-md-7">
  <input type="file" name="image"/>
  </div></div>
          
         <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Description:</label>
              <div class="col-sm-12 col-md-7">
              <textarea class="form-control" id="description" name="description"></textarea>
              
              </div>
        </div>


      
        <div class="form-group row mb-4">
           @csrf
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name"></label>
            <div class="col-sm-12 col-md-7">
            <button type="submit" class="btn btn-primary">Save</button>
            <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>
             
            </div>
      </div>
      </form>
  </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script> 
    $('#description').summernote({
        placeholder:'Hello',
        tabsize: 2,
        height: 100
      });
</script>
<script type="application/javascript">
  function clearText(){
    document.getElementById('hallname').value="";
    document.getElementById('eventname').value="";
    $('#description').summernote('code', '');
    
  }
</script>
@endsection

