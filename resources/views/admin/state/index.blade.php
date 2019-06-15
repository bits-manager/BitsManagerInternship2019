@extends('layouts.admin-master')

@section('title')
State
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>State</h1>
  </div>

  <div class="section-body">
     <div class="card">
	    <!-- card header -->
	    <div class="card-header">
	      <!-- card title -->
	      <h4>Stacked form</h4>
	    </div>
	    <!-- card body -->
	    <div class="card-body">
	        <div class="container">
			  <form action="/action_page.php">
			    <div class="form-group">
			      <label for="email">ID:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label for="pwd">State Name:</label>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
			    </div>
			    <div class="form-group form-check">
			      <label class="form-check-label">
			        <input class="form-check-input" type="checkbox" name="remember"> Remember me
			      </label>
			    </div>
			    <button type="submit" class="btn btn-primary">Submit</button>
			  </form>
			</div>
	    </div>
	    <!-- card footer -->
	    <div class="card-footer">
	    </div>
	</div>
  </div>
</section>
@endsection
