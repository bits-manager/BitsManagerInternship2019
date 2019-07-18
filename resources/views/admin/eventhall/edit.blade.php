<!-- edit.blade.php -->

@extends('layouts.admin-master')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">


<section class="section">
  <div class="section-header">
    <h1>Manage Hall_Events</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Edit Form</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.eventhall')}}" class="btn btn-primary">HallEventList</a>
        </div>
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

      <form method="Patch" action="{{ route('admin.eventhall.update',['id'=>$edit_hallevents->id])}}">

            <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="hall_id">
                @foreach($halldata as $hall)
                <option value="{{$hall->id}}" {{ $hall->id === $edit_hallevents->hall_id ? 'selected' : '' }} >
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
              <select class="form-control" name="eventType_id">
                @foreach($eventdata as $event)
                <option value="{{$event->id}}" {{ $event->id === $edit_hallevents->eventType_id ? 'selected' : '' }} >
                  {{$event->event_name}}
                </option>
                @endforeach
              </select>
            </div>
          </div> 
          
            

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Description:</label>
              <div class="col-sm-12 col-md-7">
              <textarea class="form-control" id="description" name="description" cols="30" rows="10">{{$edit_hallevents->description}}</textarea>
              </div>
        </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name"></label>
            <div class="col-sm-12 col-md-7">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
      </form>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script> 
    $('#description').summernote({
        placeholder: 'Hello',
        tabsize: 2,
        height: 100
      });
</script>
@endsection

