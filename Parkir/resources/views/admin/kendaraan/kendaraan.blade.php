@extends('admin.index')
@section('isi-contentAdmin')
    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hoverable rows</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Plat Nomor</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kendaraan as $k)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $k->userFK->name }}</td>
                                                <td>{{ $k->nomor }}</td>
                                                <td>
                                                    @include('admin.kendaraan.kendaraan-edit')
                                                    &nbsp;
                                                    @include('admin.kendaraan.kendaraan-destroy')
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
