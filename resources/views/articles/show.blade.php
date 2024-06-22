@extends('layout')

@section('title', 'Herritage Peneleh')

@section('content')
<main>
    <div class="position-relative vh-100 p-5 mb-4 rounded-3" style="background-image: url('{{ $article->uploadImage->first() ? asset($article->uploadImage->first()->url) : '' }}'); background-size: cover; background-position: center;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: #000000; opacity:0.3">
        </div>
        <div class="container-fluid py-5 text-center position-relative" style="display: flex; justify-content: center;align-items: center;height: 100%;">
            <h1 class="display-5 fw-bold text-white" style="font-size: 10rem">{{ $article->title }}</h1>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container my-5">
        <div class="col">
            <p class="fs-5 text-decoration-underline" style="color: orange"><a href="">Back to News List</a></p>
            <p class="lead">{{ $article->content }}</p>
        </div>
    </div>
</main>
@endsection
