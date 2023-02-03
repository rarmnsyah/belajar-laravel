@extends('layouts.main')

@section('container')

<div class="judul">
    <h1 class = "mx-auto mb-5">All {{ $title }}s</h1>
</div>

<style>
    #unsplashImage{
    }
    a {
        text-decoration: none;
    }
    .judul{
        text-align: center;
    }
</style>

@if ($posts->count())
    <div class="card mb-3">
        <img class="card-img-top" alt="..." src = "https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}" >
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <small>
                <p> by : <a href="../users/{{$posts[0]->user->id}}"> {{ $posts[0]->user->name }} </a> di kategori <a href="../categories/{{$posts[0]->category->slug}}"> {{$posts[0]->category->name}} </a> {{$posts[0]->created_at->diffForHumans()}} </p>
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class = "btn btn-primary text-decoration-none" href="/posts/{{ $posts[0]->slug }}"> Read more </a>
        </div>
    </div>
@else
    <p> No {{ $title }}s found </p>
@endif

<div class="container col d-flex justify-content-center ms-5">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <div class = "position-absolute px-3 py-2 bg-dark" style = "background-color: rgba(0, 0, 0, 0.6)"> <a class = "text-white" href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a> </div>
                    <img src = "https://source.unsplash.com/500x400?{{ $post->category->slug }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <small class = "text-muted">
                            <p> by : <a href="../users/{{$posts[0]->user->id}}"> {{ $posts[0]->user->name }} </a>  {{$posts[0]->created_at->diffForHumans()}} </p>
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a class = "btn btn-primary text-decoration-none" href="/posts/{{ $post->slug }}"> Read more </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="judul">
    <a class = "btn btn-primary text-decoration-none mb-5" href="/posts"> Back to all Posts </a>
</div>

{{-- Menggunakan script untuk menyimpan data api dari unsplash untuk digunakan melalui id, tapi hal ini mungkin bermasalah jika dilakukan secara looping --}}
{{-- <script>
    let clientId = 'U-cBTQnX6HTEeIm1pYTAHNbjllw4kZae-GnZZwxzEDQ';
    var topics = {!! json_encode($posts[0]->category->slug) !!}
    let endpoint = `https://api.unsplash.com/photos/random/?client_id=${clientId}&query=${topics}"`;

    let imageElement = document.querySelector("#unsplashImage");
    
    fetch(endpoint)
    .then(function (response){
        return response.json();
    })
    .then(function (jsonData){
        imageElement.src = jsonData.urls.regular;
    })
    
</script> --}}

@endsection
