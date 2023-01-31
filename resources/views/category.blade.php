@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class = 'mt-3'>
    <h3> 
        <a href="../posts/{{$post->slug }}"> {{$post->title}} </a>
    </h3>
    <p class = "mb-4"> {{ $post->excerpt }} </p>
</article> 


@endforeach
<a href="../categories">go to all categories</a>

@endsection
