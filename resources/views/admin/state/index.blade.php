@extends('layouts.admin-master')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Manage States</h1>
  </div>
  

    
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>State List</h4>
      </div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<div class="uper">

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>State Name</td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($states as $state)
        <tr>
            <td>{{$state->id}}</td>
            <td>{{$state->state_name}}</td>
            
            <td><a href="{{ route('admin.state.edit',$state->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
              <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$state->id}})" 
              data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
</div></div>
  <div id="DeleteModal" class="modal fade " role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form  id="deleteForm" method="post">
         <div class="modal-content">
          <div class="modal-header bg-danger">
          <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ? </p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <input type="hidden" name="state_id" id="state_id" >
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
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
  </script></section>
@endsection