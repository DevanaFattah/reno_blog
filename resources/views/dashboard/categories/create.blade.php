@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
</div>

<div class="col-lg-8">
<form action="/dashboard/categories" method="post" class="mb-3">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Category Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required focused value="{{ old('name') }}">
      @error('name')
      <div class="invalid-feedback mt-0">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug')is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback mt-0">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create New Category</button>
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

    // document.addEventListener('trix-file-accept', function(e) {
    //     e.preventDefault();
    // })

    // function previewImage() {
    //     const image = document.querySelector('#image');
    //     const imgPreview = document.querySelector('.img-preview');

    //     imgPreview.style.display = 'block';

    //     const oFReader = new FileReader();
    //     oFReader.readAsDataURL(image.files[0]);

    //     oFReader.onLoad = function (oFREvent) {
    //       imgPreview.src = oFREvent.target.result;
    //     }
    // }
</script>
@endsection