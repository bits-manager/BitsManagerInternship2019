@extends('layouts.admin-master')

@section('title')
Manage Townships
@endsection

@section('content')
<section class="section">
   <div class="section-header">
    <h1>Manage Townships</h1>
  </div>
<div class="section-body">
      <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Township form</h4>
      </div>
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
                @if($message = Session::get('info'))
                  <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
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
                  <form method="post" action="{{ route('admin.townships.store') }}">
                     <div class="form-group">
                          <select name="state_id" id="state" class="form-control input-log dynamic" data-dependent="state">
                            <option value="">Select State :</option>
                             @foreach($statedata as $state)
                            <option value="{{$state->id}}">{{$state->state_name}}</option>
                             @endforeach
                         </select>
            
                     </div>
                   <div class="form-group">
                          <select name="cities-id" id="cities" class="form-control input-log dynamic" data-dependent="cities">
                           <option value="">Select City :
                           </option> 
                             @foreach($citydata as $cities)
                            <option value="{{$cities->id}}">{{$cities->city_name}}</option>
                             @endforeach
                         </select>
            
                     </div> 
                     <div class="form-group">
                         @csrf
                         <label for="name">Township Name:</label>
                      <input type="text" class="form-control" name="township_name"/>
                     </div>
                     
                     <button type="submit" class="btn btn-primary">Save</button>
                       <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>
             
                  </form>
             </div>
          <!-- card footer -->
      <div class="card-footer">
      </div>
  </div>
 </div>
</section>
<script>
  function clearText(){
    document.getElementById('city_name').value="";
  }
</script>
@endsection