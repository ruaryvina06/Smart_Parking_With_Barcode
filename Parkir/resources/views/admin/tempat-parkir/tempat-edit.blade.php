 <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit{{ $t->id }}">
     Edit
 </button>
 <!--theme Modal -->
 <div class="modal fade text-left" id="edit{{ $t->id }}" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel160" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
         <div class="modal-content">
             <div class="modal-header bg-primary">
                 <h5 class="modal-title white" id="myModalLabel160">
                     Edit Lokasi Parkir
                 </h5>
                 <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <form action="{{ route('tempat-update', $t->id) }}" method="post">
                 @csrf
                 <div class="modal-body">
                     <label>Nama Tempat (Kode)</label>
                     <div class="form-group">
                         <input type="text" name="kode_tempat" placeholder="Isi kode lokasi parkir..."
                             value="{{ $t->kode_tempat }}" class="form-control">
                     </div>
                     <label>Status</label>
                     <div class="form-group">
                         <select class="form-select" name="status">
                             @if ($t->status == 'kosong')
                                 <option value="kosong" selected>Kosong</option>
                                 <option value="terisi">Terisi</option>
                             @else
                                 <option value="kosong">Kosong</option>
                                 <option value="terisi" selected>Terisi</option>
                             @endif
                         </select>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                         <i class="bx bx-x d-block d-sm-none"></i>
                         <span class="d-none d-sm-block">Close</span>
                     </button>
                     <button type="submit" class="btn btn-primary ml-1">
                         <span class="d-none d-sm-block">Simpan</span>
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
