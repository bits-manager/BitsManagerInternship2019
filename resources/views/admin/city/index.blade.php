<!-- index.blade.php -->

@extends('layouts.admin-master')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Cities</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>City List</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.city.create')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a></div>
      </div>
<div class="card-body">
  @if($message = Session::get('info'))
    <div class = "alert alert-info alert-block">
      <button type = "button" class="close" data-dismiss = "alert">x</button>
      <strong>{{$message}}</strong>
      </div>
      @endif  

       @if(Session::has('toasts'))
  @foreach(Session::get('toasts') as $toast)
    <div class="alert alert-{{ $toast['level'] }}">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

      {{ $toast['message'] }}
    </div>
  @endforeach
@endif 
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped table-bordered" >
    <thead>
        <tr>
          
          <td>State Name</td>
          <td>City Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
       @foreach($data as $city)
        
        <tr>
            <td>{{$city->state_name}}</td>
            <td>{{$city->city_name}}</td>

            <td><div class="btn-group"><div><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$city->id}})" 
              data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> </a></div><div>
              <a href="{{ route('admin.city.edit',$city->id)}}" class="btn btn-primary"><i class='fas fa-edit'></i></a>  
            </td></div></div>
</tr>
@endforeach
            
        
    </tbody>
  </table></section>


<div id="DeleteModal" class="modal fade " role="dialog">
   <div class="modal-dialog">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
              <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are you sure want to delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <input type="hidden" name="city_id" id="city_id">
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">OK</button>
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
 </div>


   <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("admin.city.destroy",":city_id") }}';
         url = url.replace(':city_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('city_id').vaule =id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>

@endsection