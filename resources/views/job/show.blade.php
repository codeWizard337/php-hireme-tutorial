@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h6">{{ $job->company->name }}</div>
    <div class="h3 text-center">{{ $job->position }}</div>
    <div class="h6 text-center">{{ $job->city }}</div>

    <div class="row justify-content-center my-3">
      @cannot('recruiter', App\User::class)
        <a class="col-xs-12 col-lg-4 mx-3 btn btn-primary" href="#">
          Apply
        </a>
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

        <div class="row mx-1">
          <div class="col-2 col-lg-1 border">NO</div>
          <div class="col-5 border">NAME</div>
          <div class="col-5 col-lg-3 border">ACTION</div>
        </div>

        @php ($applicant_counter = 0)

        @foreach ($job->applicants as $applicant)
          @php ($applicant_counter += 1)

          <div class="row mx-1">
            <div class="col-2 col-lg-1 border">{{ $applicant_counter }}</div>
            <div class="col-5 border">
              <a href="#">{{ $applicant->user->name }}</a>
            </div>

            <div class="col-5 col-lg-3 border">
              <div class="row justify-content-center">
                <div class="m-1">
                  <button type="submit" class="btn btn-danger">Reject</button>
                </div>
                <div class="m-1">
                  <button type="submit" class="btn btn-success">Accept</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endcan
  </div>
@endsection
