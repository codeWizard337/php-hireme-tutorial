<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="#">
    <img src="{{ Storage::url('public/logo.png') }}" class="img-fluid" style="max-width: 50%;">
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-1">
        <a class="nav-link" href="/">Home</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Job Seekers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Fulltimer</a>
          <a class="dropdown-item" href="#">Freelancer</a>
        </div>
      </li>

      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Employers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Company List</a>
          <a class="dropdown-item" href="#">Add Job</a>
        </div>
      </li>

      @else
      <li class="nav-item mx-1">
        <a class="nav-link" href="#">Employers</a>
      </li>

      @endauth

      <li class="nav-item mx-1">
        <a class="nav-link" href="#">Contact Us</a>
      </li>

      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Status</a>
            <a class="dropdown-item" href="#">Resume</a>
            <a class="dropdown-item" href="#">History</a>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>

      @else
        <li class="nav-item mx-1">
          <a class="nav-link" href="login">Login</a>
        </li>

        <li class="nav-item mx-1">
          <a class="nav-link" href="#">Register</a>
        </li>
      @endauth


    </ul>
  </div>
</nav>
