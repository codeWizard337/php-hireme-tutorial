@extends('layouts.app')

@section('content')
  <div class="container p-3">
    <div class="h3 text-center">Status</div>

    <div class="row mt-3 text-center">
      <div class="col-3 border">COMPANY NAME</div>
      <div class="col-3 border">POSITION</div>
      <div class="col-2 border">DATE</div>
      <div class="col-2 border">STATUS</div>
      <div class="col-2 border">ACTION</div>
    </div>

    <div>
      @for ($i = 1; $i < 5; $i++)
        <div class="row text-center">
        <div class="col-3 border">Google</div>
        <div class="col-3 border">Software Engineer</div>
        <div class="col-2 p-1 border">01/01/20</div>
        <div class="col-2 p-1 border">{{--Accepted/Rejected/Pending--}}Accepted</div>
        <div class="col-2 border">
          <div class="row justify-content-center">
            {{--@if (status = accepted)--}}
            <div class="col-4 m-1">
              <a class="text-decoration-none text-body" href="#">
                <div class="border row justify-content-center" style="background-color: #23FE19;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </div>
              </a>
            </div>

            {{--@if (status != pending)--}}
            <div class="col-4 m-1">
              <a class="text-decoration-none text-body" href="#">
                <div class="border row justify-content-center" style="background-color: #FE4219;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>

        </div>
      @endfor
    </div>
  </div>

@endsection
