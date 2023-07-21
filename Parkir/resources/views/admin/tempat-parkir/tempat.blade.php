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
                            <div class="modal-primary me-1 mb-1 d-inline-block">
                                <!-- Button trigger for primary themes modal -->
                                @include('admin.tempat-parkir.tempat-store')
                            </div>

                            <!-- table hover -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Lokasi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tempat as $t)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $t->kode_tempat }}</td>
                                                <td>{{ $t->status }}</td>
                                                <td>@include('admin.tempat-parkir.tempat-edit')
                                                    &nbsp;
                                                    @include('admin.tempat-parkir.tempat-destroy')
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
