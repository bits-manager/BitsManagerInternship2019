@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit State
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
      <form method="post" action="{{ route('admin.townships.update', ['id'=>$edit_townships->id]) }}">
        
            <div class="form-group">
               <select name="state_id" id="state" class="form-control input-log dynamic" data-dependent="state">
                 <option value="">Select State :</option>
               @foreach($statedata as $state)
                <option value="{{$state->id}}" {{ $state->id === $edit_states->state_id ? 'selected' : '' }} >
                  {{$state->state_name}}
                </option>
                @endforeach
               </select>
            </div>


           <div class="form-group">
              @csrf
              <label for="name">Township Name:</label>
              <input type="text" class="form-control" name="township_name" value="{{$edit_townships->township_name}}"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Update Township</button>
      </form>
  </div>
</div>
@endsection