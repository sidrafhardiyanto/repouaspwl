@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Edit Comment</h3>
            <form action="/comments/{{ $comment->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="body" class="form-label">Comment</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3" required>{{ old('body', $comment->body) }}</textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit"  class="btn btn-primary">Update</button>
                <a href="/posts/{{ $comment->post->slug }}" class="btn btn-secondary">Kembali ke Postingan</a>
            </form>
        </div>
    </div>
</div>
@endsection
