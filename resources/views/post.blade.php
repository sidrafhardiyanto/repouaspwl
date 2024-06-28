
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center md-5">
        <div class="col-md-8">
            <h3 class="mb-3">{{ $post->title }}</h3>
    <p>by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    @if ($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="" style="max-height: 350px; overflow: hidden;">
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="">
        @endif
    <article class="my-3 fs-5">
    {!! $post->body !!}
    </article>
    <a href="/posts" class="d-block mt-4">back to posts</a>
        </div>
    </div>
</div>

    
@endsection