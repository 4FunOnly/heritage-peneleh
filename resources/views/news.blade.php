@extends('layout')

@section('title', 'News')

@section('content')
<div class="container mt-4 border-0">
    <p class="h1 fw-bolder">What New<span class="text-success">s</span>?</p>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-label="Slide 1" aria-current="true"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner my-5" style="height: 500px;">
                    <div class="carousel-item active" style="height: 100%;">
                        <img src="{{asset('images/pexels-evgeny-tchebotarev-2187605 1.png')}}" alt=""
                            class="d-block w-100 h-100" style="object-fit: cover;">
                    </div>
                    <div class="carousel-item" style="height: 100%;">
                        <svg class="bd-placeholder-img w-100 h-100" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        </svg>
                    </div>
                    <div class="carousel-item" style="height: 100%;">
                        <svg class="bd-placeholder-img w-100 h-100" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                        </svg>
                    </div>
                </div>
                <button class="carousel-control-prev d-flex align-items-center" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-flex align-items-center" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="poppins row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($articles as $article)
        <div class="col">
            <div class="card shadow-sm bg-transparent text-gray-100 border-0">
                @if ($article->uploadImage && $article->uploadImage->isNotEmpty())
                @php
                $image = $article->uploadImage->first();
                @endphp
                <a href="{{ route('articles.view',$article->id) }}" target="_blank">
                    <img src="{{ asset($image->url) }}" alt="" style="width: 100%; height: 225px;" class="rounded">
                </a>
                @else
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="50%" y="95%" fill="#eceeef" dy=".3em" text-anchor="middle">Thumbnail</text>
                    <rect x="25%" y="99%" width="50%" height="2" fill="green"></rect>
                </svg>
                @endif
                <div class="card-body bg-gray-900">
                    <p class="card-text text-start text-white">{{Str::limit($article->content,100)}}</p>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>No products available.</p>
            </div>
            @endforelse
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection
