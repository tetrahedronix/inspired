<li>

  <div class="blog-post">

    <h2 class="blog-post-title"><a href="{{ $post->id }}">{{ $post->post_title }}</a></h2>

    @if (! empty( $post_details))

    <p class="blog-post-meta">

      {{ $post_details->post_date->toFormattedDateString() }} <a href="#">Giulio</a>

    </p>

      {{ $post_details->post_body }}

    @endif
  </div>

</li>
