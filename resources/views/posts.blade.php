@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class = 'mt-3'>
    <h3> 
        <a href="posts/{{$post->slug }}"> {{$post->title}} </a>
    </h3>
    <h6 class = "mb-4"> {{ $post->excerpt }} </h6>
</article>

@endforeach

@endsection
