@extends('inspired::layouts.posts')

@section('posts')
  <h1>Create a  post</h1>

  <form method="post" action="/posts">

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="post_title" aria-describedby="Post title" placeholder="Enter title here">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="text-editor">Post</label>
    <textarea class="form-control" name="text-editor" rows="8" cols="80"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Publish</button>

</form>
@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
