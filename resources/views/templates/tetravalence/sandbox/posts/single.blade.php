<li>

  <div class="blog-post">

    <h2 class="blog-post-title"><a href="posts/{{ $post->id }}">{{ $post->post_title }}</a></h2>

    <p class="blog-post-meta">

      {{ $post_details[$post->id-1]->post_date->toFormattedDateString() }} <a href="#">Giulio</a>

    </p>

    @if (! $post_details->isEmpty())
      {{ $post_details[$post->id-1]->post_body }}
    @endif
  </div>

</li>
