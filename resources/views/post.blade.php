@extends('layouts.main')

@section('container')
<h1 class="mb-3">{{ $post->title }}</h1>
<p>By. Rejka Permana in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{{-- {{ $post->body }} --}}
{!! $post->body !!}
<a href="/blog" class="d-block mt-3">Back to posts</a>
@endsection