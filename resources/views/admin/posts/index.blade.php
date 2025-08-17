@extends('admin.app')
@section('title','Articles')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Articles</h4>
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
      <i class="ti ti-circle-plus me-1"></i> Nouvel article
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
              <th>Titre</th>
              <th>Catégorie</th>
              <th>Auteur</th>
              <th>Statut</th>
              <th>Publié le</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
          @forelse($posts as $post)
            <tr>
              <td class="fw-semibold">
                <a href="{{ route('admin.posts.show',$post) }}" class="text-decoration-none">{{ $post->title }}</a>
              </td>
              <td>{{ $post->category?->name }}</td>
              <td>{{ $post->author?->name }}</td>
              <td>
                @if($post->is_published)
                  <span class="badge bg-success-subtle text-success">Publié</span>
                @else
                  <span class="badge bg-secondary-subtle text-secondary">Brouillon</span>
                @endif
              </td>
              <td>{{ $post->published_at?->format('d/m/Y H:i') ?? '—' }}</td>
              <td class="text-end">
                <div class="d-inline-flex gap-2">
                  <a href="{{ route('admin.posts.show',$post) }}" class="btn btn-sm btn-outline-secondary">
                    <i class="ti ti-eye me-1"></i> Voir
                  </a>
                  <a href="{{ route('admin.posts.edit',$post) }}" class="btn btn-sm btn-primary">
                    <i class="ti ti-edit me-1"></i> Modifier
                  </a>
                  <form action="{{ route('admin.posts.destroy',$post) }}" method="POST"
                        onsubmit="return confirm('Supprimer cet article ?');">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">
                      <i class="ti ti-trash me-1"></i> Supprimer
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr><td colspan="6" class="text-center py-5">Aucun article.</td></tr>
          @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer">
      {{ $posts->links() }}
    </div>
  </div>
@endsection
