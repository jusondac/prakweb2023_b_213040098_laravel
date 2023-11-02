@extends('layouts.main')

@section('container')
<h1 class="mb-3">{{ $post->title }}</h1>
<p>By. Rejka Permana in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{{-- {{ $post->body }} --}}
{!! $post->body !!}
<a href="/blog">Back to posts</a>
@endsection