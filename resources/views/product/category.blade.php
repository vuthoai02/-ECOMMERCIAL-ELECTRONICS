@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: orangered;">
                        Filter <i class="fa fa-filter" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        @foreach ($filterBySubcategory as $subcategory)
                            <p>
                                <a href="{{ url()->current() }}/{{ $subcategory->slug ?? '' }}">
                                    {{ $subcategory->name ?? '' }}
                                </a>
                            </p>
                        @endforeach
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-9">
                @include('breadcrumb')
                <div class="row">
                    @forelse ($advertisements as $advertisement)
                        <div class="col-md-4 mb-3">
                            <div class="card product-card" style="min-height: 400px;">
                                <a href="{{ route('product.view', [$advertisement->id, $advertisement->slug]) }}">
                                    <img src="{{ Storage::url($advertisement->feature_image) }}" class="card-img-top"
                                        alt="{{ $advertisement->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $advertisement->name }}</h5>
                                        <p class="card-text" style="color: #007BFF;">USD {{ $advertisement->price }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <p>Sorry, we are unable to find products based on this category.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
