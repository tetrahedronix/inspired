@if (! empty($post->comments))
<div class="blog-comment">

  <h3 class="blog-comment-title">2 Thoughts on {{ $post->post_title }}</h3>

  <ol class="list-group">

    @foreach ($post->comments as $comment)

    <li class="list-group-item">
      <article class="blog-comment-body">

        <footer class="blog-comment-meta">

          <div class="blog-comment-metadata">
            {{ $comment->comment_date->diffForHumans() }}
            <span>Edit</span>
          </div>

          <div class="blog-comment-author">
            <b>{{ $comment->comment_author }}</b>
            <span>says:</span>
          </div>

        </footer>

        <div class="blog-comment-body">

          <p>{{ $comment->comment_body }}</p>

        </div>

        <div class="blog-comment-reply">
          Reply
        </div>

      </article>


    </li>

    @endforeach

  </ol>

</div>
@endif
