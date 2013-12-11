@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="row mb-5">
      <div class="col-9">
        <div class="h3 my-1">
          Name
        </div>
        <div class="h6 my-1">
          Email
        </div>
      </div>

      <div class="col-3">
        @auth
        <div class="row justify-content-end">
          <button type="submit" class="btn btn-primary">
            Add Profile
          </button>
        </div>
        @endauth
      </div>
    </div>

    {{-- @if (size > 0) --}}
      <div class="mb-5">
        <div class="h4">
          Education
        </div>

        @for ($i = 1; $i < 5; $i++)
          <div class="row mb-3">
            <div class="col-8">
              <div>
                <div class="mt-1 font-weight-bold">
                  Title
                </div>

                <div class="mt-1">
                  Description
                </div>
              </div>
            </div>

            @auth
            <div class="col-4 d-flex justify-content-start align-items-end">
              <button type="submit" class="mx-1 btn btn-primary">Edit</button>
              <button type="submit" class="mx-1 btn btn-danger">Remove</button>
            </div>
            @endauth
          </div>
        @endfor
      </div>
    {{-- @endif --}}

    {{-- @if (size > 0) --}}
      <div class="mb-5">
        <div class="h4">
          Experience
        </div>

        @for ($i = 1; $i < 5; $i++)
          <div class="row mb-3">
            <div class="col-8">
              <div>
                <div class="mt-1 font-weight-bold">
                  Title
                </div>

                <div class="mt-1">
                  Description
                </div>
              </div>
            </div>

            @auth
            <div class="col-4 d-flex justify-content-start align-items-end">
              <button type="submit" class="mx-1 btn btn-primary">Edit</button>
              <button type="submit" class="mx-1 btn btn-danger">Remove</button>
            </div>
            @endauth
          </div>
        @endfor
      </div>
    {{-- @endif --}}

    {{-- @if (size > 0) --}}
      <div class="mb-5">
        <div class="h4">
          Skills
        </div>

        @for ($i = 1; $i < 5; $i++)
          <div class="row mb-3">
            <div class="col-8">
              <div>
                <div class="mt-1 font-weight-bold">
                  Title
                </div>

                <div class="mt-1">
                  Description
                </div>
              </div>
            </div>

            @auth
            <div class="col-4 d-flex justify-content-start align-items-end">
              <button type="submit" class="mx-1 btn btn-primary">Edit</button>
              <button type="submit" class="mx-1 btn btn-danger">Remove</button>
            </div>
            @endauth
          </div>
        @endfor
      </div>
    {{-- @endif --}}

    {{-- @if (size > 0) --}}
      <div class="mb-5">
        <div class="h4">
          Awards
        </div>

        @for ($i = 1; $i < 5; $i++)
          <div class="row mb-3">
            <div class="col-8">
              <div>
                <div class="mt-1 font-weight-bold">
                  Title
                </div>

                <div class="mt-1">
                  Description
                </div>
              </div>
            </div>

            @auth
            <div class="col-4 d-flex justify-content-start align-items-end">
              <button type="submit" class="mx-1 btn btn-primary">Edit</button>
              <button type="submit" class="mx-1 btn btn-danger">Remove</button>
            </div>
            @endauth
          </div>
        @endfor
      </div>
    {{-- @endif --}}

    {{-- @if (size > 0) --}}
      <div class="mb-5">
        <div class="h4">
          Projects
        </div>

        @for ($i = 1; $i < 5; $i++)
          <div class="row mb-3">
            <div class="col-8">
              <div>
                <div class="mt-1 font-weight-bold">
                  Title
                </div>

                <div class="mt-1">
                  Description
                </div>
              </div>
            </div>

            @auth
            <div class="col-4 d-flex justify-content-start align-items-end">
              <button type="submit" class="mx-1 btn btn-primary">Edit</button>
              <button type="submit" class="mx-1 btn btn-danger">Remove</button>
            </div>
            @endauth
          </div>
        @endfor
      </div>
    {{-- @endif --}}
  </div>
@endsection
