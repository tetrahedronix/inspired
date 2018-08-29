
<div class="blog-comment">
  <ul>
    <li>

      @if (! empty($post_details))

      <p class="blog-comment-meta">

        {{ $post_details->post_date->toFormattedDateString() }} <a href="#">Giulio</a>

      </p>
        @if (! empty($post->comments))

          @foreach ($post->comments as $comment)

            <article>

               {{ $comment->comment_body }}

            </article>

          @endforeach

        @endif

      @endif

    </li>
  </ul>

</div>
