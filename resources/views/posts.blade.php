@extends('layouts.main')

@section('container')

<article class = 'mt-3'>
    @foreach ($posts as $post)
    <h3> 
        <a href="posts/{{$post->id }}"> {{$post->title}} </a>
    </h3>
        <h6 class = "mb-4"> {{ $post->excerpt }} </h6>
</article>

@endforeach

@endsection
