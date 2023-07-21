@extends('admin.index')
@section('isi-contentAdmin')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Parkir</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nopol</th>
                                            <th>Masuk</th>
                                            <th>Keluar</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($parkir as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->userFK->name }}</td>
                                                <td>{{ $p->plat_nomor }}</td>
                                                <td>{{ $p->waktu_masuk }}</td>
                                                <td>{{ $p->waktu_keluar }}</td>
                                                <td>{{ $p->biaya }}</td>
                                                <td>
                                                    @include('admin.parkir.parkir-edit')
                                                    &nbsp;
                                                    @include('admin.parkir.parkir-destroy')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
