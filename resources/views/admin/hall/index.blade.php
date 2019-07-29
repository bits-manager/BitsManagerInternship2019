@extends('layouts.admin-master')

@section('content')

<section class="section">
 
  <div class="section-header">
    <h1>Manage Halls</h1>
  </div>

  
    <div class="card">

      <div class="card-header">
        
        <h4>Hall List</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.hall.create')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a>
        </div>
      </div>
      <div class="card-body"> 
        @if(session()->get('success'))
          <div class="alert alert-success">
          {{ session()->get('success') }}  
          </div><br/>
        @endif
        <div class="table-responsive">
        
        <table class="table table-striped ">
        <thead>
        <tr>
          <th>Hall  Image</th>
          <th>Hall Name</th>
          <th>State Name</th>
          <th>City Name</th>
          <th>Township Name</th>
          <th>Phone No</th>
          <th>Open Time</th>
          <th>Close Time</th>
          <th>Address</th>
          <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $hall)
        
        <tr>
            <td><img src="{{URL::to('/')}}/images/{{$hall->hall_image}}" class="img-thumbnail"/></td>
            <td>{{$hall->hall_name}}</td>
            <td>{{$hall->state_name}}</td>
            <td>{{$hall->city_name}}</td>
            <td>{{$hall->township_name}}</td>
            <td>{{$hall->phone_no}}</td>
            <td>{{$hall->open_time}}</td>
            <td>{{$hall->close_time}}</td>
            <td>{{$hall->address}}</td>
            <td>
            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$hall->id}})" data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
            <td><a href="{{ route('admin.hall.edit',$hall->id)}}" class="btn btn-primary"><i class='fas fa-edit'></i></a></td>
        </tr>
        @endforeach
        </tbody>
        </table></div></div></div></section> 
<div id="DeleteModal" class="modal fade " role="dialog">
   <div class="modal-dialog modal-sm">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
              <h6 class="modal-title text-center">DELETE CONFIRMATION</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are you sure want to delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <input type="hidden" name="hall_id" id="hall_id">
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">OK</button>
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                 </center>
             </div>
         </div>
     </form>
      </div>
    </div>

    <script type="application/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("admin.hall.destroy", ":hall_id") }}';
         url = url.replace(':hall_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('hall_id').value = id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
    </script>
    <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>


@endsection