@extends('layouts.main')

@section('container')
@foreach ($categories as $category)
<article class = 'mt-3'>
    <ul> 
        <li>
            <a href="categories/{{ $category->slug }}"> {{ $category->name}} </a>
        </li>
    </ul>
</article>

@endforeach

@endsection
