@extends('layouts.admin-master')

@section('title')
Edit State
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Edit State</h1>
  </div>
  <div class="section-body">

    <div class="card">
      <!-- card header -->
      <div class="card-header">
        <!-- card title -->
        <h4>Edit Form</h4>
      </div>
  <div class="card-body">


 @if(Session::has('toasts'))
  @foreach(Session::get('toasts') as $toast)
    <div class="alert alert-{{ $toast['level'] }}">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

      {{ $toast['message'] }}
    </div>
  @endforeach
@endif
     @if($message = Session::get('info'))
    <div class="alert alert-info alert-block">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong>{{$message}}</strong>
    </div>
    @endif  
  
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="put" action="{{ route('admin.state.update', ['id'=>$edit_states->id]) }}">
          <div class="form-group">
              @csrf
              <label for="name">State Name:</label>
              <input type="text" class="form-control" name="state_name" value="{{$edit_states->state_name}}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update State</button>
      </form>
  </div>
</div>
@endsection