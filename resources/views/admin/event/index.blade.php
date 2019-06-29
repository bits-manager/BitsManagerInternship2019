@extends('layouts.admin-master')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Manage Event</h1>
  </div>
<div class="card">
      <!-- card header -->
      <div class="card-header">
        <h4>Event List</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.event.create')}}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
       </div>      
     </div>
 
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<table class="table table-striped">
    <thead>
        <tr>

          <!-- <td>ID</td> -->
          <td><p class="text-dark">Event Name</p></td>
          

          <td colspan="2"><p class="text-dark">Action</p></td>

        </tr>
    </thead>
    <tbody>
        @foreach($event as $event)

            <td>{{$event->event_name}}</td>
            <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$event->id}})" 
              data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
              <a href="{{ route('admin.event.edit',$event->id)}}" class="btn btn-primary"><i class='fas fa-edit'></i></a>   
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div></div></div>

  

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
                     <input type="hidden" name="event_id" id="event_id">
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">OK</button>
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                 </center>
             </div>

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
         var url = '{{ route("admin.event.destroy", ":event_id") }}';
         url = url.replace(':event_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('event_id').value = id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script></section>
@endsection