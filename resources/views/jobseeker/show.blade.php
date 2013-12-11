@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h6">
      Company Name
    </div>
    <div class="h3 text-center">
      Job Position
    </div>

    <div class="h6 text-center">
      City
    </div>

    <div class="row justify-content-center my-3">
      <button type="submit" class="col-xs-12 col-lg-4 mx-3 btn btn-primary">
        Apply
      </button>
    </div>

    <div class="mt-3">
      <div class="h5 font-weight-bold">
        Qualifications
      </div>
      <div>
        @for ($i=1; $i < 5; $i++)
          <div>
            -qualification {{ $i }}
          </div>
        @endfor
      </div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">
        Description
      </div>
      <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla molestias voluptatum tempore nemo, laborum tempora rem labore fugiat, esse at veniam exercitationem architecto repellendus maiores sequi quibusdam eius aspernatur ex?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla molestias voluptatum tempore nemo, laborum tempora rem labore fugiat, esse at veniam exercitationem architecto repellendus maiores sequi quibusdam eius aspernatur ex?
      </div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">
        Location
      </div>
      <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla molestias voluptatum tempore nemo, laborum tempora rem labore fugiat, esse at veniam exercitationem architecto repellendus maiores sequi quibusdam eius aspernatur ex?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla molestias voluptatum tempore nemo, laborum tempora rem labore fugiat, esse at veniam exercitationem architecto repellendus maiores sequi quibusdam eius aspernatur ex?
      </div>
    </div>

    <div class="mt-5">
      <div class="h5 font-weight-bold">
        Salary
      </div>
      <div>
        Rp 500000 / yr
      </div>
    </div>
  </div>
@endsection
