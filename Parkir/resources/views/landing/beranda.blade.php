@extends('landing.index')
@section('isi-contentLanding')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landing/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">nikmati
                                        pengalaman parkir yang mudah</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">
                                        Penawaran Terbaik Untuk Pemilihan Tempat Parkir
                                    </h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Jelajahi Lebih
                                        Banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('landing/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">nikmati
                                        pengalaman parkir yang mudah</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Anda Dapat Menemukan Tempat
                                        Parkir Dengan Mudah</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Jelajahi Lebih
                                        Banyak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('landing/img/about-1.jpg') }}">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{ asset('landing/img/about-2.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Tentang Kami</p>
                    <h1 class="display-5 mb-4">Transformasi Parkir dengan Barcode</h1>
                    <p class="mb-4">Dengan aplikasi parkir berbasis website kami, pengguna dapat dengan mudah memanfaatkan
                        fitur inovatif kami menggunakan barcode.
                        Kami hadir untuk memberikan pengalaman parkir yang efisien, aman, dan nyaman bagi pengguna.
                        Kami memastikan bahwa pengguna kami dapat menikmati parkir yang lebih lancar, tanpa stres, dan
                        memberikan solusi modern yang memenuhi kebutuhan mereka.
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2"><i class="fa fa-car"></i></h1>


                        </div>
                        <div class="ms-4">
                            <h4>Fitur - fitur :</h4>
                            <p><i class="fa fa-check text-primary me-2"></i>Barcode</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Lokasi</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Informasi Pembayaran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-car fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">{{ $ken }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Car</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">{{ $pengguna }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">{{ $lok }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Location</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="{{ asset('landing/img/feature.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Kenapa Memilih Kami !</p>
                    <h1 class="display-5 mb-4">Beberapa Alasan Mengapa Orang Memilih Kami !</h1>
                    <p class="mb-4">Adapun beberapa keuntungan pengguna yang didapat seperti :
                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Kepraktisan Tanpa Batas</h4>
                                    <span>Kami adalah pilihan terbaik untuk solusi parkir menggunakan barcode berbasis
                                        website. Kami menawarkan pengalaman parkir yang praktis tanpa batas.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Akses Mudah dan Cepat</h4>
                                    <span>Melalui aplikasi parkir kami berbasis website, Anda dapat dengan mudah mengakses
                                        semua fitur yang kami tawarkan.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Inovasi Terus Menerus</h4>
                                    <span>Kami berkomitmen untuk terus berinovasi dan meningkatkan pengalaman parkir
                                        menggunakan teknologi barcode. Kami selalu mencari cara baru untuk memberikan solusi
                                        parkir yang lebih baik dan efisien.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Pelayanan Kami</p>
                <h1 class="display-5 mb-4">Kami Memberikan Layanan Parkir Terbaik</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('landing/img/service-1.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('landing/img/service-1.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Scan Barcode</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Pengguna dapat memulai parkir kendaraan dengan melakukan scan
                                    barcode. Setiap kendaraan memiliki barcode yang berbeda.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('landing/img/service-2.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('landing/img/service-2.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Informasi Lokasi</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Pengguna dapat melihat lokasi terisi atau masih kosong melalui
                                    fitur lokasi yang telah disediakan oleh kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('landing/img/service-3.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('landing/img/service-3.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Informasi Pembayaran</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Pengguna dapat melihat informasi pembayaran parkir melalui fitur
                                    pembayaran. Pengguna dapat membayar parkir secara langsung ketika keluar dari lokasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
