@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class = "mt-4">
    <h2>
        <a href="posts/{{$post["slug"]}}">{{$post["title"]}}</a>
    </h2>
    <h5>Created by : {{ $post["author"] }}</h2>
        <h6 class = "mt-4">{{ $post["body"]}}</h2>
</article>

@endforeach

@endsection