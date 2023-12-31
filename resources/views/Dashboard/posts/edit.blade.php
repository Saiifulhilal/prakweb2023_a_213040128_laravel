@extends('dashboard.layouts.main')

@section('container')
<div class="flex justify-between flex-wrap items-center pt-3 pb-2 mb-3 border-b">
  <h1 class="text-2xl">Edit Post</h1>
</div>
<a href="/dashboard/posts" class="bg-green-500 text-white px-4 py-2 rounded inline-flex items-center mb-3">
  <span data-feather="arrow-left" class="mr-2"></span> Back To My Post
</a>

<div class="col-span-8">
  <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
      @csrf

      <div class="mb-3">
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" class="mt-1 p-2 w-full border rounded-md @error('title') border-red-500 @enderror"
              id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
          <div class="text-red-500 text-sm">{{ $message }}</div>
          @enderror
      </div>

      <div class="mb-3">
          <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
          <input type="text" class="mt-1 p-2 w-full border rounded-md @error('slug') border-red-500 @enderror"
              id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
          @error('slug')
          <div class="text-red-500 text-sm">{{ $message }}</div>
          @enderror
      </div>

      <div class="mb-3">
          <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
          <select class="form-select mt-1 p-2 w-full border rounded-md" name="category_id">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}"
                  {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                  {{ $category->name }}
              </option>
              @endforeach
          </select>
      </div>

      <div class="mb-3">
          <label for="image" class="block text-sm font-medium text-gray-700">Post Image</label>
          <input type="hidden" name="oldImage" value="{{ $post->image }}">
          @if ($post->image)
          <img src="{{ asset('storage/' . $post->image) }}"
              class="img-preview mb-3 col-span-5 w-full h-auto">
          @else
          <img class="img-preview mb-3 col-span-5 w-full h-auto">
          @endif
          <input class="mt-1 p-2 w-full border rounded-md @error('image') border-red-500 @enderror" type="file"
              id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="text-red-500 text-sm">{{ $message }}</div>
          @enderror
      </div>

      <div class="mb-3">
          <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
          <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
          @error('body')
          <div class="text-red-500 text-sm">{{ $message }}</div>
      </div>
      @enderror
      <trix-editor input="body" class="mt-1 p-2 w-full border rounded-md"></trix-editor>
      </div>
      <button type="submit"
          class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
          Update Post
      </button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function () {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
  });

  // agar fitur upload file tidak berjalan
  document.addEventListener('trix-file-accept', function (e) {
      e.preventDefault();
  })

  function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function (oFREvent) {
          imgPreview.src = oFREvent.target.result;
      }
  }

</script>

  
@endsection