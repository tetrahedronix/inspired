@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')

@section('title', $general->title())

@section('posts')
  @include('inspired::posts.content')
  @include('inspired::posts.comment')
@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
