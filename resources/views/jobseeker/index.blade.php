@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="text-center mb-4">
      <h3>Fulltimer / Freelancer</h3>
    </div>

    <div class="my-3">
      <form class="form-row" action="" method="post">
      @csrf
      <div class="col-4">
        <input type="text" class="form-control" id="search" placeholder="Company name, job position" name="queryText">
      </div>

      <div>
        <button type="submit" class="btn btn-primary">Search</button>
      </div>

      </form>
    </div>

    <div>
      @for ($i = 1; $i <= 5; $i++)
        <x-job-card />
      @endfor
    </div>

  </div>
@endsection
