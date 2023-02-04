@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>Created by : <a href="../users/{{$post->user->id}}">{{ $post->user->name }}</a> di <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a></h5>
        <img src = "https://source.unsplash.com/1200x400?{{ $post->category->slug }}" class="card-img-top" alt="...">
        <h6 class = "mt-4">{!! $post->body !!}</h2>
    </article>
    <a href="/posts">back to all posts</a>
@endsection