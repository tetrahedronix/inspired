<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="links">
  <a href="https://laravel.com/docs">Documentation</a>
  <a href="https://laracasts.com">Laracasts</a>
  <a href="https://laravel-news.com">News</a>
  <a href="https://forge.laravel.com">Forge</a>
  <a href="https://github.com/laravel/laravel">GitHub</a>
    @if (Route::has('login'))
      @auth
        <a href="{{ url('/home') }}">Home</a>
      @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
      @endauth
    @endif
  </div>
</nav>
