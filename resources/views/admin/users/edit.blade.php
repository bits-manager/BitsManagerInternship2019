@extends('layouts.user-master')

@section('title')
Edit Profile ({{ $user->name }})
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit Profile</h1>

  </div>
  <div class="section-body">
  	<div class="card-header-action" >
        <a href="{{route('admin.users')}}" class="btn btn-primary">UserList</a>
        </div>
      <profile-component user='{!! $user->toJson() !!}'></profile-component>
  </div>
</section>

@endsection
