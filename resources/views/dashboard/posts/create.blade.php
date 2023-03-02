@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Posts</h1>
    </div>

    <div class="col-lg-8">
        <form method='post' action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label @error('title') is-invalid  @enderror">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                    autofocus>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label @error('slug') is-invalid  @enderror">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" readonly
                    value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        <p>tittle has been used, please using another title</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option selected>Select Category</option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value=" {{ $category->id }}" selected>{{ $category->name }}</option>
                        @endif
                        <option value=" {{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value={{ old('body') }}>
                <trix-editor input="body"></trix-editor>
            </div>
            {{-- <a href="/dashboard/posts/getSlug">asdf</a> --}}

            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/getSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
