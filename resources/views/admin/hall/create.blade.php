@extends('layouts.admin-master')


@section('title')
Manage States
@endsection 

@section('content')


 
  
<section class="section">
  <div class="section-header">
    <h1>Manage State name</h1>
  </div>
  <div class="section-body">
    <div class="card">

      <div class="card-header">
        
        <h4>Add a New Hall</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.hall')}}" class="btn btn-primary">HallList</a>
        </div>
      </div>
      <!-- card header -->
     
      <!-- card body -->
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
         </ul></div><br/> 
    @endif
      <form  method="post" action="{{route('admin.hall.store')}}" enctype="multipart/form-data">
        
        <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Name:</label>
              <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" id="hall_name" name="hall_name" placeholder="Enter Hall Name"/>
          </div></div>

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">State Name:</label>
              <div class="col-sm-12 col-md-7">
              <select class="form-control" name="state_id">
                @foreach($statedata as $state)
                <option value ="{{$state->id}}">
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
                <option value ="{{$city->id}}">
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
                <option value ="{{$township->id}}">
                  {{$township->township_name}}
                </option>
                @endforeach
              </select>
          </div> </div>

          <div class="form-group row mb-4">
              @csrf
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Phone No:</label>
              <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control" id="phone_no" 
               name="phone_no" placeholder="Enter Phone No"/>
          </div></div>

            

  <div class="form-group row mb-4">
    @csrf
        <label for="open" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Open Time</label>
        <div class="col-sm-12 col-md-7">
          <div class='input-group date' id='example1'>
              <input type='text' id="open_time" name="open_time" class="form-control" />
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
              <input type='text' id="close_time" name="close_time" class="form-control" />
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
        <textarea class="form-control" id="address" name="address" placeholder="Enter Hall Address"></textarea> 
      </div></div>

      <div class="form-group row mb-4">
          @csrf
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="name">Hall Image:</label>
          <div class="col-sm-12 col-md-7">
            <input type="file" name="image"/>
          </div></div>


      <div class="form-group row mb-4">
      @csrf
        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
        </label>
        <div class="col-sm-12 col-md-7">
        <button type="submit" class="btn btn-primary">Save</button>
        <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>
      </div></div>
      </form>
  </div>
</div></div></section>



<script type="application/javascript">
  function clearText(){
    document.getElementById('image').value="";
    document.getElementById('hall_name').value="";
    document.getElementById('phone_no').value="";
    document.getElementById('open_time').value="";
    document.getElementById('close_time').value="";
    document.getElementById('address').value="";

  }
  
</script>

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


</section>
@endsection







 <!-- <div class="container">
  <br><br><br>
  <div class='col-sm-6'>
      <div class="form-group">
        <label for="">Open Time</label>
          <div class='input-group date' id='example1'>
              <input type='text' id="open_time" name="open_time" class="form-control" />
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
      </div>
  </div>
</div> -->



<!-- <div class="form-group row mb-4">
              @csrf
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="open">Open Time</label>
            <div class="col-sm-12 col-md-7">
            <input class="form-control" type="time" id="open_time" name="open_time"/>
          </div></div> -->

          <!-- <div class="form-group row mb-4">
              @csrf
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="close">Close Time</label>
            <div class="col-sm-12 col-md-7">
            <input class="form-control" type="time" id="close_time" name="close_time"/>
          </div></div>-->



           
      
