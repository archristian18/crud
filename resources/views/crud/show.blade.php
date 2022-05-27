@extends('crud.layout')

@section('title', 'Views')

@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $varable->name }}</h5>
        <p class="card-text">Address : {{ $varable->address }}</p>
        <p class="card-text">Mobile : {{ $varable->mobile }}</p>
  </div>
      
    </hr>
  
  </div>
</div>

