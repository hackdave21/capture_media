@extends('admin.app')
@section('title','Détails de la catégorie')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Catégorie : {{ $category->name }}</h4>
    <div class="d-flex gap-2">
      <a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-primary">
        <i class="ti ti-edit me-1"></i> Modifier
      </a>
      <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-secondary">
        ← Retour
      </a>
      <form action="{{ route('admin.categories.destroy',$category) }}" method="POST"
            onsubmit="return confirm('Supprimer cette catégorie ?');" class="d-inline">
        @csrf @method('DELETE')
        <button class="btn btn-outline-danger">
          <i class="ti ti-trash me-1"></i> Supprimer
        </button>
      </form>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <div class="row g-3">
        <div class="col-md-6">
          <div class="mb-2 text-muted">Nom</div>
          <div class="fw-semibold">{{ $category->name }}</div>
        </div>

        <div class="col-md-6">
          <div class="mb-2 text-muted">Slug</div>
          <div><code>{{ $category->slug }}</code></div>
        </div>

        <div class="col-md-6">
          <div class="mb-2 text-muted">Parent</div>
          <div>{{ optional($category->parent)->name ?? '—' }}</div>
        </div>

        <div class="col-md-6">
          <div class="mb-2 text-muted">Statut</div>
          <div>
            @if($category->is_active)
              <span class="badge bg-success-subtle text-success">Active</span>
            @else
              <span class="badge bg-secondary-subtle text-secondary">Inactive</span>
            @endif
          </div>
        </div>

        <div class="col-12">
          <div class="mb-2 text-muted">Description</div>
          <div>{{ $category->description ?: '—' }}</div>
        </div>

        <div class="col-md-6">
          <div class="mb-2 text-muted">Créée le</div>
          <div>{{ $category->created_at?->format('d/m/Y H:i') }}</div>
        </div>

        <div class="col-md-6">
          <div class="mb-2 text-muted">Modifiée le</div>
          <div>{{ $category->updated_at?->format('d/m/Y H:i') }}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
