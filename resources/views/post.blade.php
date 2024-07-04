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

            <hr>

            <h4>Comments</h4>
            @foreach ($post->comments as $comment)
                <div class="mb-3">
                    <strong>{{ $comment->user->name }}</strong> said:
                    <p>{{ $comment->body }}</p>
                    @can('update', $comment)
                        <a href="/comments/{{ $comment->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @endcan
                    @can('delete', $comment)
                        <form action="/comments/{{ $comment->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    @endcan
                </div>
            @endforeach

            @auth
                <form action="/posts/{{ $post->slug }}/comments" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="body" class="form-label">Add a comment</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3" required></textarea>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @else
                <p>Please <a href="/login">login</a> to comment.</p>
            @endauth
        </div>
    </div>
</div>

@endsection
