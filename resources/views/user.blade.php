@extends('layouts.main')

@section('container')

<h2>Name : {{ $user}}</h2>
@foreach ($posts as $post)
<ul>
    <li>
        <h4>{{ $post->title }}</h4>
        <p>{{ $post->excerpt}}</p>
    </li>
</ul>
@endforeach

<a href="/users">back to all users</a>
@endsection