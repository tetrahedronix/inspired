@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')

@section('title', $general->title())

@section('posts')

  <div class="blog-post">
    <h1>{{ $post->post_title }}</h1>

    {{ $post_details->post_body }}
  </div>

@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
