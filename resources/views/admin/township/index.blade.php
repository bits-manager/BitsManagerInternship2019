@extends('layouts.admin-master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Township Name</td>
           <td>State Name</td>
           <td>City Name</td>
          
          
          <td colspan="4">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->township_name}}</td>
            <td>{{$row->state_name}}</td>
            <td>{{$row->city_name}}</td>
            
           <td><a href="{{ route('admin.townships.edit',['id'=>$data->id])}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('townships.delete', ['id'=>$data->id])}}" method="post">
                  @csrf
                  <button class="btna btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection