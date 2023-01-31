@extends('layouts.main')

@section('container')

@foreach ($users as $user)
<h2> <a href="users/{{$user->id}}">{{ $user->name }}</a></h2>

@endforeach

@endsection
