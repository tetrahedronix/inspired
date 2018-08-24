@extends('inspired::layouts.posts')

@section('posts')
  <h1>Create a  post</h1>

  <form method="post" action="/dashboard/posts">

    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="post_title" aria-describedby="Post title" placeholder="Enter title here" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="text-editor">Post</label>
      <textarea class="form-text" name="post_body" rows="8" cols="80" required></textarea>
    </div>

    <div class="form-group">
      <label for="excerpt">Excerpt</label>
      <textarea class="form-text" name="post_excerpt" rows="3" cols="80"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include('inspired::dashboard.errors')

  </form>



@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
