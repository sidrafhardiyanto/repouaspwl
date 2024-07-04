@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category Details</h1>
</div>
<div class="col-md-8">
    <h2>{{ $category->name }}</h2>
    <p>Slug: {{ $category->slug }}</p>
</div>
@endsection