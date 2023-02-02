@extends('layouts.main')

@section('container')
@foreach ($posts as $post)
<article class = 'mt-3'>
    <ul> 
        <li>
            <a href="categories/{{ $post->slug }}"> {{ $post->name}} </a>
        </li>
    </ul>
</article>

@endforeach

@endsection
