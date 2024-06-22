@extends('layout')

@section('title', 'Sponsor')

@section('content')
<div class="container mt-4 border-0">
    <p class="h1 fw-bolder">Partner <span style="color:#fd7e14">Sponsorship</span></p>
</div>
<div class="container text-center mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm bg-secondary text-gray-100 border-0">
                <img src="{{ asset('images/pemkot 1.png') }}" alt="" style="width: 100%; height: 225px;"
                    class="object-fit-contain">
                <div class="card-body bg-white">
                    <p class="h1 fw-bolder" style="color:#fd7e14">Pemkot Surabaya</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-secondary text-gray-100 border-0">
                <img src="{{ asset('images/indonesia wonderfull 1.png') }}" alt="" style="width: 100%; height: 225px;"
                    class="object-fit-contain">
                <div class="card-body bg-white">
                    <p class="h1 fw-bolder" style="color:#fd7e14">Wonderful Indonesia<p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-secondary text-gray-100 border-0">
                <img src="{{ asset('images/dishub 1.png') }}" alt="" style="width: 100%; height: 225px;"
                    class="object-fit-contain">
                <div class="card-body bg-white">
                    <p class="h1 fw-bolder" style="color:#fd7e14">Dinas Perhubungan<p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-secondary text-gray-100 border-0">
                <img src="{{ asset('images/pokdarwis 1.png') }}" alt="" style="width: 100%; height: 225px;"
                    class="object-fit-contain">
                <div class="card-body bg-white">
                    <p class="h1 fw-bolder" style="color:#fd7e14">Pokdarwis<p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-secondary text-gray-100 border-0">
                <img src="{{ asset('images/unair 1.png') }}" alt="" style="width: 100%; height: 225px;"
                    class="object-fit-contain">
                <div class="card-body bg-white">
                    <p class="h1 fw-bolder" style="color:#fd7e14">SI Unair<p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm bg-secondary text-gray-100 border-0">
                <img src="{{ asset('images/unair 1.png') }}" alt="" style="width: 100%; height: 225px;"
                    class="object-fit-contain">
                <div class="card-body bg-white">
                    <p class="h1 fw-bolder" style="color:#fd7e14">Ilmu Sejarah Unair<p>
                </div>
            </div>
        </div>
    </div>

    @endsection
