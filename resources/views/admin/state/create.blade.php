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
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>State Form</h4>
      </div>
  <div class="card-body">
    <h1>State Form</h1>
  </div>
  <div class="section-body">

  	<div class="card">
	    <!-- card header -->
	    <div class="card-header">

	      <!-- card title -->
	      <h4>Add New State</h4>
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
      

  <form method="post" action="{{route('admin.state.store')}}">
          <div class="form-group">
            @csrf

            <label for="name">State Name:</label>
            <input type="text" class="form-control" id="state_name" placeholder="Enter State Name" name="state_name">
          </div>
          
          <button  type="submit"  class="btn btn-primary">Save</button>
          <input type="button" value="Cancle" class="btn btn-primary" onclick="clearText()"/>
          

        </form>
      </div>
      </div>
      <!-- card footer -->
      <div class="card-footer">
      </div>
  </div>
      <!-- <users-component></users-component> -->
			      <label for="name">State Name:</label>
			      <input type="text" class="form-control" id="state_name" placeholder="Enter State Name" name="state_name">
			    </div>
			    
			    <button  type="submit"  class="btn btn-primary">Save</button>

          <input type="button" value="Cancel" class="btn btn-primary" onclick="clearText()"/>


			  </form>
			</div>
	    </div>
	    <!-- card footer -->
	    <div class="card-footer">
	    </div>
	</div>

  </div>
  <script>
  function clearText(){
    document.getElementById('state_name').value="";

  }</script>


</section>
@endsection
