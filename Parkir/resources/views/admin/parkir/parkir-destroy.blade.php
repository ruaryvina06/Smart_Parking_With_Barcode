 <button class='btn btn-danger'
     onclick="event.preventDefault(); document.getElementById('destroy-form{{ $p->id }}').submit();">
     <span>Hapus</span>
 </button>
 <form id="destroy-form{{ $p->id }}" action="{{ route('parkir-destroy', $p->id) }}" method="POST" class="d-none">
     @csrf
 </form>
