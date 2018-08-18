@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@include('inspired::layouts.head')
  </head>
  <body class="text-center">

    <div class="flex-center flex-column  position-ref full-height">

      <header>
            @include('inspired::layouts.nav')
      </header>

      <main>
        <div class="content">
          <div class="title m-b-md">
            Get Inspired
          </div>

          <div class="description m-b-md">
            {{ $general->description() }}
          </div>

          <div class="posts">
            @yield('posts')
          </div>
        </div>
      </main>

      @include('inspired::layouts.footer')

    </div>

    @include('inspired::bootstrap')
  </body>
</html>
