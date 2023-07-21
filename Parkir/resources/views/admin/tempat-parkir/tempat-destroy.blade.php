 <button class='btn btn-danger'
     onclick="event.preventDefault(); document.getElementById('destroy-form{{ $t->id }}').submit();">
     <span>Hapus</span>
 </button>
 <form id="destroy-form{{ $t->id }}" action="{{ route('tempat-destroy', $t->id) }}" method="POST" class="d-none">
     @csrf
 </form>
