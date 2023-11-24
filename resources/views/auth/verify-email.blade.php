@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card d-flex align-items-center">
                    <img src="https://play-lh.googleusercontent.com/ve2QDzDYus94qWuegB7j24-wMLrNFRAED0Dr_ApOEnBBaZbDkjm65Mww3u1aUJi1pnQl"
                        class="img-fluid w-25 mt-3" alt="">
                    <h3 class="mt-3">Verify your email address</h3>
                    <div class="card-body">
                        <form action="{{ route('verification.send') }}" method="post">
                            @csrf
                            <button type="submit" class="btn mb-3"
                                style="background-color: orangered; color: white;">Verify your email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
