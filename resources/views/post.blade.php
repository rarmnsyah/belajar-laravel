@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>Created by : rarmnsyah di <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a></h5>
        <h6 class = "mt-4">{{ $post->body }}</h2>
    </article>
    <a href="/posts">back to all posts</a>
@endsection