@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="section-body">
     <div class="card">
	    <!-- card header -->
	    <div class="card-header">
	      <!-- card title -->
	      <h4>Viewers</h4>
	    </div>
	    <!-- card body -->
	    <div class="card-body">
	        
	    </div>
	    <!-- card footer -->
	    <div class="card-footer">
	    </div>
	</div>
  </div>
</section>
<script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>

@endsection
