@extends('layouts.admin-master')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Manage States</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>State List</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.state.create')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a></div>
      </div>
      <div class="card-body>">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<table class="table table-striped">
    <thead>
        <tr>
          <td>State Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($states as $state)
        <tr>
            <td>{{$state->state_name}}</td>
            <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$state->id}})" 
              data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
              <a href="{{ route('admin.state.edit',$state->id)}}" class="btn btn-primary"><i class='fas fa-edit'></i></a>   
            </td>
        </tr>
        @endforeach
</tbody>
  </table>
</div></div></div>
 <!-- The Modal -->
  <div id="DeleteModal" class="modal fade " role="dialog">
   <div class="modal-dialog ">
     <!-- Modal content-->
     <form  id="deleteForm" method="post">
         <div class="modal-content">
             <!-- Modal Header -->
          <div class="modal-header bg-danger">
          <h5 class="modal-title text-center">DELETE CONFIRMATION</h4>
             
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ? </p>
             </div>
             <!-- Modal footer -->
             <div class="modal-footer">
                 <center>
                     <input type="hidden" name="state_id" id="state_id" >
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Delete</button>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
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