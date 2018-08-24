@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')

@section('title', $general->title())

@section('posts')
  @if (! $posts->isEmpty())
    <ul>
    @foreach ($posts as $post)
        <li><a href="posts/{{ $post->id }}">{{ $post->post_title }}</a></li>
    @endforeach
    </ul>
  @endif
@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
