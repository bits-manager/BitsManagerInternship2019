@extends('layouts.admin-master')

@section('content')

<section class="section">
  <div class="section-header">

    <h1>Edit Address list</h1>
  </div>
 <div class="card">
      <div class="card-header">
        <h4>Address List</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.address')}}" class="btn btn-primary">List<i class="fas fa-plus"></i></a></div>
      </div>
  <div class="section-body">
   <div class="card">
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
      </div><br />
    @endif
    <form method="put" action="{{route('admin.address.update',['id'=>$edit_address->id])}}">
       @csrf
     <div class="form-group row mb-4">
            
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
         <div class="col-sm-12 col-md-7">
         <input type="text" class="form-control" name="address" value="{{$edit_address->address}}"/>
       </div>
     </div>


     <div class="form-group row mb-4">
            
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
         <div class="col-sm-12 col-md-7">
         <input type="text" class="form-control" name="phone" value="{{$edit_address->phone}}"/>
       </div>
     </div>

     <div class="form-group row mb-4">
            
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
         <div class="col-sm-12 col-md-7">
         <input type="text" class="form-control" name="email" value="{{$edit_address->email}}"/>
       </div>
     </div>


      <div class="form-group row mb-4">
       <lable class="col-form-label text-md-right col-12 col-md-3 col-lg-3" from="">Status</lable>
         <div class="col-sm-12 col-md-7">
            <input type="checkbox" class="" name="status" value="1" >
        </div> 
      </div> 

       <div class="form-group row mb-4">
         <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
         <div class="col-sm-12 col-md-7">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      </form>
  </div>
</div>
@endsection