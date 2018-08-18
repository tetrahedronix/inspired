<nav class="navbar navbar-expand-lg navbar-light fixed-top">

    <ul class="navbar-nav mx-auto text-center">
      <li class="links nav-item"><a class="nav-link" href="https://laravel.com/docs">Documentation</a></li>
      <li class="links nav-item"><a class="nav-link" href="https://laracasts.com">Laracasts</a></li>
      <li class="links nav-item"><a class="nav-link" href="https://laravel-news.com">News</a></li>
      <li class="links nav-item"><a class="nav-link" href="https://forge.laravel.com">Forge</a></li>
      <li class="links nav-item"><a class="nav-link" href="https://github.com/laravel/laravel">GitHub</a></li>
        @if (Route::has('login'))
          @auth
            <li class="links nav-item active"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
          @else
            <li class="links nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="links nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
          @endauth
        @endif
    </ul>

</nav>
