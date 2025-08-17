@extends('admin.app')
@section('title','Détails du sponsor')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Sponsor : {{ $sponsor->name }}</h4>
    <div class="d-flex gap-2">
      <a href="{{ route('admin.sponsors.edit',$sponsor) }}" class="btn btn-primary">
        <i class="ti ti-edit me-1"></i> Modifier
      </a>
      <a href="{{ route('admin.sponsors.index') }}" class="btn btn-outline-secondary">← Retour</a>
      <form action="{{ route('admin.sponsors.destroy',$sponsor) }}" method="POST" onsubmit="return confirm('Supprimer ce sponsor ?');">
        @csrf @method('DELETE')
        <button class="btn btn-outline-danger"><i class="ti ti-trash me-1"></i> Supprimer</button>
      </form>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <div class="row g-4">
        <div class="col-md-4">
          @if($sponsor->image)
            <img src="{{ Storage::url($sponsor->image) }}" class="img-fluid rounded" alt="logo">
          @else
            <div class="text-muted">Pas de logo</div>
          @endif
        </div>
        <div class="col-md-8">
          <div class="mb-2 text-muted">Statut</div>
          <div class="mb-3">
            @if($sponsor->is_active)
              <span class="badge bg-success-subtle text-success">Actif</span>
            @else
              <span class="badge bg-secondary-subtle text-secondary">Inactif</span>
            @endif
          </div>

          <div class="mb-2 text-muted">URL</div>
          <div class="mb-3">
            @if($sponsor->url)
              <a href="{{ $sponsor->url }}" target="_blank" rel="noopener">{{ $sponsor->url }}</a>
            @else
              <span class="text-muted">—</span>
            @endif
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-2 text-muted">Créé le</div>
              <div class="mb-3">{{ $sponsor->created_at?->format('d/m/Y H:i') }}</div>
            </div>
            <div class="col-md-6">
              <div class="mb-2 text-muted">Modifié le</div>
              <div class="mb-3">{{ $sponsor->updated_at?->format('d/m/Y H:i') }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
