@extends('layout')

@section('title', 'Herritage Peneleh')

@section('content')
<main>
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column text-center">
        <div class="position-relative vh-100"
            style="background-image: url('/images/index-headline.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                style="background-color: #000000; opacity: 0.3;">
            </div>
            <div
                class="container-fluid py-5 text-center position-relative d-flex flex-column justify-content-center align-items-center h-100">
                <h1 class="montserrat display-5 fw-bolder">HERRITAGE</h1>
                <h1 class="montserrat display-5 fw-bolder">PENELEH</h1>
                <svg width="100%" height="4">
                    <rect x="52%" y="0" width="10%" height="4" fill="#FF7A00"></rect>
                </svg>
            </div>
            <div class="gradient-overlay"></div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row mb-2 position-relative text-left">
            <div class="transparent-square position-absolute top-0 start-0 w-100 h-100"></div>

            <div class="col-md-6 position-relative" style="z-index: 2;">
                <div
                    class="row g-0 border-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="poppins col p-4 d-flex flex-column position-static">
                        <p class="fs-3 fw-medium">Virtual Tour Wisata</p>
                        <p class="fs-3 fw-medium">Herritage Peneleh</p>
                        <svg width="100%" height="4">
                            <rect x="20%" y="0" width="25%" height="4" fill="#FF7A00"></rect>
                        </svg>
                        <p class="card-text mb-auto">Kawasan Peneleh, atau dikenal sebagai Peneleh Herritage adalah
                            salah satu kawasan wisata sejarah di Surabaya yang menyimpan jejak sejarah dari tiga
                            zaman; Majapahit, Kolonial Belanda, dan Pergerakan Nasional Indonesia. Peneleh Herritage
                            menawarkan pengalaman wisata yang unik dan edukatif bagi para pengunjungnya. Di sini,
                            pengunujung dapat belajar tentang sejarah panjang Surabaya dan peran penting kawasan
                            Peneleh dalam perjalanan bangsa Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 position-relative" style="z-index: 2;">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('images/Rectangle 5.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-2 position-relative" style="z-index: 2;">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('images/Rectangle 6.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-2 position-relative" style="z-index: 2;">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{asset('images/Rectangle 7.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="poppins position-relative p-5 text-center bg-body border-0">
            <p class="fs-2 fw-medium">Virtual <span style="color:orange;">Tour</span></p>
            <img src="{{asset('images/pexels-evgeny-tchebotarev-2187605 1.png')}}" alt="">
        </div>
    </div>
    <div class="container mt-4">
        <p class="poppins fs-2 fw-medium text-center">Event</p>
        <svg width="100%" height="4">
            <rect x="48.75%" y="0" width="2.5%" height="4" fill="#FF7A00"></rect>
        </svg>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="row">
        <div class="col">
        </div>
    </div>
</main>
@endsection
