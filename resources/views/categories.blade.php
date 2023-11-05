@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category</h1>

@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
    </li>
</ul>

@endforeach
<a href="/blog" class="text-decoration-none">Back to Posts</a>

@endsection

