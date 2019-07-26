<!-- index.blade.php -->

@extends('layouts.user-master')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Manage Townships</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Township List</h4>
        <div class="card-header-action">
          <a href="{{ route('admin.townships.create')}}" class="btn btn-primary">Add<i class="fas fa-plus"></i></a></div>
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

  

        <div style="width:100%;height:100%;overflow-x: scroll;overflow-y:hidden;">
  
            <table class="table table-striped" >
                 <thead>
      
                            <tr>
          
                                      <th>State Name</th>
                                      <th>City Name</th>
                                    <th>Township Name</th>
         
                                    <th colspan="3">Action</th>
          
                              </tr>
    
                    </thead>
               <tbody>
               @foreach($data as $townships)
        
                      <div class="row">
                       <tr> 
             
                       <td>{{$townships->state_name}}</td>
                      <td>{{$townships->city_name}}</td>
                      <td>{{$townships->township_name}}</td>

           
                    <td><div class="btn-group">

                    <div><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$townships->id}})" 
                     data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash" ></i></a>
                   </div><div>
                    <a href="{{ route('admin.townships.edit',$townships->id)}}" class="btn btn-primary"><i class='fas fa-edit' ></i></a></div>
                   </td></div>
                      </tr>
              @endforeach
       </div> 
    </tbody>
  </table>

</div>
  
</section>



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
                     <input type="hidden" name="townships_id" id="townships_id">
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
         var url = '{{ route("admin.townships.destroy",":townships_id") }}';
         url = url.replace(':townships_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('townships_id').vaule =id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>

@endsection