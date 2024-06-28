@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin">
          @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          @if (session()->has('login-failed'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('login-failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
        <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
              <label for="email">Email address</label>
              @error('email')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
          </form>
          <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register now!</a></small>
        </main>
    </div>
</div>
@endsection