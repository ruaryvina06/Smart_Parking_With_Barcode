 <button class='btn btn-danger'
     onclick="event.preventDefault(); document.getElementById('destroy-form{{ $k->id }}').submit();">
     <span>Hapus</span>
 </button>
 <form id="destroy-form{{ $k->id }}" action="{{ route('kendaraan-destroy', $k->id) }}" method="POST" class="d-none">
     @csrf
 </form>
