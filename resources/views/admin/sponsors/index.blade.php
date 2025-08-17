@extends('admin.app')
@section('title','Sponsors')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Sponsors</h4>
    <a href="{{ route('admin.sponsors.create') }}" class="btn btn-primary">
      <i class="ti ti-circle-plus me-1"></i> Nouveau sponsor
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
    </div>
  @endif

  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>Logo</th>
              <th>Nom</th>
              <th>URL</th>
              <th>Statut</th>
              <th>Créé le</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
          @forelse($sponsors as $s)
            <tr>
              <td style="width:72px">
                @if($s->image)
                  <img src="{{ Storage::url($s->image) }}" class="img-fluid rounded" style="max-height:48px" alt="logo">
                @else
                  <span class="text-muted">—</span>
                @endif
              </td>
              <td class="fw-semibold">{{ $s->name }}</td>
              <td>
                @if($s->url)
                  <a href="{{ $s->url }}" target="_blank" rel="noopener">{{ $s->url }}</a>
                @else
                  <span class="text-muted">—</span>
                @endif
              </td>
              <td>
                @if($s->is_active)
                  <span class="badge bg-success-subtle text-success">Actif</span>
                @else
                  <span class="badge bg-secondary-subtle text-secondary">Inactif</span>
                @endif
              </td>
              <td>{{ $s->created_at?->format('d/m/Y') }}</td>
              <td class="text-end">
                <div class="d-inline-flex gap-2">
                  <a href="{{ route('admin.sponsors.show',$s) }}" class="btn btn-sm btn-outline-secondary">
                    <i class="ti ti-eye me-1"></i> Voir
                  </a>
                  <a href="{{ route('admin.sponsors.edit',$s) }}" class="btn btn-sm btn-primary">
                    <i class="ti ti-edit me-1"></i> Modifier
                  </a>
                  <form action="{{ route('admin.sponsors.destroy',$s) }}" method="POST"
                        onsubmit="return confirm('Supprimer ce sponsor ?');">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="ti ti-trash me-1"></i> Supprimer
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr><td colspan="6" class="text-center py-5">Aucun sponsor.</td></tr>
          @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer">
      {{ $sponsors->links() }}
    </div>
  </div>
@endsection
