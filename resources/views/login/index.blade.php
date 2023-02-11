@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4 mt-3">
            <main class="form-signin w-100 m-auto">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Failed Login!</strong> Wrong email or password
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" autofocus value='{{ old('email') }}' />
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback mb-2"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered Yet? <a href="/register">Please
                        Register!</a></small>
            </main>
        </div>
    </div>
@endsection
