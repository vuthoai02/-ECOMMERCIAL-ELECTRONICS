@extends('layouts.app')
@section('content')
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
            <div class="card" style="border-radius: 6px">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Reset Password</p>
                            <form action="{{ route('password.request') }}"method="post" class="mx-1 mx-md-4">
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
                                <div class="form-group">
                                    <button type="submit" class="btn w-100 mb-3 "
                                        style="background-color: orangered; color: white;">Send Password Reset
                                        Link</button>
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
