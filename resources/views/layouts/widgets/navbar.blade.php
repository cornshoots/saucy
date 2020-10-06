<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">
  <img src="{{ asset('img/saucylogo.png') }}" alt="Saucy Lil' Box" id="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Boxes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('shop') }}">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      {{-- @if --}}
      <li class="nav-item">
          <a class="nav-link" href="#">Account</a>
      </li>
        {{-- @else --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        {{-- @endif --}}
        

    </ul>
  <form class="form-inline my-2 my-lg-0" action="{{ route('home') }}">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>