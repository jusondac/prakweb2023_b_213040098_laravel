@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>
<p>By. <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
{{-- {{ $post->body }} --}}
{!! $post->body !!}
<a href="/blog" class="d-block mt-3">Back to posts</a>
@endsection