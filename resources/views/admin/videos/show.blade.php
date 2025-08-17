@extends('admin.app')
@section('title','Détails de la vidéo')

@section('content')
  <div class="mb-3 d-flex align-items-center justify-content-between">
    <h4 class="mb-0">Vidéo : {{ $video->title }}</h4>
    <div class="d-flex gap-2">
      <a href="{{ route('admin.videos.edit',$video) }}" class="btn btn-primary">
        <i class="ti ti-edit me-1"></i> Modifier
      </a>
      <a href="{{ route('admin.videos.index') }}" class="btn btn-outline-secondary">← Retour</a>
      <form action="{{ route('admin.videos.destroy',$video) }}" method="POST" onsubmit="return confirm('Supprimer cette vidéo ?');">
        @csrf @method('DELETE')
        <button class="btn btn-outline-danger"><i class="ti ti-trash me-1"></i> Supprimer</button>
      </form>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <div class="row g-4">
        <div class="col-md-4">
          @if($video->thumbnail)
            <img src="{{ Storage::url($video->thumbnail) }}" class="img-fluid rounded" alt="thumb">
          @else
            <div class="text-muted">Pas de miniature</div>
          @endif
        </div>
        <div class="col-md-8">
          <div class="mb-2 text-muted">Catégorie</div>
          <div class="mb-3 fw-semibold">{{ $video->category?->name ?? '—' }}</div>

          <div class="mb-2 text-muted">Auteur</div>
          <div class="mb-3">{{ $video->author?->name ?? '—' }}</div>

          <div class="mb-2 text-muted">Statut</div>
          <div class="mb-3">
            @if($video->is_published)
              <span class="badge bg-success-subtle text-success">Publié</span>
            @else
              <span class="badge bg-secondary-subtle text-secondary">Brouillon</span>
            @endif
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="mb-2 text-muted">Publié le</div>
              <div class="mb-3">{{ $video->published_at?->format('d/m/Y H:i') ?? '—' }}</div>
            </div>
            <div class="col-md-6">
              <div class="mb-2 text-muted">Créé le</div>
              <div class="mb-3">{{ $video->created_at?->format('d/m/Y H:i') }}</div>
            </div>
          </div>

          <div class="mb-2 text-muted">URL</div>
          <div class="mb-3">
            <a href="{{ $video->video_url }}" target="_blank" rel="noopener">{{ $video->video_url }}</a>
          </div>
        </div>

        <div class="col-12">
          <div class="mb-2 text-muted">Description</div>
          <div>{!! nl2br(e($video->description)) !!}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
