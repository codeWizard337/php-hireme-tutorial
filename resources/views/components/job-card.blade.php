<div class="my-2">
  <a class="text-decoration-none text-body" href="{{ route('job.show', [ 'job' => $job->id ]) }}">
    <div class="card h-100">
      <div class="card-header h4 text-center">
        {{ $job->company->name }}
      </div>

      <div class="card-body">
        <div class="h5 font-weight-bold">{{ $job->position }}</div>
        <div> {{ $job->is_fulltime ? "Fulltime" : "Freelance" }} - {{ $job->city }}</div>

        <div class="border px-3 my-3"></div>

        <p class="line-clamp">{{ $job->description }}</p>
      </div>

      <div class="card-footer text-right">
        Posted on {{ date("F j, Y", strtotime($job->updated_at)) }}
      </div>
    </div>
  </a>
</div>
