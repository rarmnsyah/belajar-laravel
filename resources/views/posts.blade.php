@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class = 'mt-3'>
    <h3> 
        <a href="posts/{{$post->slug }}"> {{$post->title}} </a>
    </h3>
    <p>by : <a href="../users/{{$post->user->id}}"> {{ $post->user->name }} </a>
    </p>
    <p class = "mb-5"> {{ $post->excerpt }} </p>
</article>

@endforeach

@endsection
