@extends('layouts.main')

@section('container')

<style>
    a{
        text-decoration: none;
        color: white;
    }
</style>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x400?{{ $category->slug }}" class="card-img" alt="{{ $category->slug }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0,0,0,0.7)"> <a href="/posts?category={{ $category->slug}}">{{ $category->name }}</a></h5>
                </div>
              </div>
        </div>      
        @endforeach
    </div>
</div>

@endsection
