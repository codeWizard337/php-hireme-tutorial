@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div>
      <div class="h3 text-center">
        Edit Profile
      </div>
      <x-input-card />

      <div class="row justify-content-center mt-3">
        <button type="button" class="col-xs-12 col-lg-5 btn btn-primary">
          Update
        </button>
      </div>

    </div>
    </div>
  </div>
@endsection
