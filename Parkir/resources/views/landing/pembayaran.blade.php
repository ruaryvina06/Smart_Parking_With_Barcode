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
            <h2 class="display-5 mb-5">Parkir Perlu Dibayar</h2>
        </div>
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                @foreach ($pembayaran as $p)
                    @if ($p->status == 'belum bayar')
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="bg-light text-center h-100 p-5">
                                <div class="btn-square bg-white rounded-circle mx-auto mb-4"
                                    style="width: 90px; height: 90px;">
                                    {{ QrCode::size(250)->generate("$p->id#keluar") }}
                                </div>
                                <h4 class="mb-3">{{ $p->plat_nomor }}</h4>
                                <p class="mb-2" style="font-weight: 700; color: red">Total: Rp.
                                    {{ number_format($p->biaya) }}</p>
                                <p class="mb-2">Silahkan Tampilkan QR-Code</p>
                                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal"
                                    data-bs-target="#qrcode{{ $p->id }}">
                                    QR-Code
                                    <i class="fa fa-qrcode"></i>
                                </button>
                                <div class="modal fade" id="qrcode{{ $p->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">QR-Code Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{ QrCode::size(250)->generate("$p->id#keluar") }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
