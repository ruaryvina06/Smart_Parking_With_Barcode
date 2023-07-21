@extends('landing.index')
@section('isi-contentLanding')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s"
            style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p>
            <h2 class="display-5 mb-5">Data Lokasi</h2>
        </div>
        <div class="container">

            <div class="row g-5 justify-content-center mb-5">
                @foreach ($lokasi as $l)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-car"></i>
                            </div>
                            <h4 class="mb-3">{{ $l->kode_tempat }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
