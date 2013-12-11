@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h6">{{ $job->company->name }}</div>
    <div class="h3 text-center">{{ $job->position }}</div>
    <div class="h6 text-center">{{ $job->city }}</div>

    <div class="row justify-content-center my-3">
      @cannot('recruiter', App\User::class)
        <form class="col-xs-5 col-lg-4 mx-3 p-0" action="{{ route('apply.store') }}" method="post">
          @csrf

          <input type="hidden" name="job_id" value="{{ $job->id }}">

          @if (count($job->user_status) === 0)
            <button class="w-100 btn btn-primary" type="submit">
              Apply
            </button>
          @else
            <button class="w-100 btn btn-primary" type="submit" disabled>
              Applied
            </button>
          @endif
        </form>

      @elsecan('update_job', $job)
        <a class="col-xs-5 col-lg-4 mx-3 btn btn-primary" href="{{ route('job.edit', [ 'job' => $job->id ]) }}">
          Edit Job
        </a>

        <form class="col-xs-5 col-lg-4 mx-3 p-0" action="{{ route('job.destroy', [ 'job' => $job->id ]) }}" method="post">
          @csrf
          @method('DELETE')

          <button class="w-100 btn btn-danger" type="submit">
            Close Job
          </button>
        </form>
      @endcan
    </div>

    <div class="mt-3">
      <div class="h5 font-weight-bold">Qualifications</div>
      <div>{!! nl2br($job->qualification) !!}</div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">Description</div>
      <div>{!! nl2br($job->description) !!}</div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">Location</div>
      <div>{{ $job->address }}<br/>{{ $job->city }}</div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">Salary</div>
      <div>Rp {{ $job->salary }} / year</div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">Contact</div>
      <div>{{ $job->contact }}</div>
    </div>

    @can('update_job', $job)
      <div class="mt-5">
        <div class="my-2 font-weight-bold">Applicant List (TBA)</div>

        <div class="row mx-1 text-center">
          <div class="col-2 col-lg-1 border">NO</div>
          <div class="col-5 border">NAME</div>
          <div class="col-5 col-lg-3 border">ACTION</div>
        </div>

        @php ($application_counter = 0)

        @foreach ($job->applications as $application)
          @php ($application_counter += 1)

          <div class="row mx-1">
            <div class="col-2 col-lg-1 border text-right">{{ $application_counter }}</div>
            <div class="col-5 border">
              <a href="{{ route('user.show', [ 'user' => $application->user->id ]) }}">
                {{ $application->user->name }}
              </a>
            </div>

            <div class="col-5 col-lg-3 border">
              @if ($application->status->name === 'pending')
                <form class="row justify-content-center" action="{{ route('apply.update', [ 'apply' => $application->id ]) }}" method="post">
                  @csrf
                  @method('PUT')

                  <button type="submit" class="m-1 btn btn-danger" name="verdict" value="reject">
                    Reject
                  </button>
                  <button type="submit" class="m-1 btn btn-success" name="verdict" value="accept">
                    Accept
                  </button>
                </form>

              @else
                <div class="text-center">
                  {{ ucwords($application->status->name) }}
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endcan
  </div>
@endsection
