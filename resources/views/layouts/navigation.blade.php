<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">Twitter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        @if(Auth::check())
          <li class="nav-item">
          <a class="nav-link" href="/dashboard">Dashboard</a>
        </li>
        <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/settings">Settings</a></li>
            <li><a href="/logout">Log out</a></li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Sign up</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>