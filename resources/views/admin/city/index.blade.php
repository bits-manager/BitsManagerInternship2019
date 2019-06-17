<!-- index.blade.php -->

@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
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
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>State Name</td>
          <td>City Name</td>
         
        </tr>
    </thead>
    <tbody>
       @foreach($data as $city)
        
        <tr>

            <td>{{$city->id}}</td>
            <td>{{$city->state_name}}</td>
            <td>{{$city->city_name}}</td>
            <td><a href="{{ route('admin.city.edit',['id'=>$city->id])}}" class="btn btn-primary">Edit</a></td>
            <td>
                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$city->id}})" 
data-target="#DeleteModal" class=" btn btn-danger"><i class="fa fa-trash"></i> Dlete</a>
</td>
</tr>
@endforeach
            
        
    </tbody>
  </table>
<div>

<div id="DeleteModal" class="modal fade " role="dialog">
   <div class="modal-dialog">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="delete">
         <div class="modal-content">
             <div class="modal-header bg-danger">
              <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <input type="hidden" name="city_id" id="city_id">
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

@endsection