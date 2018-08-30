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

      </article>


    </li>

    @endforeach

    {{-- Add a comment --}}
    <div class="card">

      <div class="card-block">

          <form class="" action="/comments/{{ $post->id }}/store" method="post">

            @csrf

            <div class="form-group">
              <label for="comment_author">Your Name</label>
              <input type="text" class="form-control" id="author" name="comment_author" aria-describedby="Author Name" placeholder="Enter your name here" required>
            </div>

            <div class="form-group">
              <label for="comment_author_email">Your e-mail</label>
              <input type="text" class="form-control" id="email" name="comment_author_email" aria-describedby="Author Email" placeholder="Enter your e-mail here" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="comment_author_url">Website</label>
              <input type="text" class="form-control" id="website" name="comment_author_url" aria-describedby="Author URL" placeholder="Enter your website here">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="comment_body" rows="4" cols="40" placeholder="Add your thought here"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>

          </form>

      </div>

    </div>

  </ol>

</div>
@endif
