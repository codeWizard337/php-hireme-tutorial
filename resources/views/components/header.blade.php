<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="{{ route('home') }}">
    <img src="{{ Storage::url('public/logo.png') }}" class="img-fluid" style="max-width: 50%;">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-1">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Job Seekers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="{{ route('job.index') }}" method="get">
            <button type="submit" class="dropdown-item" name="type" value="fulltime">
              Fulltimer
            </button>
            <button type="submit" class="dropdown-item" name="type" value="freelance">
              Freelancer
            </button>
          </form>
        </div>
      </li>

      @can('recruiter', App\User::class)
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Employers
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('company.index') }}">Company List</a>
            <a class="dropdown-item" href="{{ route('job.create') }}">Add Job</a>
          </div>
        </li>

      @else
        <li class="nav-item mx-1">
          <a class="nav-link" href="{{ route('company.index') }}">Employers</a>
        </li>

      @endcan

      <li class="nav-item mx-1">
        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
      </li>

      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
            <a class="dropdown-item" href="{{ route('user.status') }}">Status</a>
            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          </div>
        </li>

      @else
        <li class="nav-item mx-1">
          <a class="nav-link" href="{{ route('user.login') }}">Login</a>
        </li>

        <li class="nav-item mx-1">
          <a class="nav-link" href="{{ route('user.register') }}">Register</a>
        </li>
      @endauth
    </ul>
  </div>
</nav>
