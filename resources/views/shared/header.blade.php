<nav class="navbar navbar-expand-lg navbar-light ">
  <a href="{{ url('/') }}">
    <img class="log-cut"src="{{asset('img/logo_cut.png')}}" alt="">
  </a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <i class="fas fa-book"></i> <br>
        <a class="nav-link" href="{{ url('/about') }}">About</a>
      </li>
      <li class="nav-item">
      <i class="fas fa-utensils"></i> <br>
        <a class="nav-link" href="{{ url('/restaurant') }}">Restaurant</a>
      </li>
      <li class="nav-item">
      <i class="fas fa-glass-martini-alt"></i> <br>
        <a class="nav-link" href="{{ url('/bar') }}">Bar</a>
      </li>
    </ul>
    <div class="animate__animated animate__fadeInRight main-title">
        <h2>La Nuova Taverna</h2>
    </div>
  </div>
</nav>