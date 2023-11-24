@extends('layouts.app')
@section('content')
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
            <div class="card" style="border-radius: 6px">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                            <form action="{{ route('login') }}" method="post" class="mx-1 mx-md-4">
                                @csrf
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email address" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" />
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-check d-flex justify-content-between">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                        <p><a href="{{ route('password.request') }}">Forgot password?</a></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn w-100 mb-3"
                                        style="background-color: orangered; color: white;">Login</button>
                                    <a class="btn"
                                        style="background: #3B5499; color: #ffffff; width: 100%; text-align: center; display: block; border-radius:3px;"
                                        href="{{ url('auth/facebook') }}">
                                        Login with Facebook
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                class="img-fluid" alt="Sample image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection