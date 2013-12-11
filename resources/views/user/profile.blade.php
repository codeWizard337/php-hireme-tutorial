@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="row mb-5">
      <div class="col-9">
        <div class="h3 my-1">
          {{ $user->name }}
        </div>
        <div class="h6 my-1">
          {{ $user->email }}
        </div>
      </div>

      <div class="col-3">
        @can('owner', $user)
          <div class="row justify-content-end">
            <a type="submit" class="btn btn-primary" href="{{ route('detail.create') }}">
              Add Profile
            </a>
          </div>
        @endcan
      </div>
    </div>

    @include('components.user-detail-list', [ 'title' => 'Educations', 'lists' => $educations ])
    @include('components.user-detail-list', [ 'title' => 'Experiences', 'lists' => $experiences ])
    @include('components.user-detail-list', [ 'title' => 'Skills', 'lists' => $skills ])
    @include('components.user-detail-list', [ 'title' => 'Awards', 'lists' => $awards ])
    @include('components.user-detail-list', [ 'title' => 'Projects', 'lists' => $projects ])
  </div>
@endsection
