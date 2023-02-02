@extends('layouts.main')

@section('container')

<h1>All {{ $title }}s</h1>

@foreach ($posts as $post)
<article class = 'mt-3'>
    <h3> 
        <a href="/posts/{{$post->slug }}"> {{$post->title}} </a>
    </h3>
    <p> by : <a href="../users/{{$post->user->id}}"> {{ $post->user->name }} </a> di kategori <a href="../categories/{{$post->category->slug}}"> {{$post->category->name}} </a> </p>
    <p class = "mb-5"> {{ $post->excerpt }} </p>
</article>

@endforeach

@endsection
