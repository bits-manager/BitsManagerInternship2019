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
          
        </tr>
    </thead>
    <tbody>
       @foreach($contact as $contact)
        
        <tr>

           
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->message}}</td>
            
       </tr>
      @endforeach
            
        
    </tbody>
  </table>
</div>
</div>
</div>

</section>




  

@endsection