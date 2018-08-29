@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')

@section('title', $general->title())

@section('posts')
@if (! $posts->isEmpty())
  @foreach ($posts as $post)
      @include('inspired::posts.content')
  @endforeach
@endif
@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
