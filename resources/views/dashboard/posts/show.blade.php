@extends('dashboard.layouts.main')

@section('container')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="my-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning ms-2"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="/dashboard/posts/{{ $post->slug }}" class="btn btn-danger ms-2"><span class="mt-0" data-feather="trash"></span> Delete</button>
            </form>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top mt-3" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-4 fs-5">
            {!! $post->body !!}
            </article>
            <a href="/dashboard/posts" class="text-decoration-none fs-6">Back to Dashboard</a>
        </div>
    </div>
</div>

@endsection