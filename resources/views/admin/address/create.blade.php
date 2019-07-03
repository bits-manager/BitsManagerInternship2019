@extends('layouts.admin-master')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Address Form</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <h4>Add New Address</h4>

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
         </ul>
      </div><br/> 
    @endif
      

  <form method="post" action="{{ route('admin.address.store') }}">
     @csrf

 <div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
  <div class="col-sm-12 col-md-7">
  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
</div></div>

<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phnoe</label>
  <div class="col-sm-12 col-md-7">
  <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
</div></div>

<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
  <div class="col-sm-12 col-md-7">
  <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
</div></div>

<div class="form-group row mb-4">
  <lable class="col-form-label text-md-right col-12 col-md-3 col-lg-3" from="">Status</lable>
  <div class="col-sm-12 col-md-7">
  <input type="checkbox" name="status" value="1" onclick="checkOnly(this)">
 </div> 
</div>  


<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
  <div class="col-sm-12 col-md-7"><button type="submit" class="btn btn-primary">Save</button>
  <input type="button" value="Cancle" class="btn btn-primary" onclick="clearText()" /> 
</div>
</div>

  </div>

  </form>
  </div> 
  </div>
</div>
  <script>
  function clearText() {
  document.getElementById('address').value="";
  document.getElementById('phone').value="";
  document.getElementById('email').value="";
  
   }
  </script>
</section>
@endsection
