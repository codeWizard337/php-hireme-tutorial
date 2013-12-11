@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <div class="container p-3">
    <div class="h3 text-center">
      Add Profile
    </div>

    <form action="{{ route('detail.store') }}" method="post">
      @csrf

      <div class="row col-5 col-lg-3 form-group mt-4">
        <select class="form-control" id="profileType" name="profileType">
          <option value="1" selected>Education</option>
          <option value="2">Experience</option>
          <option value="3">Skills</option>
          <option value="4">Awards</option>
          <option value="5">Projects</option>
        </select>
      </div>

      <div class="row">
        <div class="col-9">
          <div class="row mt-1">
            <div class="col-12 col-lg-2">
              Title
            </div>
            <div class="col-12 col-lg-10">
              <input type="text" class="form-control" id="title" name="title" value="">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-12 col-lg-2">
              Description
            </div>
            <div class="col-12 col-lg-10">
              <textarea class="form-control" id="description" rows="3" name="description" value=""></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-3">
        <button type="submit" class="col-xs-12 col-lg-5 btn btn-success">
          Add
        </button>
      </div>
    </form>
  </div>
@endsection
