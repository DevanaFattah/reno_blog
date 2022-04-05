@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}
</div>

<div class="col-lg-8">
<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="mb-3" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required focused value="{{ old('title',$post->title) }}">
      @error('title')
      <div class="invalid-feedback mt-0">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug )}}">
      @error('slug')
      <div class="invalid-feedback mt-0">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label @error('category_id') is-invalid @enderror">Category</label>
      <select id="category" name="category_id" class="form-select mb-3" aria-label="Default select example">
          @foreach ($categories as $category)
            @if (old('category_id',$category->id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else 
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
       </select>
    </div>
    <div class="">
      <label for="image" class="form-label">Image Post</label>
      <input type="hidden" name="oldImage" value="{{ $post->image }}">
      @if($post->image)
      <img src="{{ asset('storage/'. $post->image ) }}" class="img-preview img-fluid mb-3 col-sm-3 d-block">
      @else
      <img class="img-preview img-fluid col-sm-5 d-block">
      @endif
      <input class="form-control" class="form-label mt-3 @error('image') is-invalid @enderror" name="image" type="file" id="image" onchange="document.querySelector('.img-preview').src=window.URL.createObjectURL(this.files[0])">
      @error('image')
      <div class="invalid-feedback mt-0">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="my-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        @error('body')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
        <trix-editor input="body"></trix-editor>
        @error('body')
      <div class="invalid-feedback mt-0">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit Post</button>
</form>
</div>

<script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection