@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Blog {{ auth()->user()->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">create new posts</a>

    <div class="table-responsive col-lg-8">

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a class="badge bg-info" href="/dashboard/posts/ {{ $post->id }}"> <span
                                    data-feather="eye"></span></a>
                            <a class="badge bg-warning" href="/dashboard/posts/ {{ $post->id }}"> <span
                                    data-feather="edit"></span></a>
                            <a class="badge bg-danger" href="/dashboard/posts/ {{ $post->id }}"> <span
                                    data-feather="x-circle"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
