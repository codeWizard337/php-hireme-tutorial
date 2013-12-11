@extends('layouts.app')

@section('content')
  @include('components.error-card')

  <form class="container p-3" action="{{ route('job.store') }}" method="post">
    @csrf

    <div class="h3 text-center mb-4">
      Hiring Form
    </div>

    <div class="card h-100">
      <div class="card-header" style="background-color: #00A0A9;"></div>

      <div class="card-body" style="background-color: #61A6AB;">
        <div class="title">
          <div class="text-center mb-3">
            <h1>FHM</h1>
            <h4>Find Hire Me</h4>
            <h6>Searching Applying Career</h6>
          </div>

          <div class="px-5 my-2">
            <div class="border"></div>
          </div>

          <div class="text-center">
            <h6>Hired Position</h6>
          </div>

          <div class="px-5 my-2">
            <div class="border"></div>
          </div>
        </div>

        <div class="row row-cols-xs-1 row-cols-md-2 justify-content-center mt-4">
          <div class="p-1">
            <div class="form-group row">
              <label for="name" class="col-xs-12 col-lg-4 col-form-label">
                Company Name
              </label>
              <select class="col-xs-12 col-lg-7 mx-3 form-control" id="name" name="company_id">
                @foreach ($companies as $company)
                  <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
              </select>

            </div>

            <div class="form-group row">
              <label for="contact" class="col-xs-12 col-lg-4 col-form-label">
                Contact Person
              </label>
              <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="contact" name="contact">
            </div>

            <div class="form-group row">
              <label for="position" class="col-xs-12 col-lg-4 col-form-label">
                Job Position
              </label>
              <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="position" name="position">
            </div>

            <div class="form-group row">
              <label for="salary" class="col-xs-12 col-lg-4 col-form-label">
                Salary (annual)
              </label>
              <input type="number" class="col-xs-5 col-lg-7 mx-3 form-control" id="salary" name="salary">
            </div>

            <div class="form-group row">
              <label for="address" class="col-xs-12 col-lg-4 col-form-label">
                Address
              </label>
              <textarea class="col-xs-12 col-lg-7 mx-3 form-control" id="address" rows="3" name="address"></textarea>
            </div>

            <div class="form-group row">
              <label for="city" class="col-xs-12 col-lg-4 col-form-label">
                City
              </label>
              <input type="text" class="col-xs-12 col-lg-7 mx-3 form-control" id="city" name="city">
            </div>

            <div class="form-group row">
              <legend class="col-xs-12 col-lg-4 col-form-label">
                Type
              </legend>
              <div class="col-xs-12 col-lg-8">
                <div class="form-check form-check-inline my-2">
                  <input type="radio" class="form-check-input" name="is_fulltime" id="male" value="true">
                  <label for="male" class="form-check-label">
                    Fulltime
                  </label>
                </div>
                <div class="form-check form-check-inline my-2">
                  <input type="radio" class="form-check-input" name="is_fulltime" id="female" value="false">
                  <label for="female" class="form-check-label">
                    Freelance
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="description" class="col-12 col-form-label">
                Description
              </label>
              <textarea class="col-xs-12 col-lg-11 mx-3 form-control" id="description" rows="5" name="description"></textarea>
            </div>

            <div class="form-group row">
              <label for="qualifications" class="col-12 col-form-label">
                Qualifications
              </label>
              <textarea class="col-xs-12 col-lg-11 mx-3 form-control" id="qualification" rows="5" name="qualification"></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="card-footer" style="background-color: #00A0A9;"></div>
    </div>

    <div class="row justify-content-center my-5">
      <button type="submit" class="col-xs-12 col-lg-5 mx-3 btn btn-primary">
        Submit
      </button>
    </div>
  </form>
@endsection
