<!-- index.blade.php -->

@extends('layouts.admin-master')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Manage Contact</h1>
  </div>
 <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Contact List</h4>
        
      </div>
<div class="card-body">
  <div style="width:100%;height:100%;overflow-x: scroll;overflow-y:hidden";>
   
  <table class="table table-striped table-bordered" >
    <thead>
        <tr>
          
          <td> Name</td>
          <td>Email</td>
          <td>Subject</td>
          <td>Message</td>
          <td colspan="2"><p class="text-dark">Action</p></td>
          
        </tr>
    </thead>
    <tbody>
       @foreach($contact as $contact)
        
        <tr>

           
            <td>{{$contact->contact_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->message}}</td>
            <td><a href="javascript:;" data-toggle="modal" onclick="deleteData({{$contact->id}})" data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div></div></div>
</section>

  <script src="{{ asset('js/app.js') }}?{{ uniqid() }}"></script>


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
                     <input type="hidden" name="contact_id" id="contact_id" >
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
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
         var url = '{{ route("admin.contact.destroy", ":contact_id") }}';
         url = url.replace(':contact_id', id);
         $("#deleteForm").attr('action', url);
         document.getElementById('contact_id').value = id;
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
@endsection