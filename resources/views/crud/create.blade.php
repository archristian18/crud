@extends('crud.layout')

@section('title', 'Create Page')


@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

  <!-- {{ url('/student') }} -->
      <form action="{{ url('/crud') }}" method="post" enctype="multipart/form-data">
        
      {!! csrf_field() !!}


        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"></br>

        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
       
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"  value="{{old('address')}}"></br>
        
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" value="{{old('mobile')}}"></br>

        @error('mobile')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input class="form-control" name="pic" type="file" id="photo"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>

      </form>
  
  </div>
</div>
@endsection