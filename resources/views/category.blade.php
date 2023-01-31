@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class = 'mt-3'>
    <h3> 
        <a href="../posts/{{$post->slug }}"> {{$post->title}} </a>
    </h3>
    <p> {{ $post->excerpt }} </p>
    <p  class = "mb-5">by : <a href="../users/{{$post->user->id}}"> {{ $post->user->name }} </a>
</article> 


@endforeach
<a href="../categories">go to all categories</a>

@endsection
