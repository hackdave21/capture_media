@extends('admin.app')
@section('title','Catégories')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Catégories</h4>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
      <i class="ti ti-circle-plus me-1"></i> Nouvelle catégorie
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
              <th>Nom</th>
              <th>Slug</th>
              <th>Parent</th>
              <th>Statut</th>
              <th>Créée le</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
          @forelse($categories as $cat)
            <tr>
              <td class="fw-semibold">{{ $cat->name }}</td>
              <td class="text-muted"><code>{{ $cat->slug }}</code></td>
              <td>{{ optional($cat->parent)->name ?? '—' }}</td>
              <td>
                @if($cat->is_active)
                  <span class="badge bg-success-subtle text-success">Active</span>
                @else
                  <span class="badge bg-secondary-subtle text-secondary">Inactive</span>
                @endif
              </td>
              <td>{{ $cat->created_at?->format('d/m/Y') }}</td>
              <td class="text-end">
                <div class="d-inline-flex gap-2">
                  <a href="{{ route('admin.categories.show',$cat) }}" class="btn btn-sm btn-outline-secondary">
                    <i class="ti ti-eye me-1"></i> Voir
                  </a>
                  <a href="{{ route('admin.categories.edit',$cat) }}" class="btn btn-sm btn-primary">
                    <i class="ti ti-edit me-1"></i> Modifier
                  </a>
                  <form action="{{ route('admin.categories.destroy',$cat) }}" method="POST"
                        onsubmit="return confirm('Supprimer cette catégorie ?');">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="ti ti-trash me-1"></i> Supprimer
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center py-5">Aucune catégorie pour le moment.</td>
            </tr>
          @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer">
      {{ $categories->links() }}
    </div>
  </div>
@endsection
