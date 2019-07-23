<!-- index.blade.php -->

@extends('layouts.admin-master')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Hall_Events</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Hall_Event List</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.eventhall.create')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a>
        </div>
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
      <div class="table-responsive">
      <table class="table table-striped">
      <thead>
        <tr>
           <th>Event Image</th>
          <th>Hall Name</th>
          <th>Event Type</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach($data as $eventhall)
        
        <tr>
           <td><img src="{{URL::to('/')}}/image/{{$eventhall->image}}" class="img-thumbnail" width="100"/></td>
           <td>{{$eventhall->hall_name}}</td>
            <td>{{$eventhall->event_name}}</td>
            <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$eventhall->id}})" 
              data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
              <a href="{{ route('admin.eventhall.edit',$eventhall->id)}}" class="btn btn-primary"><i class='fas fa-edit'></i></a>  
            </td>
        </tr>
      @endforeach
            
        
      </tbody>
    </table>
  </div>
  </div>
</div>
  </section>


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
                     <input type="hidden" name="eventhall_id" id="eventhall_id">
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
         var url = '{{ route("admin.eventhall.destroy",":eventhall_id") }}';
         url = url.replace(':eventhall_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('eventhall_id').vaule =id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
   <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>


@endsection