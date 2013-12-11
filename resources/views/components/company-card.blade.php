<form class="col-8 col-lg-4 my-1" action="{{ route('job.index') }}" method="get">
  <input type="hidden" name="company" value="{{ $company->id }}">

  <button type="submit" class="card card-body text-body">
    <div class="row">
      <div class="col-3 d-flex align-items-center justify-content-center">
        <img src="{{ Storage::url($company->logo) }}" class="img-fluid" style="max-width: 100%; height: auto; min-width: 50px">
      </div>

      <div class="col-9">
        <div class="font-weight-bold text-truncate">{{ $company->name }}</div>
        <div>Open Jobs {{ count($company->jobs) }}</div>
      </div>
    </div>
  </button>
</form>
