 @extends('admin.index')
 @push('css-custom')
     <meta name="csrf-token" content="{{ csrf_token() }}" />
 @endpush
 @section('isi-contentAdmin')
     <section class="section">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title">Horizontal Form</h4>
             </div>
             <div class="card-content">
                 <div class="card-body">
                     <div class="row" id="table-hover-row">
                         <div class="col-6">
                             <form class="form form-horizontal">
                                 <div class="form-body">
                                     <div class="row">
                                         <div class="col-md-4">
                                             <label>Nama</label>
                                         </div>
                                         <div class="col-md-8 form-group">
                                             <input type="text" id="nama" class="form-control">
                                             <input type="hidden" id="id_parkir" class="form-control">
                                         </div>
                                         <div class="col-md-4">
                                             <label>Plat Nomor</label>
                                         </div>
                                         <div class="col-md-8 form-group">
                                             <input type="text" id="plat_nomor" class="form-control">
                                         </div>
                                         <div class="col-md-4">
                                             <label>Waktu Masuk</label>
                                         </div>
                                         <div class="col-md-8 form-group">
                                             <input type="text" id="waktu_masuk" class="form-control">
                                         </div>
                                         <div class="col-md-4">
                                             <label>Waktu Keluar</label>
                                         </div>
                                         <div class="col-md-8 form-group">
                                             <input type="text" id="waktu_keluar" class="form-control">
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                         <div class="col-6 text-center">
                             <h4>Biaya:</h4>
                             <h3><span id="biaya" class="text-danger">-</span></h3>
                             <button class="btn btn-danger" id="btnConfirm">Konfirmasi</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 @endsection
 @push('js-custom')
     <script>
         $(document).ready(function() {
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

             window.setInterval(ambilData, 1000);

             $("#btnConfirm").click(function() {
                 var id = $('#id_parkir').val();
                 confirmManual(id);
             });

             function confirmManual(idP) {
                 $.ajax({
                     type: "POST",
                     url: `{{ route('konfirmasi') }}`,
                     data: {
                         id: idP
                     },
                     success: function(data) {
                         if (data.message == 'sukses') {
                             alert('berhasil')
                         }
                     }
                 });
             }
         });

         function ambilData() {
             $.ajax({
                 type: "POST",
                 url: "{{ route('data-bayar') }}",
                 // data: ,
                 success: function(data) {
                     if (data.message == 'ada') {
                         $('#id_parkir').val(data.id);
                         $('#nama').val(data.nama);
                         $('#plat_nomor').val(data.plat_nomor);
                         $('#waktu_masuk').val(data.waktu_masuk);
                         $('#waktu_keluar').val(data.waktu_keluar);
                         $('#biaya').text(`Rp. ${data.biaya},-`);
                     } else if (data.message == 'kosong') {
                         $('#id_parkir').val('');
                         $('#nama').val('');
                         $('#plat_nomor').val('');
                         $('#waktu_masuk').val('');
                         $('#waktu_keluar').val('');
                         $('#biaya').text(`Rp. ,-`);
                     }
                     //  console.log(data);
                 }
             });
         }
     </script>
 @endpush
