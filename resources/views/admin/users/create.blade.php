@extends('layouts.user-master')

@section('title')
Create User
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Add User</h1>
        
  </div>
  <div class="section-body">
  	<div class="card-header-action" >
        <a href="{{route('admin.users')}}" class="btn btn-primary">UserList</a>
        </div>
      <adduser-component></adduser-component>
  </div>
</section>

@endsection
