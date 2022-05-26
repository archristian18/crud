@extends('crud.layout')

@section('title', 'Edit Page')

@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('crud/' .$varable->id) }}" method="post">
        {!! csrf_field() !!}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" id="id" value="{{$varable->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$varable->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$varable->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$varable->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div> 
</div>
@stop