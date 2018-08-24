@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')

@section('title', $general->title())

@section('posts')
  <h1>A place to show the post</h1>
@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
