@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="text-center mb-4">
      <h3>Fulltimer / Freelancer</h3>
    </div>
    @for ($i=1; $i<=5; $i++)
      <x-job-card />
    @endfor

  </div>
@endsection
