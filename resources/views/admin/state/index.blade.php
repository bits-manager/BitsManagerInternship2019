@extends('layouts.admin-master')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage States</h1>
  </div>
<<<<<<< HEAD
 <div class="card">
      
=======

  
    <div class="card">

>>>>>>> 739c5cefb4258be9f3928156339b2583f14aa46a
      <div class="card-header">
        <!-- card title -->
        <h4>State List</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.state.create')}}" class="btn btn-primary">Add State <i class="fas fa-plus"></i></a>
        </div>
      </div>
<<<<<<< HEAD

      <div class="card-body">

      <div class="card-body>">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<table class="table table-striped">
    <thead>
        <tr>

         <!--  <td>ID</td> -->
          <td>State Name</td>

          
=======
      <div class="card-body"> 
        @if(session()->get('success'))
          <div class="alert alert-success">
          {{ session()->get('success') }}  
          </div><br />
        @endif
      

        <table class="table table-striped">
        <thead>
        <tr>
>>>>>>> 739c5cefb4258be9f3928156339b2583f14aa46a
          <td>State Name</td>
          <td>Created Time</td>
          <td>Updated Time</td>
          <td colspan="2">Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($states as $state)
        <tr>

            <!-- <td>{{$state->id}}</td> -->
            <td>{{$state->state_name}}</td>

            
            <td>{{$state->state_name}}</td>
            <td>{{$state->created_at}}</td>
            <td>{{$state->updated_at}}</td>
            <td>
              <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$state->id}})" 
              data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              <a href="{{ route('admin.state.edit',$state->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
            </td>
        </tr>
        @endforeach

        </tbody>
        </table>
      </div>
    </div>
 </section>     
      
  <div id="DeleteModal" class="modal fade " role="dialog">
   <div class="modal-dialog ">
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
                 <p class="text-center"><h5>Are you sure want to delete ?</h5></p>
             </div>
             <div class="modal-footer">
                 <center>
                     <input type="hidden" name="event_id" id="event_id">
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
         var url = '{{ route("admin.state.destroy", ":state_id") }}';
         url = url.replace(':state_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('state_id').value = id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
    </script>
@endsection