@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4 mt-3">
            <main class="form-signin w-100 m-auto">
                <form action="/register" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" id="name" placeholder="Name" />
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback mb-2">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                            value="{{ old('username') }}" id="username" placeholder="Username" />
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback mb-2"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" id="email" placeholder="name@example.com" />
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback mb-2"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" placeholder="Password" />
                        <label for="password">Password</label>
                        <input class="form-check-input mt-1" type="checkbox" onclick="myFunction()">Show Password
                        {{-- <input type="checkbox" id='togglePasswords'> Show Password --}}
                        @error('password')
                            <div class="invalid-feedback mb-2"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>

                <small class="d-block text-center mt-3">Already Registered? <a href="/login">login</a></small>
            </main>
        </div>
    </div>
@endsection
