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

    @auth
    <div class="row justify-content-center my-3">
      @if (is_jobseeker)
        <button type="submit" class="col-xs-12 col-lg-4 mx-3 btn btn-primary">
          Apply
        </button>
      @elseif (is_employer)
        <button type="submit" class="col-xs-5 col-lg-4 mx-3 btn btn-primary">
          Edit Job
        </button>
        <button type="submit" class="col-xs-5 col-lg-4 mx-3 btn btn-danger">
          Close Job
        </button>
      @endif
    </div>
    @endauth

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

    <div class="mt-5">
      <div class="h5 font-weight-bold">
        Contact
      </div>
      <div>
        +6280123123
      </div>
    </div>

    @auth
    <div class="mt-5">
      <div class="my-2 font-weight-bold">
        Applicant List
      </div>
      <div class="row mx-1">
        <div class="col-2 col-lg-1 border">
        NO
        </div>

        <div class="col-5 border">
          NAME
        </div>

        <div class="col-5 col-lg-3 border">
          ACTION
        </div>
      </div>


      <div>
        @for ($i = 1; $i <= 10; $i++)
          <div class="row mx-1">
            <div class="col-2 col-lg-1 border">
              {{$i}}
            </div>
            <div class="col-5 border">
              <a href="#">Name</a>
            </div>

            <div class="col-5 col-lg-3 border">
              <div class="row justify-content-center">
                <div class="m-1">
                  <button type="submit" class="btn btn-danger">
                    Reject
                  </button>
                </div>

                <div class="m-1">
                  <button type="submit" class="btn btn-success">
                    Accept
                  </button>
                </div>

              </div>

            </div>
          </div>
        @endfor
      </div>
    </div>
    @endauth
  </div>
@endsection
