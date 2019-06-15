@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
@if($message=Session::get('info'))
    <div class="alert alert-info alert-block">
    <button type ="button" class="close" data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
  </div>
  @endif

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Event Type</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
       @foreach($admin.event as $event)
        <tr>
            <td>{{$event->id}}</td>
            <td>{{$event->event_name}}</td>
           
            <td><a href="{{ route('admin.event.edit',$event->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                
        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$event->id}})" 
data-target="#DeleteModal" class=" btn btn-danger"><i class="fa fa-trash"></i> Dlete</a>
</td>
</tr>
@endforeach

</tbody>
</table> 
</div>
      <div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <input type="hidden" name="event_id" id="event_id">
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
         var url = '{{ route("events.delete",":event_id") }}';
         url = url.replace(':event_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('event_id').vaule =id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
@endsection