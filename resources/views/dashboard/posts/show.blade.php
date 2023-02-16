@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <article>
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather='arrow-left'></span> Back to all my
                        posts</a>
                    <a class="btn btn-warning" href="/dashboard/posts/ {{ $post->id }}"> <span data-feather="edit"></span>
                        Edit</a>
                    <a class="btn btn-danger" href="/dashboard/posts/ {{ $post->id }}"> <span
                            data-feather="x-circle"></span> Delete</a>

                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" class="img-fluid mt-3"
                        alt="...">
                    <h6 class="mt-4">{!! $post->body !!}</h2>
                </article>
            </div>
        </div>
    </div>
@endsection
