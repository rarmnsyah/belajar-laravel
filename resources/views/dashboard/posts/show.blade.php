@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article>
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span> Back to all my
                        posts</a>
                    <a class="btn btn-warning" href="/dashboard/posts/ {{ $post->id }}/edit"> <span
                            data-feather="edit"></span>
                        Edit</a>
                    <form action="/dashboard/posts/{{ $post->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('yakin mau delete dex?')"><span
                                data-feather="x-circle"></span> Delete Post</button>
                    </form>

                    <br>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="...">
                        <h6 class="mt-4">{!! $post->body !!}</h2>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}"
                            class="img-fluid mt-3" alt="...">
                        <h6 class="mt-4">{!! $post->body !!}</h2>
                    @endif
                </article>
            </div>
        </div>
    </div>
@endsection
