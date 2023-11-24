@extends('layouts.app')
@section('content')
    <div class="slder" style="margin-top: -25px;">
        <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="image-banner" src="/slider/banner.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="image-banner" src="/slider/banner2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="image-banner" src="/slider/banner3.png" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Top Categories</h3>
            </div>
            <div class="row card-body">
                @foreach ($categories as $category)
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card mb-4">
                            <a href="{{ route('category.show', $category->slug) }}">
                                <img class="card-img-top img-thumbnail" src="{{ Storage::url($category->image) }}"
                                    alt="{{ $category->name }}">
                                <div class="card-body">
                                    <p class="text-black text-center">{{ $category->name }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Latest Posts</h3>
            </div>
            <div class="row mt-5 card-body">
                @foreach ($advertisements as $advertisement)
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow">
                            <img class="card-img-top" src="{{ Storage::url($advertisement->feature_image) }}"
                                alt="Card image cap" style="object-fit: cover; height: 250px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $advertisement->name }}</h5>
                                <p class="card-text">{{ $advertisement->price }}$</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('product.view', [$advertisement->id, $advertisement->slug]) }}"
                                            class="btn btn-sm btn-primary">View post</a>
                                    </div>
                                    <small class="text-muted">{{ $advertisement->created_at->format('Y-m-d') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        {{ $advertisements->links() }}
    </div>
@endsection
<style>
    .text-black {
        color: black;
    }

    .image-banner {
        width: 100%;
        height: 50%;
        object-fit: cover;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-size: 18px;
    }

    .card-text {
        font-weight: bold;
        color: #007BFF;
    }

    .text-muted {
        color: #666;
    }

    .card-img-top {
        max-height: 200px;
        object-fit: cover;
    }

    .btn-primary {
        background-color: #007BFF;
        color: #fff;
        border: none;
    }
</style>
