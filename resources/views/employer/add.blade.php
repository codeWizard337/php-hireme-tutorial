@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center mb-4">
      Hiring Form
    </div>

    <x-hiring-form-card />

    <div class="row justify-content-center my-5">
      <button type="submit" class="col-xs-12 col-lg-5 mx-3 btn btn-primary">
        Submit
      </button>

    </div>
  </div>
@endsection
