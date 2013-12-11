@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="row justify-content-center">
      <img src="{{ Storage::url('public/1.jpg') }}" class="img-fluid">
      <img src="{{ Storage::url('public/2.jpg') }}" class="img-fluid">
      <img src="{{ Storage::url('public/3.jpg') }}" class="img-fluid">
      <img src="{{ Storage::url('public/4.jpg') }}" class="img-fluid">
      <img src="{{ Storage::url('public/5.jpg') }}" class="img-fluid">
      <img src="{{ Storage::url('public/6.jpg') }}" class="img-fluid">
    </div>
  </div>
@endsection
