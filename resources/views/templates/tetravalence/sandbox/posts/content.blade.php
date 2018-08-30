
<div class="blog-post">

  <ul class="list-group">
    <li>

      <h2 class="blog-post-title">
        @if (Request::is('/') || Request::is('posts'))
        <a href="posts/{{ $post->id }}">{{ $post->post_title }}</a>
        @else
        {{ $post->post_title }}
        @endif
      </h2>

      @if (! empty( $post_details))

      <p class="blog-post-meta">

        {{ $post_details->post_date->toFormattedDateString() }} <a href="#">Giulio</a>

      </p>

        {{ $post_details->post_body }}

      @endif

    </li>
  </ul>

</div>
