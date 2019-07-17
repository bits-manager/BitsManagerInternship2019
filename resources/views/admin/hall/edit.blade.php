

@extends('layouts.hall-master')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Edit Hall</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Update Hall</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.hall')}}" class="btn btn-primary">HallList</a>
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

        <form method="post" enctype="multipart/form-data" action="{{ route('admin.hall_update.update',['id'=>$edit_halls->id])}}">
          
            <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Name:</label>
              <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" id="hall_name" name="hall_name" value="{{$edit_halls->hall_name}}"/>
          </div></div>

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Phone No:</label>
              <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" id="phone_no" 
               name="phone_no" value="{{$edit_halls->phone_no}}" />
          </div></div>

            

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">State Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="state_id">
                @foreach($statedata as $state)
                <option value="{{$state->id}}" {{$state->id === $edit_halls->state_id ? 'selected':''}}>
                  {{$state->state_name}}
                </option>
                @endforeach
              </select>
          </div></div> 

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">City Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="city_id">
                @foreach($citydata as $city)
                <option value ="{{$city->id}}" {{$city->id === $edit_halls->city_id ? 'selected':''}}>
                  {{$city->city_name}}
                </option>
                @endforeach
              </select>
          </div></div> 

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Township Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="township_id">
                @foreach($townshipdata as $township)
                <option value ="{{$township->id}}" {{$township->id === $edit_halls->township_id?'selected':''}}>
                  {{$township->township_name}}
                </option>
                @endforeach
              </select>
          </div> </div>



          <div class="form-group row mb-4">
          @csrf
        <label for="close" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Open Time</label>
        <div class="col-sm-12 col-md-7">
          <div class='input-group date' id='example1'>
              <input type='text' id="open_time" name="open_time" value="{{$edit_halls->open_time}}" class="form-control" />
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
              </span>
          </div>
      </div>
  </div>


      <div class="form-group row mb-4">
          @csrf
        <label for="close" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Close Time</label>
        <div class="col-sm-12 col-md-7">
          <div class='input-group date' id='example2'>
              <input type='text' id="close_time" name="close_time" value="{{$edit_halls->close_time}}" class="form-control" />
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
              </span>
          </div>
      </div>
  </div>
           
          
          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Address:</label>
              <div class="col-sm-12 col-md-7">
               <textarea class="form-control" id="address" name="address">{{$edit_halls->address}}</textarea> 
             </div></div>

        <div class="form-group row mb-4">
          @csrf
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Image:</label>
          <div class="col-sm-12 col-md-7">
          <input type="file" name="image"/>
          <img src="{{URL::to('/')}}/images/{{$edit_halls->image}}" class="img-thumbnail" width="100"/>
          <input type="hidden" name="hidden_image" value="{{$edit_halls->image}}"/>
        </div></div>

          

          <div class="form-group row mb-4">
              @csrf
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
            <button type="submit" class="btn btn-primary">Update</button>
          </div></div>     
      </form>
  </div>
</div></section>

<script type="application/javascript">
            $(function () {
                $('#example1').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

<script type="application/javascript">
            $(function () {
                $('#example2').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

@endsection
