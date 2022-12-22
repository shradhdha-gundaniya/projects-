@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
{{-- @each('posts.partials.post', $posts, 'post') --}}
@forelse ($posts as $key => $post)
  @include('posts.partials.post', [])

 
@empty
<p>No blog posts found!</p>
@endforelse
@endsection