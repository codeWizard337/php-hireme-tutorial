@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="text-center mb-4">
      <h3>Job List</h3>
    </div>

    <form class="my-3 form-row" action="{{ route('job.index') }}" method="get">
      <div class="col-4">
        <input type="text" class="form-control" id="search" placeholder="Company name, job position" name="q">
      </div>

      <div>
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>

    <div>
      @foreach ($jobs as $job)
        @include('components.job-card', [ 'job' => $job ])
      @endforeach
    </div>

    @if (count($jobs) === 0)
      <div class="h5 text-center font-italic font-weight-normal">
        No data found
      </div>
    @endif

    <div class="d-flex justify-content-center">
      {{ $jobs->links() }}
    </div>
  </div>
@endsection
