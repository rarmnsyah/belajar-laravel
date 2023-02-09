@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4 mt-3">
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput"
                            placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword"
                            placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered Yet? <a href="/register">Please
                        Register!</a></small>
            </main>
        </div>
    </div>
@endsection
