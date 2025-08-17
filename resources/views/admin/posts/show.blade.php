@extends('admin.app')
@section('title','Détails de l’article')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Article : {{ $post->title }}</h4>
    <div class="d-flex gap-2">
      <a href="{{ route('admin.posts.edit',$post) }}" class="btn btn-primary">
        <i class="ti ti-edit me-1"></i> Modifier
      </a>
      <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">← Retour</a>
      <form action="{{ route('admin.posts.destroy',$post) }}" method="POST" onsubmit="return confirm('Supprimer cet article ?');">
        @csrf @method('DELETE')
        <button class="btn btn-outline-danger"><i class="ti ti-trash me-1"></i> Supprimer</button>
      </form>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <div class="row g-4">
        <div class="col-md-4">
          @if($post->cover_image)
            <img src="{{ Storage::url($post->cover_image) }}" class="img-fluid rounded" alt="cover">
          @else
            <div class="text-muted">Pas d'image</div>
          @endif
        </div>
        <div class="col-md-8">
          <div class="mb-2 text-muted">Catégorie</div>
          <div class="mb-3 fw-semibold">{{ $post->category?->name ?? '—' }}</div>

          <div class="mb-2 text-muted">Auteur</div>
          <div class="mb-3">{{ $post->author?->name ?? '—' }}</div>

          <div class="mb-2 text-muted">Statut</div>
          <div class="mb-3">
            @if($post->is_published)
              <span class="badge bg-success-subtle text-success">Publié</span>
            @else
              <span class="badge bg-secondary-subtle text-secondary">Brouillon</span>
            @endif
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-2 text-muted">Publié le</div>
              <div class="mb-3">{{ $post->published_at?->format('d/m/Y H:i') ?? '—' }}</div>
            </div>
            <div class="col-md-6">
              <div class="mb-2 text-muted">Créé le</div>
              <div class="mb-3">{{ $post->created_at?->format('d/m/Y H:i') }}</div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="mb-2 text-muted">Résumé</div>
          <div class="mb-4">{{ $post->excerpt ?: '—' }}</div>

          <div class="mb-2 text-muted">Contenu</div>
          <div>{!! nl2br(e($post->body)) !!}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
