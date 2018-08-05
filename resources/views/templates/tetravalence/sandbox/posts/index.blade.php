@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')


@section('posts')
  @foreach ($posts as $post)
      <li><a href="post/{{ $post->id }}">{{ $post->post_title }}</a></li>
  @endforeach
@endsection
