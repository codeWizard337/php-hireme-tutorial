@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center">Status</div>

    <div class="row mt-3 text-center">
      <div class="col-3 border">COMPANY NAME</div>
      <div class="col-3 border">POSITION</div>
      <div class="col-2 border">DATE</div>
      <div class="col-2 border">STATUS</div>
      <div class="col-2 border">ACTION</div>
    </div>

    @foreach ($applications as $application)
      <div class="row text-center">
        <div class="col-3 border">{{ $application->job->company->name }}</div>
        <div class="col-3 border">{{ $application->job->position }}</div>
        <div class="col-2 p-1 border">{{ date('d/m/y', strtotime($application->updated_at)) }}</div>
        <div class="col-2 p-1 border">{{ ucwords($application->status->name) }}</div>

        <div class="col-2 border">
          <form class="row justify-content-center" action="{{ route('apply.destroy', [ 'apply' => $application->id ]) }}" method="post">
            @csrf
            @method('DELETE')

            @if ($application->status->name === "accepted")
              <button type="submit" class="border col-4 m-1 row justify-content-center text-body" style="background-color: #23FE19;" name="verdict" value="publish">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
              </button>
            @endif

            @if ($application->status->name === "accepted" || $application->status->name === "rejected")
              <button type="submit" class="border col-4 m-1 row justify-content-center text-body" style="background-color: #FE4219;" name="verdict" value="delete">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            @endif
          </form>
        </div>
      </div>
    @endforeach
  </div>

@endsection
