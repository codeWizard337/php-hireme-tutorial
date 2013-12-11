@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="text-center mb-4">
      <h3>Company List</h3>
    </div>

    <div class="my-3">
      <form class="form-row" action="" method="post">
      @csrf
      <div class="col-4">
        <input type="text" class="form-control" id="search" placeholder="Company name" name="queryText">
      </div>

      <div>
        <button type="submit" class="btn btn-primary">Search</button>
      </div>

      </form>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 justify-content-center">
      @for ($i = 1; $i <= 12; $i++)
        <x-company-card />
      @endfor

    </div>

  </div>
@endsection
