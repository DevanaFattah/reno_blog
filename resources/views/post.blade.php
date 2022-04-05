@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ $post->title }}</h2>
            <p>By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
            @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top mt-3" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-2" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-4 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/posts" class="text-decoration-none fs-5">Back to Post</a>
        </div>
    </div>
</div>

@endsection