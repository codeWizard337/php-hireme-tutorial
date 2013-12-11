@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center">
      Edit Profile
    </div>

    <form action="{{ route('detail.update', [ 'detail' => $detail->id ]) }}" method="post">
      @csrf
      @method('PUT')

      <div class="row col-5 col-lg-3 form-group mt-4">
        <select class="form-control" id="profileType" name="profileType" disabled>
          <option value="1" @if ($detail->type === 1) selected @endif>Education</option>
          <option value="2" @if ($detail->type === 2) selected @endif>Experience</option>
          <option value="3" @if ($detail->type === 3) selected @endif>Skills</option>
          <option value="4" @if ($detail->type === 4) selected @endif>Awards</option>
          <option value="5" @if ($detail->type === 5) selected @endif>Projects</option>
        </select>
      </div>

      <div class="row">
        <div class="col-9">
          <div class="row mt-1">
            <div class="col-12 col-lg-2">
              Title
            </div>
            <div class="col-12 col-lg-10">
              <input type="text" class="form-control" id="title" name="title" value="{{ $detail->title }}">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-12 col-lg-2">
              Description
            </div>
            <div class="col-12 col-lg-10">
              <textarea class="form-control" id="description" rows="3" name="description">{{ $detail->description }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-3">
        <button type="submit" class="col-xs-12 col-lg-5 btn btn-primary">
          Update
        </button>
      </div>
    </form>
  </div>
@endsection
