@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@include('inspired::layouts.head')
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">
          Get Inspired
        </div>

        <div class="description m-b-md">
          {{ $general->description() }}
        </div>

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
        <div class="posts">
          @yield('posts')
        </div>
      </div>
    </div>
    @include('inspired::layouts.footer')
  </body>
</html>
