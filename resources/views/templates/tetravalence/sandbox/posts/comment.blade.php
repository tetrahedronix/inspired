@if (! empty($post->comments))
<div class="blog-comment">

  <ul class="list-group">

    @foreach ($post->comments as $comment)

    <li class="list-group-item">
      {{ $comment->comment_body }}
    </li>

    @endforeach

  </ul>

</div>
@endif
