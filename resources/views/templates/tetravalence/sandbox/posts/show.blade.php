@inject('general', 'Tetravalence\Inspired\Services\GeneralTemplateTags')
@extends('inspired::layouts.posts')

@section('title', $general->title())

@section('posts')
<ul>
  @include('inspired::posts.content')
</ul>  
<ul>
  @include('inspired::posts.comment')
</ul>
@endsection

@section('footer')
  <!-- Start footer section -->
@endsection
