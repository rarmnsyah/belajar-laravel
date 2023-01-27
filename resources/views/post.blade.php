@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"]}}</h2>
        <h5>Created by : {{ $post["author"]}}</h5>
        <h6 class = "mt-4">{{ $post["body"]}}</h2>
    </article>
    <a href="/posts">back to all posts</a>
@endsection