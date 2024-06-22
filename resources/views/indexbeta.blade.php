<html>

<head lang="en" data-bs-theme="dark">
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Cover Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-left text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
        @include('layouts.navbar')
        <div class="cover-container d-flex w-100 h-100 mx-auto flex-column text-center">
            <div class="position-relative vh-100"
                style="background-image: url('/images/index-headline.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="overlay position-absolute top-0 start-0 w-100 h-100"
                    style="background-color: #000000; opacity: 0.3;">
                </div>
                <div
                    class="container-fluid py-5 text-center position-relative d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="display-5 fw-bold">HERRITAGE</h1>
                    <h1 class="display-5 fw-bold">PENELEH</h1>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row mb-2 position-relative text-left">
                <div class="transparent-square position-absolute top-0 start-0 w-100 h-100"></div>

                <div class="col-md-6 position-relative" style="z-index: 2;">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <h3 class="mb-0">Virtual Tour Wisata</h3>
                            <h3 class="mb-0">Herritage Peneleh</h3>
                            <rect x="25%" y="99%" width="50%" height="2" fill="orange"></rect>
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
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 position-relative" style="z-index: 2;">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 position-relative" style="z-index: 2;">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="position-relative p-5 text-left text-muted bg-body border border-dashed rounded-5">
                <button type="button"
                    class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill"
                    aria-label="Close"></button>
                <svg class="bi mt-5 mb-3" width="48" height="48">
                    <use xlink:href="#check2-circle"></use>
                </svg>
                <h1 class="text-body-emphasis">Placeholder jumbotron</h1>
                <p class="col-lg-6 mx-auto mb-4">
                    This faded back jumbotron is useful for placeholder content. It's also a great way to add a bit of
                    context to a page or section when no content is available and to encourage visitors to take a
                    specific action.
                </p>
                <button class="btn btn-primary px-5 mb-5" type="button">
                    Call to action
                </button>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($articles as $article)
                <div class="col">
                    <div class="card shadow-sm bg-transparent text-gray-100 border-0">
                        @if ($article->uploadImage && $article->uploadImage->isNotEmpty())
                        @php
                        $image = $article->uploadImage->first();
                        @endphp
                        <a href="{{ asset($image->url) }}" target="_blank">
                            <img src="{{ asset($image->url) }}" alt="" style="width: 100%; height: 225px;"
                                class="rounded">
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


        <footer class="mt-auto text-white-50">
            <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
                    href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
        </footer>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



</body>

</html>
