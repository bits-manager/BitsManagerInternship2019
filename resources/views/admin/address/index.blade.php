@extends('layouts.admin-master')

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Manage Address</h1>
  </div>
<div class="card">
      <!-- card header -->
      <div class="card-header">
        <h4>Address List</h4>
        <div class="card-header-action" >
        <a href="{{route('admin.address.create')}}" class="btn btn-primary">Add <i class="fas fa-plus"></i></a>
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
<div style="width:100%;height:100%;overflow-x: scroll;overflow-y:hidden";>
 <table class="table table-striped table-bordered" >
    <thead>
        <tr>
            
          <td>Address</td>
          <td>Phone</td>
          <td>Email</td>
          <td>Status</td>
          
          

          <td colspan="4">Action</td>

        </tr>
    </thead>
    <tbody>
        @foreach($address as $address)
          <tr>
            <td>{{$address->address}}</td>
            <td>{{$address->phone}}</td>
            <td>{{$address->email}}</td>
            <td>@if ($address->status == 1)
                 <i align="center" style="text-align:center; font-size:150%; font-weight:bold; color:green;" class="fas fa-check"></i>
                @else 
                 <i align="center" style="text-align:center; font-size:150%; font-weight:bold; color:red;" class="fas fa-times"></i>
                @endif
                
                      
            </td>
           <td><div class="btn-group"><div><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$address->id}})" data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> </a></div><div>
              <a href="{{ route('admin.address.edit',$address->id)}}" class="btn btn-primary"><i class='fas fa-edit'></i></a>   
            </td></div></div>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</section>

  

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
                     <input type="hidden" name="address_id" id="address_id">
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
         var url = '{{ route("admin.address.destroy", ":address_id") }}';
         url = url.replace(':address_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('address_id').value = id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
@endsection