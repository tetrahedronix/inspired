@extends('inspired::layouts.posts')

@section('posts')
  <h1>Create a  post</h1>

  <form method="post" action="/dashboard/posts">

    @csrf

    <div class="form-group">
      <label for="post_title">Title</label>
      <input type="text" class="form-control" id="title" name="post_title" aria-describedby="Post title" placeholder="Enter title here" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="post_body">Post</label>
      <textarea class="form-text" name="post_body" rows="8" cols="80" required></textarea>
    </div>

    <div class="form-group">
      <label for="post_excerpt">Excerpt</label>
      <textarea class="form-text" name="post_excerpt" rows="3" cols="80"></textarea>
    </div>

    <div class="form-group">
      <label for="post_discuss_status">Discuss status</label>
      <select name="post_discuss_status" id="post_discuss_status">
        <option value="open">Open</option>
        <option value="closed">Closed</option>
      </select>

      <label for="post_protected">Post protected</label>
      <select name="post_protected" id="post_protected">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>

      <label for="post_parent">Post parent</label>
      <input type="text" name="post_parent" size="4" required>

      <label for="post_slug">Post slug</label>
      <input type="text" name="post_slug" size="8" required>
    </div>

    <div class="form-group">
      <label for="post_metakeys">Post meta key</label>
      <input type="text" class="form-control" id="metakeys" name="post_metakeys" placeholder="Enter metakeys here">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include('inspired-dashboard::errors')

  </form>



@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
