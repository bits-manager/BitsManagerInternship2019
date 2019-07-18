@extends('layouts.admin-master')


@section('title')
Manage State
@endsection

@section('content')

<section class="section">
  <div class="section-header">
    <h1>Manage State name</h1>
  </div>
  <div class="section-body">

    <div class="card">      

        <div class="card-header">
         <H4>Edit State</H4> 
          <div class="card-header-action">
          <a href="{{ route('admin.state')}}" class="btn btn-primary">List<i class="fas fa-plus"></i></a></div></div>
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
</div></section>
@endsection